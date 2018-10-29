// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;(function ( $, window, document, undefined ) {

	"use strict";

    // Create the defaults once
    var pluginName = "simpleCalendar",
        defaults = {
            months: ['january','february','march','april','may','june','july','august','september','october','november','december'], //string of months starting from january
            days: ['sunday','monday','tuesday','wednesday','thursday','friday','saturday'], //string of days starting from sunday
            minDate : "YYYY-MM-DD", // minimum date
            maxDate : "YYYY-MM-DD", // maximum date
            insertEvent: true, // can insert events
            displayEvent: true, // display existing event
            fixedStartDay: true, // Week begin always by monday
            event: [], //List of event
            insertCallback : function(){} // Callback when an event is added to the calendar
        };

    // The actual plugin constructor
    function Plugin ( element, options ) {        
        this.element = element;
        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.currentDate = new Date();
        this.host = "https://www.vspj.cz"
        this.init();
    }

    // Avoid Plugin.prototype conflicts
    $.extend(Plugin.prototype, {
        init: function () {
            var container = $(this.element);
            var todayDate = this.currentDate;
            
            var calendar = $('<div class="calendar"></div>');
            var header = $('<header class="gr-turqoise">'+
                           '<p class="h6 month"></p>'+
                           '<span class="btn btn-prev btn-sm"><i class="fa fa-arrow-left"></i></span>'+
                           '<span class="btn btn-next btn-sm"><i class="fa fa-arrow-right"></i></span>'+
				            '</header>');
            
            this.host = $(this.element).data('host');
            
            this.updateHeader(todayDate,header);
            calendar.append(header);
            
            this.buildCalendar(todayDate,calendar);
            container.append(calendar);
            
            this.bindEvents();
            this.redrawCalendarWithEvents();
        },
        
        //Update the current month header
        updateHeader: function (date, header) {
            header.find('.month').html(this.settings.months[date.getMonth()]);
        },
        
        //Build calendar of a month from date
        buildCalendar: function (fromDate, calendar) {
            
            var plugin = this;
            
            calendar.find('table').remove();
            
            var body = $('<table></table>');
            var thead = $('<thead></thead>');
            var tbody = $('<tbody></tbody>');
            
            //Header day in a week ( (1 to 8) % 7 to start the week by monday)
            for(var i=1; i<=this.settings.days.length; i++) {
                thead.append($('<td>'+this.settings.days[i%7].substring(0,2)+'</td>'));
            }
            
            //setting current year and month
            var y = fromDate.getFullYear(), m = fromDate.getMonth();
            
            //first day of the month
            var firstDay = new Date(y, m, 1);
            //If not monday set to previous monday
            while(firstDay.getDay() != 1){
                firstDay.setDate(firstDay.getDate()-1);
            }
            //last day of the month
            var lastDay = new Date(y, m + 1, 0);
            //If not sunday set to next sunday
            while(lastDay.getDay() != 0){
                lastDay.setDate(lastDay.getDate()+1);
            }
            //For firstDay to lastDay
            for(var day = firstDay; day <= lastDay; day.setDate(day.getDate())) {
                var tr = $('<tr></tr>');
                //For each row
                for(var i = 0; i<7; i++) {
                    
                    //alert(formatDate(day)+":"+$.map(this.settings.event, function(v) { return v[0]; }));
                    if ($.inArray(formatDate(day), $.map(this.settings.event, function(v) { return v['datum_akce']; })) > -1) {
                      var td = $('<td><a class="day" title="" data-poload="//'+this.host+'/index/calendar-json/datum/'+formatDate(day)+'">'+day.getDate()+'</a></td>');
                      td.find(".day").addClass("event");
                    }
                    else {
                      var td = $('<td><span class="day">'+day.getDate()+'</span></td>');
                    }
                    //if today is this day
                    if(day.toDateString() === (new Date).toDateString()){
                        td.find(".day").addClass("today");
                    }
                    //if day is not in this month
                    if(day.getMonth() != fromDate.getMonth()){
                       td.find(".day").addClass("wrong-month"); 
                    }
                    //Binding day event
                    //td.on('click', function(e) {
                    //    plugin.fillUp($(plugin.element),e.pageX,e.pageY);
                    //});
                    
                    tr.append(td);
                    day.setDate(day.getDate() + 1);
                }
                tbody.append(tr);
            }
            
            body.append(thead);
            body.append(tbody);
            
            var eventContainer = $('<div class="event-container"></div>');
            
            calendar.append(body);
            calendar.append(eventContainer);
        },
        //Init global events listeners
        bindEvents: function () {
            var plugin = this;
            
            //Click previous month
            $('.btn-prev').click(function(){
                $("#calendar table").fadeTo( "fast",0.5);
                plugin.currentDate.setMonth(plugin.currentDate.getMonth()-1);                
                plugin.redrawCalendarWithEvents();
            });
            
            //Click next month
            $('.btn-next').click(function(){
                $("#calendar table").fadeTo( "fast",0.5);
                plugin.currentDate.setMonth(plugin.currentDate.getMonth()+1);
                plugin.redrawCalendarWithEvents();
            });
        },
        //ajax call and redrawing calendar with events
        redrawCalendarWithEvents : function () {
          var plugin = this;
          var jqxhr = $.getJSON( "//"+plugin.host+"/index/calendar-json/datum/"+formatDate(plugin.currentDate, true), function(data) {
            //alert(JSON.stringify(data));
            $("#calendar table").fadeTo(1);
          })
            .done(function(data) {
              plugin.settings.event = data;
              plugin.buildCalendar(plugin.currentDate, $('.calendar'));
              plugin.updateHeader(plugin.currentDate, $('.calendar header'));
              $('[data-toggle="popover"]').popover();
              
              //alert( "second success" );
            })
            .fail(function() {
              //alert( "error" );
            })
            .always(function() {
              //alert( "finished" );
            });
          
        },
        //Small effect to fillup a container
        fillUp : function (elem,x,y){
            var plugin = this;
            var elemOffset = elem.offset();
            
            var filler = $('<div class="filler" style=""></div>');
            filler.css("left", x-elemOffset.left);
            filler.css("top", y-elemOffset.top);
            
            $('.calendar').append(filler);
            
            filler.animate({
                width: "300%",
                height: "300%"
            }, 500, function() {                
                $('.event-container').show();
                filler.hide();
            });
        },
        //Small effect to empty a container
        empty : function (elem,x,y){
            var elemOffset = elem.offset();
            
            var filler = $('.filler');
            filler.css("width", "300%");
            filler.css("height", "300%");
            
            filler.show();
            
            $('.event-container').hide();
            
            filler.animate({
                width: "0%",
                height: "0%"
            }, 500, function() {
                filler.remove();
            });
        }
    });

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[ pluginName ] = function ( options ) {
        return this.each(function() {
                if ( !$.data( this, "plugin_" + pluginName ) ) {
                        $.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
                }
        });
    };

})( jQuery, window, document );

function formatDate(date, month_only = false) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    if (month_only == true){
      return [year, month].join('-');
    } else {
      return [year, month, day].join('-');  
    }
    
    
}

function getEventsForMonth(date = new Date()) {
  var formatted_date = formatDate(date, true); //with month only parameter
  
  var jqxhr = $.getJSON( "//www.vspj.local/index/calendar-json/datum/"+formatted_date, function(data) {
    //alert( "success "+ data );
    alert(JSON.stringify(data))
    return data;
  })
    .done(function() {
      //alert( "second success" );
    })
    .fail(function() {
      //alert( "error" );
    })
    .always(function() {
      //alert( "finished" );
    });
 
  // Perform other work here ...
 
  // Set another completion function for the request above
  jqxhr.always(function() {
    //alert( "second finished" );
  });
  
}