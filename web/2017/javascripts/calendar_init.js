//TODO: preklady, plnění správných akcí, inicializace inline
$(function() {
  $("#calendar").simpleCalendar({
    //Defaults options below
    months: ['leden','únor','březen','duben','květen','červen','červenec','srpen','září','říjen','listopad','prosinec'], //string of months starting from january
    days: ['neděle','pondělí','úterý','středa','čtvrtek','pátek','sobota'], //string of days starting from sunday
    minDate : "YYYY-MM-DD", // minimum date
    maxDate : "YYYY-MM-DD", // maximum date
    insertEvent: false, // can insert events
    displayEvent: true, // display existing event
    fixedStartDay: true, // Week begin always by monday
    event: [], //List of event
    insertCallback : function(){ return false } // Callback when an event is added to the calendar
  });
  
  $(document).on('click','*[data-poload]',function() {
      var e = $(this);
      if (e.data('popover-shown') == 'true') {
        e.popover('hide');
      } else {
        e.data('popover-shown','true');
        e.off('click');
        $.getJSON(e.data('poload'), function(d) {
            e.popover({
              content: function() {
                var events = '';
                $.each(d, function(index,value) {
                  events = events+'<div class="media-body"><h6 class="mt-0 mb-1 text-turqoise">'+value['nazev_akce']+'<br /><small><i class="fa fa-calendar"></i> &nbsp;'+value['datum_konani']+'</small></h6>'+value['perex']+'</div>';
                });
                return events; 
              },
              html: true,
              placement: 'left',
              trigger: 'click'
            }).popover('show');
        });
      }

  });
  
  
});

