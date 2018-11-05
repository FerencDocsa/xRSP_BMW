<?php
ob_start();
session_start();
include("db.php");
?>

<html lang="cs" class="no-js"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="./files/style.css" media="all" rel="stylesheet" type="text/css">
    <title>LOGOS POLYTECHNIKOS // BMW</title>    <link rel="stylesheet" crossorigin="anonymous" href="./files/main.css"><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main" src="./files/main.js.Без названия"></script><style type="text/css" nonce="4B4AB78075BBFD4CA50DFC6246CA14BC">#AD_CONTROL_28,#AD_Top,#AD_banner,#AdColumn,#AdContainer,#AdHeader,#AdImage,#Adcode,#AdvertiseFrame,#Advertisements,#BottomAdContainer,#BottomAds,#ContentAd,#HeroAd,#PreRollAd,#RightAdBlock,#TopAd,#WNAd41,#ab_adblock,#ad-area,#ad-background,#ad-bg,#ad-bottom,#ad-buttons,#ad-container,#ad-header,#ad-header-728x90,#ad-leaderboard,#ad-main,#ad-panel,#ad-right,#ad-rotator,#ad-target,#ad-text,#ad-top,#ad-top-banner-placeholder,#ad-top-wrapper,#ad-unit,#ad-wrapper,#ad468,#ad728,#ad728x90,#adBanner,#adBanner1,#adBelt,#adComponentWrapper,#adDiv,#adFrame,#adGallery,#adHeader,#adHolder,#adLayer,#adLeader,#adLink1,#adPosition0,#adText,#ad_1,#ad_2,#ad_3,#ad_4,#ad_5,#ad_728_90,#ad_area,#ad_banner,#ad_center,#ad_content,#ad_global_above_footer,#ad_header,#ad_leaderboard,#ad_main,#ad_overlay,#ad_ph_1,#ad_space,#ad_square,#ad_table,#ad_top,#ad_topslot,#ad_unit,#ad_wrap,#ad_wrapper,#adaptv_ad_player_div,#adbackground,#adbanner,#adbar,#adblock,#adboard,#adbody,#adbox,#adcode,#adcontainer,#adcontainer1,#adcontent,#adhead,#adheader,#adimg1,#adlayer,#adnews,#adposition3,#adright,#ads-1,#ads-col,#ads-wrapper,#ads1,#ads2,#ads3,#ads4,#adsHeader,#adsIframe,#ads_bottom,#ads_iframe,#ads_right,#ads_top,#ads_wrapper,#adsdiv,#adsense,#adsense2,#adsense_block,#adsense_inline,#adsensewide,#adspace,#adspace_top,#adspot-300x250-pos-1,#adspot-300x250-pos-2,#adstop,#adtext,#adtop,#adv,#adv-masthead,#adv-title,#adv-top,#adv_config,#adv_right,#advblock,#advert-1,#advert1,#advert2,#advertContainer,#advert_box,#advertise,#advertisement1,#advertisetop,#advertising_wrapper,#adverts,#advtop,#adwrapper,#banner-ad,#bannerAd,#bannerAdWrapper,#banner_ad,#banner_topad,#bannerad,#bigAd,#bigad,#body_ad,#bottomAd,#bottomAds,#bottom_ad,#centerads,#cmn_ad_tag_head,#content-header-ad,#contentAd,#content_ads,#content_adv,#contentad,#contentadcontainer,#ctlDisplayAd1_lblAd,#dart-container-728x90,#dfp_ad_Entry_728x90,#dfp_ad_Home_728x90,#divAd,#div_prerollAd_1,#download_ad,#featuread,#featured-ads,#featuredAds,#feed_links_ad_container,#footer-ads,#footer_ad,#footer_ads,#game-ad,#googlead,#gridAdSidebar,#head-ad,#header-ads,#headerAd,#headerAdContainer,#header_ad,#homead,#inner-advert-row,#ka_adRightSkyscraperWide,#leaderAd,#leaderBoardAd,#leaderboard-ad,#leaderboard-advertisement,#leaderboardad,#left-ad,#left_ads,#leftad,#leftads,#logoAd,#logo_ad,#mainAd,#main_ad,#mpu2,#mpu2_container,#mpu_container,#msad,#my-adsFPAD,#myAd,#player_ads,#pre_advertising_wrapper,#prerollAd,#promo-ad,#publicidad,#reklama,#rh-ad,#right_ad,#right_ads,#right_adsense,#search-sponsor,#searchAd,#search_ads,#sideAd,#side_ads,#sidebar-ads,#sidebar_ad,#sidebar_ads,#skybox-ad,#sponsorAdDiv,#sponsorText,#sponsor_ad,#sponsoredwellcontainerbottom,#sponsors-home,#takeover_ad,#text-ads,#theAd,#top-ad,#top-ad-content,#topAd,#topAdSpace,#topAdSpace_div,#topAdvert,#topBannerAd,#top_ad,#top_ads,#topad,#topadvert,#topbannerad,#tv_player a[href*="baskino."][target="_blank"],#under_story_ad,#video-adv,#videoAd,#videoAdContainer,#videoads,#vkMsg,.ADBAR,.AdBar,.AdBody:not(body),.AdBox,.AdInfo,.AdSidebar,.AdTitle,.AdvertContainer,.HomeAds,.IM_ad_unit,.LazyLoadAd,.RelatedAds,.SponsoredContent,.ad-300x250,.ad-970,.ad-banner,.ad-block,.ad-body,.ad-border,.ad-btn,.ad-button,.ad-cat,.ad-cell,.ad-cluster,.ad-display,.ad-enabled,.ad-fixed,.ad-flag,.ad-header,.ad-holder,.ad-icon,.ad-img,.ad-inner,.ad-item,.ad-leader-top,.ad-leaderboard,.ad-left,.ad-link,.ad-links,.ad-loaded,.ad-panel,.ad-placement,.ad-rail,.ad-right,.ad-row,.ad-scroll,.ad-section,.ad-served,.ad-sidebar,.ad-source,.ad-square,.ad-stack,.ad-text,.ad-top,.ad-unit,.ad-unit-300-wrapper,.ad-vertical-container,.ad-wide,.ad-wrap,.ad-wrapper,.ad300,.ad468,.ad728,.ad90,.adBanner,.adBar,.adBlock,.adBottomBoard,.adBox,.adChoicesLogo,.adContent,.adDiv,.adElement,.adFrame,.adFrameCnt,.adHead,.adHeader,.adHeaderblack,.adHeadline,.adHolder,.adHoldert,.adImg,.adItem,.adLink,.adMessage,.adMiddle,.adMod,.adModule,.adOverlay,.adPanel,.adPod,.adResult,.adRight,.adRotator,.adSpace,.adSpot,.adText,.adTitle,.adTopHome,.adWidget,.adWrap,.ad_1,.ad_160,.ad_160x600,.ad_2,.ad_3,.ad_728x90,.ad_960,.ad_Right,.ad_block,.ad_body,.ad_bottom,.ad_container,.ad_content,.ad_description,.ad_global_header,.ad_head_rectangle,.ad_header,.ad_img,.ad_item,.ad_large,.ad_leaderboard,.ad_middle,.ad_outer,.ad_promo,.ad_slug_table,.ad_small,.ad_space,.ad_spot,.ad_text,.ad_title,.ad_trick_header,.ad_trick_left,.ad_wrap,.ad_wrapper,.adamazon,.adarea,.adbanner,.adbar,.adbottom,.adbutton,.adcolumn,.adcont,.addiv,.adframe,.adfree,.adheader,.adholder,.adinfo,.adkit,.adlink,.adlist,.admain,.admiddle,.adright,.adrow1,.adrow2,.ads-1,.ads-2,.ads-3,.ads-300-250,.ads-area,.ads-bg,.ads-box,.ads-col,.ads-content,.ads-footer,.ads-header,.ads-holder,.ads-inline,.ads-item,.ads-right,.ads-section,.ads-title,.ads-top,.ads1,.adsBlock,.adsBox,.adsWidget,.ads_block,.ads_catDiv,.ads_div,.ads_top,.ads_wrapper,.adsbottombox,.adsbox,.adsbygoogle,.adscontainer,.adsense-header,.adshome,.adside,.adsinfo,.adslot,.adslot_1,.adslot_blurred,.adspace,.adtable,.adtile,.adtop,.adtxt,.adv-block,.adv-header,.adv-list,.adv-text,.adv300,.adv_1,.adv_300,.adv_left,.adv_right,.adv_title,.adv_top,.adv_txt,.advblock,.advert-block,.advert-box,.advert-container,.advert-content,.advert-horizontal,.advert-wrapper,.advert2,.advertColumn,.advertContainer,.advertLink,.advertText,.advert_area,.advert_container,.advert_list,.advertblock,.advertbox,.advertisement-1,.advertisement-block,.advertisement__leaderboard,.advertiser,.advertising-content,.advertising_banner,.advertising_block,.advertisment,.advertorial,.adverts,.adverttext,.advt,.advtext,.adwolf-holder,.adwords,.afs_ads,.after-post-ad,.ammblock,.article-advert,.article_ad,.b-adv,.b-advert,.b-banner,.b-media-banner,.banner-ad,.banner-ads,.banner-adv,.banner160x600,.banner300,.bannerAd,.banner_728x90,.banner_ad,.bannerad,.big-ads,.block-ad,.block-ec_ads,.block-simpleads,.blog-ads,.bottom-ad,.bottom-ads,.bottom-left-ad,.bottomAds,.bottom_ad_block,.box-ads,.box-radvert,.box-recommend-ad,.box_ads,.box_adv,.boxad,.boxadv,.btn-ad,.can_ad_slug,.category-ad,.change_AdContainer,.chitikaAdBlock,.commerce-inset,.container_ad,.container_row_ad,.contentAd,.contentAds,.content_ads,.content_tagsAdTech,.context-ads,.cp-adsInited,.custom-ad,.desktop-ad,.desktop_ad,.dfp-ad,.dfp-ad-unit,.dfp-tag-wrapper,.displayAd,.download_ad,.easyazon-block,.ec-ads-remove-if-empty,.ezAdsense,.featured-ad,.featuredAdBox,.flash-advertisement,.footer-ad,.footer-ads,.footer_ad,.footerad,.forumAd,.gallery-ad,.google-sponsored,.googleAdSense,.googleAds,.google_ad,.greyAd,.grf-list__item:not([data-type="ae"]),.grf-widget__logo,.grid-item-ad,.has-ad,.hasads,.header-ad,.headerAd,.header_ad,.header_ad_center,.header_advert,.headerad,.headerads,.home-ad,.home-ads,.homeAd,.homead,.homepage-ad,.homepage_ads,.horizontal_ad,.imageAds,.img_ad,.imgad,.inner_ad,.innerad,.insert-post-ads,.ipsAd,.item-ads,.item-container-ad,.js-springs__top,.js-sticky-ad,.lastads,.leaderboard-ad,.leaderboard-ads,.leftAd,.leftad,.list-ad,.list-ads,.listad,.logo-ad,.madv,.marketing-ad,.mid_ad,.middle_AD,.mod-adopenx,.module-ad,.nativead,.nav-ad,.newsAd,.node-ad,.oasad,.oio-banner-zone,.openx,.overlay-ads,.pads2,.page-ad,.page_ad,.plainAd,.playerAd,.player_ad,.player_hover_ad,.pm-ad,.post-ad,.post-sponsored,.post_ad,.postad,.premiumAdOverlay,.premiumAdOverlayClose,.promoAd,.pub_300x250,.pub_300x250m,.pub_728x90,.publicidade,.pushdown-ad,.quads-location,.rail-ad,.rbRectAd,.rectangle_ad,.refreshAds,.region-top-ad-position,.reklam,.reklama,.reportAdLink,.resultad,.review-ad,.right-ad,.rightAd,.right_ad,.right_ads_column,.rightad,.rightadv,.searchAds,.searchad,.searchads,.section-sponsor,.showAd,.side-ad,.side-bar-ad-position1,.sideAd,.sidebar-ad-c,.sidebar-ads,.single-ad,.singleAd,.skinAd,.sky_ad,.skyscraperAd,.slide-ad,.smallAd,.small_ad,.smallads,.sponsor-box,.sponsor-logo,.sponsorBlock,.sponsorBottom,.sponsor_block,.sponsoredLinks,.sponsorlink,.sticky-ad,.story-ad,.taboola-ad,.tc_ad_unit,.td-ad,.td-header-ad-wrap,.text-ad,.text-ad-links,.text-ads,.textAd,.text_ad,.text_ads,.textad,.textads,.top-ad,.top-ad-container,.top-ad-content,.top-ad-wrapper,.top-advert,.topAD,.topAds,.top_ad,.top_ad_div,.top_ad_wrap,.top_ads,.topads,.tower-ad,.trc-content-sponsored,.trc_rbox .syndicatedItem,.trc_rbox_border_elm .syndicatedItem,.trc_rbox_div .syndicatedItem,.trc_related_container div[data-item-syndicated="true"],.type_ads_default,.vertical-ads,.view_ad,.wide-ad,.wideAd,.withAds,.wnad,.wpInsertInPostAd,.wp_bannerize,.yom-ad,[href*="media.hubfiles.gdn"],[href^="http://join.allofgfs.com/track/"],[href^="http://join.freshgfs.com/track/"],[href^="http://join.innocenthigh.com/track/"],[href^="http://join.muffx.com/track/"],[href^="http://join.seemygf.com/track/"],[href^="http://join.self-shot.com/track/"],[href^="http://join.teengfsex.com/track/"],[href^="http://myalternativegflink.com/track/"],[href^="http://secure.18exgfs.com/track/"],[href^="http://secure.badassgirlfriends.com/track/"],[href^="http://secure.bustygfsexposed.com/track/"],[href^="http://secure.chatrevenge.com/track/"],[href^="http://secure.dagfs.com/track/"],[href^="http://secure.fubilov.com/track/"],[href^="http://secure.hotgfvideos.com/track/"],[href^="http://secure.mynngf.com/track/"],[href^="http://secure.obsessedwithmyself.com/track/"],[href^="http://secure.publicgfvideos.com/track/"],[href^="http://secure.realgfsexposed.com/track/"],[href^="http://secure.slutswithphones.com/track/"],[href^="http://secure.watchmygf.com/track/"],[id*="ScriptRoot"],a[href*="&utm_medium=cpa"][target="_blank"],a[href*=".converteam.online"],a[href*=".revimedia.com/"],a[href*=".trust.zone"],a[href*=".yvok.ru"],a[href*="//ukrmedia.center/"],a[href*="/adrotate-out.php?"],a[href*="/advtise.net"],a[href*="/bodyclick.net"],a[href*="/hit.all-in-one.pp.ua/search?"],a[href*="/maniya.info"],a[href*="/onvix.tv/promo/"][target=_blank],a[href*="/relap.io/adv/"],a[href*="/rikkobr.com"],a[href*="/skiles.link"],a[href*="/starinform.ru"],a[href*="/traforet.com"],a[href*="101xp.com/?utm_source=ad"],a[href*="1xwgn.xyz"],a[href*="2di.site"],a[href*="://winline.ru"],a[href*="abs-cdn.org"],a[href*="actionteaser.ru"],a[href*="adsmedia-provider.com"],a[href*="advclicks.net"],a[href*="advert-content.com"],a[href*="aff-ads.com"],a[href*="autochetki.ru"] img,a[href*="autoteaser.net"],a[href*="bigleads.ru"],a[href*="binomo.com/promo"] > img,a[href*="bromigo.pw"],a[href*="catcut.net"],a[href*="clickscloud.net"],a[href*="cpagette.com"],a[href*="cpagetti.com"],a[href*="cpagettio.com"],a[href*="cpaggetti.com"],a[href*="cpaggetti.ru"],a[href*="cpamatica.com"],a[href*="download-center.club"],a[href*="globalteaser.ru"],a[href*="incrypted.net"][href*="banner"][target="_blank"],a[href*="installoffer.net"],a[href*="kadam.net"],a[href*="kadam.ru"],a[href*="leadadvert.ru"],a[href*="lenkmio.com"][target="_blank"],a[href*="marathonmirrorbet.com"],a[href*="marketgid.com/"],a[href*="medicinetizer.ru"],a[href*="novostimira.biz"],a[href*="omnicpa.ru"],a[href*="onetwoaffiliates.com"],a[href*="people-group.su"],a[href*="promoheads.com"],a[href*="reals-gooods.ru"],a[href*="recreativ.ru"],a[href*="redtram.com"],a[href*="rootmedia.cc"],a[href*="runetki.com"],a[href*="salesdoubler.com.ua"],a[href*="teasermoney.com"],a[href*="tizerclick.com"],a[href*="tovar.helloprice.ru/click/"],a[href*="trafmag.com"],a[href*="true-gooods.ru"],a[href*="universallnk.com"],a[href*="wwwapteka.info"],a[href*="zen.yandex."] > img:not([src*="gstatic.com"]):not([onload*="google"]),a[href*="zozoter.ru"],a[href^="http://ad-emea.doubleclick.net/"],a[href^="http://ad.doubleclick.net/"],a[href^="http://adfarm.mediaplex.com/"],a[href^="http://ads.betfair.com/redirect.aspx?"],a[href^="http://ads2.williamhill.com/redirect.aspx?"],a[href^="http://adserving.unibet.com/"],a[href^="http://adultfriendfinder.com/p/register.cgi?pid="],a[href^="http://affiliate.coral.co.uk/processing/"],a[href^="http://amigo-free.website/"],a[href^="http://amigo-source.website/"],a[href^="http://amigoman.pw/"],a[href^="http://amigone.pw/"],a[href^="http://marketgid.com"],a[href^="http://mgid.com/"],a[href^="http://online.ladbrokes.com/promoRedirect?"],a[href^="http://partner.sbaffiliates.com/"],a[href^="http://pubads.g.doubleclick.net/"],a[href^="http://us.marketgid.com"],a[href^="http://www.adskeeper.co.uk/"],a[href^="http://www.fbooksluts.com/"],a[href^="http://www.fleshlight.com/"],a[href^="http://www.liutilities.com/"],a[href^="http://www.socialsex.com/"],a[href^="http://www.yourfuckbook.com/?"],a[href^="https://ad.doubleclick.net/"],a[href^="https://servedbyadbutler.com/"],a[href^="https://www.financeads.net/tc.php?"],a[onclick*="media-rotate.com"],a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"],div[class*="notifier_baloon_"],div[id$="notifiers_wrap"],div[id^="MarketGid"],div[id^="adfox_"],div[id^="advads-"],div[id^="cpa_rotator_block"],div[id^="dfp-ad-"],div[id^="div-gpt-ad"],div[id^="google_ads_iframe_"],div[id^="vk_ads_"],div[itemtype="http://schema.org/WPAdBlock"],form[action^="//12go.asia/"][target="_blank"] > .powered,iframe[id^="google_ads_frame"],iframe[id^="google_ads_iframe"],iframe[src*=".cameraprive.com"],iframe[src*="//sass.com.ua/"],iframe[src*="/adnetpartner.com"],iframe[src*="/uniontraff.com"],iframe[src*="bongacams.com"],iframe[src*="directadvert"],iframe[src^="http://ad.yieldmanager.com/"],iframe[width="240"][height="400"],iframe[width="728"][height="90"],img[width="468"][height="60"],img[width="728"][height="90"],noindex a[href^="http://www.westmister.eu/collection/"],noindex a[href^="http://www.westmister.eu/collection/"] ~ * {display: none !important; color: #93e41c !important; background-color: #6e2091 !important;}</style><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="requirejs-domready" src="./files/domReady.min.js.Без названия"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="app/default/index/index" src="./files/index.js.Без названия"></script></head>
<body>

<p class="screenreader">
    <a href="https://praxe.vspj.cz/#main">Přeskočit na obsah</a>
    | <a href="https://praxe.vspj.cz/#menu">Přeskočit na menu</a>
    | <a href="https://praxe.vspj.cz/#submenu">Přeskočit na kontextové menu</a></p>
<div class="container">
    <h3 class="screenreader">Školní elektronické systémy</h3>
    <div class="clearfix">
        <ul class="external-menu reset hidden-xs pull-left">
            <li><a title="Oficiální webové stránky Vysoké školy polytechnické" href="http://www.vspj.cz/">Web VŠPJ</a></li>
            <li><a title="Informační systém Vysoké školy polytechnické" href="http://is.vspj.cz/">Informační systém VŠPJ</a></li>
            <li><a title="E-learning - elektronická podpora výuky na VŠPJ" href="https://elearning.vspj.cz/">E-learning</a></li>
            <li class="last"><a title="Internetové rozhraní elektronické pošty pro studenty a zaměstnance VŠPJ" href="https://webmail.vspj.cz/">Pošta</a></li>
        </ul>

        <ul class="external-menu reset pull-right">
            <li><a href="https://praxe.vspj.cz/jazyk/prepnout-jazyk/lang/cs">cz</a></li>
            <li><a href="https://praxe.vspj.cz/jazyk/prepnout-jazyk/lang/en">en</a></li>
        </ul>
    </div>

    <div> <img src="images/asvsadvsd.jpg" alt=""> </div>

    <header class="hidden-xs">

        <div class="userinfo pull-right">
        </div>            </header>
    <div class="navbar-header navbar-default">
        <a href="https://praxe.vspj.cz/" class="navbar-brand visible-xs">Praxe VŠPJ</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Zobrazit navigaci</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <nav class="mainmenu collapse navbar-collapse bs-navbar-collapse">
        <ul class="nav navbar-nav reset" id="menu">
            <li class="active">

            </li>

            <li>
                <a href="https://praxe.vspj.cz/kontakty">Kontakty</a>
            </li>
            <li>
                <a href="https://praxe.vspj.cz/faq">FAQ</a>
            </li>
            <li class="active">
                <a class="visible-xs" href="https://praxe.vspj.cz/">Odhlásit</a>
            </li>
        </ul>            </nav>
    <div class="middle">
        <div class="row">

            <div class="col-xs-12 col-sm-3 col-md-4 col-lg-3 pull-right login-home">
                <form enctype="application/x-www-form-urlencoded" action="" method="post"><dl class="zend_form">
                        <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            $myusername1=mysqli_real_escape_string($con,$_POST['username']);
                            $mypassword1=mysqli_real_escape_string($con,$_POST['password']);
                            $mypassword=MD5($mypassword1);

                            $sql="SELECT * FROM users WHERE username='$myusername1' and password='$mypassword'";
                            $result=mysqli_query($con,$sql);
                            $row=mysqli_fetch_array($result);
                            $_SESSION['userid']=$row['userid'];
                            $_SESSION['role']=$row['role'];
                            $count=mysqli_num_rows($result);
                            if($count==1)
                            {
                                if ($row['role']=="administrator")
                                {

                                    header ("location: /images/logo.gif");

                                }
                                else if ($row['role']=="user")
                                {
                                    $_SESSION['role']=$row['role'];

                                    header ("location: user_page.php");


                                }
                            }
                            else
                            {
                                $error="Your Login Name or Password is invalid";
                            }
                        }
                        ?>

                        <dt id="username-label"><label for="username" class="required">Uživatelské jméno</label></dt>
                        <dd id="username-element">
                            <input type="text" name="username" id="username" value="" autocomplete="off" title="" required="required" data-original-title="U studentů stejné jako do IS, u firem e-mail použitý při registraci."></dd>
                        <dt id="password-label"><label for="password" class="required">Heslo</label></dt>
                        <dd id="password-element">
                            <input type="password" name="password" id="password" value="" required="required"></dd>
                        <dt id="tlacitko-label">&nbsp;</dt><dd id="tlacitko-element">
                            <input type="submit" name="tlacitko" id="tlacitko" value="Přihlásit" class="btn btn-info"></dd></dl></form>                        </div>
            <div class="form-cleaner"></div>

            <div class="col-xs-12 col-sm-9 col-md-8 col-lg-9" id="main" role="main">

                <h2>Vítejte v portálu časopisu VŠPJ!</h2><p><strong>LOGOS POLYTECHNIKOS je vysokoškolský odborný recenzovaný časopis</strong>, který slouží pro publikační aktivity akademických pracovníků Vysoké školy polytechnické Jihlava i jiných vysokých škol, univerzit a výzkumných organizací. Je veden na seznamu recenzovaných odborných a vědeckých časopisů <strong>ERIH PLUS - </strong>European Reference Index for the Humanities and the Social Sciences (https://dbh.nsd.uib.no/publiseringskanaler/erihplus/periodical/info?id=488187).</p>
                <p><strong>Časopis</strong> je vydáván od roku 2010 a <strong>vychází čtyřikrát ročně</strong>. Redakční rada časopisu sestává z&nbsp;interních i externích odborníků. Funkci šéfredaktora zastává prorektor pro tvůrčí a projektovou činnost Vysoké školy polytechnické Jihlava. Funkce odpovědných redaktorů jednotlivých čísel přísluší vedoucím kateder Vysoké školy polytechnické Jihlava. Veškeré vydávané příspěvky prochází recenzním řízením a jsou pečlivě redigovány.&nbsp;</p><p><strong>Tematické a obsahové zaměření časopisu</strong>, především na obory sociálně-ekonomické, zdravotnické a technické, reflektuje potřeby oborových kateder Vysoké školy polytechnické Jihlava. Na základě souhlasu odpovědného redaktora mohou katedry poskytnout publikační prostor i&nbsp;odborníkům bez zaměstnanecké vazby k Vysoké škole polytechnické Jihlava.</p>
                <p><strong>V časopisu je možné publikovat</strong> odborné články, statě, přehledové studie, recenze a další typy odborných příspěvků v&nbsp;českém, slovenském a anglickém jazyce. Do recenzního řízení jsou přijímány příspěvky tematicky odpovídající zaměření časopisu a formálně upravené dle redakční šablony (viz. níže).<br><br></p>

                <div class="row">
                    <div class="col-md-6 col-sm-12">


                        </article>
                    </div>
                    <div class="col-md-6 col-sm-12">

                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <article>


                    </div>
                    <div class="col-md-6 col-sm-12">

                    </div>
                </div>      <p>
                    <a><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a>
                <p>              </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 logo-projekt">
                <img src="./files/irv-logo.png" alt="" width="410" height="75">
            </div>
        </div>

        <ul class="contentinfo" role="contentinfo">
            <li>© Vysoká škola polytechnická Jihlava, Tolstého 16, 586 01 Jihlava</li>

        </ul>
    </footer>
</div>

</body></html>