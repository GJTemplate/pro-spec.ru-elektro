<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
	  xmlns:og="http://ogp.me/ns#" 
	  xmlns:fb="http://www.facebook.com/2008/fbml" 
	  xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />

		<!-- The following five lines load the Blueprint CSS Framework (http://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
		<?php endif; ?>
        
		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script type="text/javascript" async src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
		<script type="text/javascript" charset="utf-8" src="/buyme/js/buyme.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47068506-1', 'pro-spec.ru');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
$(document).ready(function(){
           $("#top_menu .od.menu li").hover(
        function () {
            //показать подменю
            $('ul', this).slideDown(100);  

        },
        function () {
            //скрыть подменю
            $('ul', this).slideUp(100);
        }
    );  

});
</script>
<meta name="viewport" content="width=1250px">
<meta http-equiv="cache-control" content="no-cache">
</head>
<body>
<div id="content">	
<div id="text">
	<div id="elektro_top">
	      <div style="width: 1250px; margin: 0px auto;">
		    <?php if($this->countModules('elektro-header-menu') ) : ?>
				<div class="elektro-header-menu">
	  	 			<jdoc:include type="modules" name="elektro-header-menu" style="none" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('elektro-regist') ) : ?>
				<div class="elektro-regist">
				  <div class="geolocation" style="float: left; padding: 3px 0px 0px;">
			<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div style="float:left;">Ваш регион:&nbsp;&nbsp;</div><div style="float:left;" id="select-city-go">  выбор города</div>
<div id="modal_form">
<span id="modal_close">X</span>
<div id="spisok-gorodov">
<table>
<tr><td>Архангельск</td><td>Омск</td></tr>
<tr><td>Астрахань</td><td>Орел</td></tr>
<tr><td>Алматы</td><td>Оренбург</td></tr>
<tr><td>Владивосток</td><td>Пенза</td></tr>
<tr><td>Волгоград</td><td>Пермь</td></tr>
<tr><td>Вологда</td><td>Петрозаводск</td></tr>
<tr><td>Воронеж</td><td>Ростов-на-Дону</td></tr>
<tr><td>Екатеринбург</td><td>Рязань</td></tr>
<tr><td>Ижевск</td><td>Самара</td></tr>
<tr><td>Иркутск</td><td>Санкт-Петербург</td></tr>
<tr><td>Казань</td><td>Саратов</td></tr>
<tr><td>Кемерово</td><td>Тольятти</td></tr>
<tr><td>Красноярск</td><td>Томск</td></tr>
<tr><td>Краснодар</td><td>Тула</td></tr>
<tr><td>Липецк</td><td>Тюмень</td></tr>
<tr><td>Махачкала</td><td>Ульяновск</td></tr>
<tr><td>Москва</td><td>Уфа</td></tr>
<tr><td>Набережные Челны</td><td>Хабаровск</td></tr>
<tr><td>Нижний Новгород</td><td>Челябинск</td></tr>
<tr><td>Новокузнецк</td><td>Ялта</td></tr>
<tr><td>Новосибирск</td><td>Ярославль</td></tr>
</table>
<a class="button_geo" href=javascript:document.location.reload()>ВЫБРАТЬ</a>
</div>
<div id="insol-map-modal"></div>
</div>
<div id="overlay"></div>
 
<script charset="utf-8">
 var sBounds = [];
jQuery('#select-city-go').click(function() {
    jQuery('#overlay').fadeIn(400,
            function(){
                jQuery('#modal_form') 
                    .css('display', 'block')
                    .animate({opacity: 1,}, 200,null,function() {
                        if (sBounds.length) myMapMod.setBounds(sBounds, { checkZoomRange: true });
                        sBounds = [];
                    });
        });
        
    jQuery('#select-city-go').click( function(event){
        event.preventDefault();
        jQuery('#overlay').fadeIn(400,
            function(){
                jQuery('#modal_form') 
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200);
        });
    });
 
    jQuery('#modal_close, #overlay').click( function(){
        jQuery('#modal_form')
            .animate({opacity: 0, top: '45%'}, 200,
                function(){
                    jQuery(this).css('display', 'none');
                    jQuery('#overlay').fadeOut(400);
                }
            );
    });
});
 
  function setCookie(name, value, seconds = 2592000) {
  var date = new Date(new Date().getTime() + seconds * 1000);
  document.cookie = name + "=" + value + ";path=/;expires=" + date.toUTCString();
}
  function getCookie(name) {
    var r = document.cookie.match("(^|;)?" + name + "=([^;]*)(;|$)");
    if (r) return r[2];
    else return "";
  }
  function deleteCookie(name) {
    var date = new Date();
    date.setTime(date.getTime() - 1);
    document.cookie = name += "=; expires=" + date.toGMTString();
  }
 
//jQuery("#spisok-gorodov td").click(function(){ alert(jQuery(this).text()); });
var myMapMod;
ymaps.ready(function () {
    geolocation = ymaps.geolocation;
    myMapMod = new ymaps.Map('insol-map-modal', {
            center: [47.22, 39.71],
            zoom: 12,
            controls: []
        });
    var city = getCookie('city_name');
    if (!city) {
        geolocation.get({
        provider: 'yandex',
        mapStateAutoApply: true
    }).then(function (result) {
        result.geoObjects.options.set('preset', 'islands#blueIcon');
        myMapMod.geoObjects.add(result.geoObjects);
        var firstGeoObject = result.geoObjects.get(0);
        coords = firstGeoObject.geometry.getCoordinates();
        myMapMod.setZoom(12);
        city_name=firstGeoObject.properties.get('name');
        jQuery('#select-city-go').html(city_name);
        setCookie("city_name", city_name);
    });
    } else {
        jQuery('#select-city-go').html(city);
        ymaps.geocode(city, { results: 1  }).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0),
            coords = firstGeoObject.geometry.getCoordinates();
            sBounds = firstGeoObject.properties.get('boundedBy');
            myMapMod.geoObjects.add(firstGeoObject);
        });
    }
     
jQuery("#spisok-gorodov td").click(function(){
        city_click=jQuery(this).text();
        jQuery('#select-city-go').html(city_click);
        setCookie("city_name", city_click);
        ymaps.geocode(city_click, { results: 1  }).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0),
            coords = firstGeoObject.geometry.getCoordinates(),
            bounds = firstGeoObject.properties.get('boundedBy');
            myMapMod.geoObjects.add(firstGeoObject);
            myMapMod.setBounds(bounds, { checkZoomRange: true });
        });
});
    
        mySearchControl = new ymaps.control.SearchControl({
            options: {
                noPlacemark: true,
                position: { left: 0, top: 0 }
            }
        });
    // Результаты поиска будем помещать в коллекцию.
        mySearchResults = new ymaps.GeoObjectCollection(null, {
            hintContentLayout: ymaps.templateLayoutFactory.createClass('$[properties.name]')
        });
    myMapMod.controls.add(mySearchControl);
    myMapMod.geoObjects.add(mySearchResults);
 
    // Выбранный результат помещаем в коллекцию.
    mySearchControl.events.add('resultselect', function (e) {
        var index = e.get('index');
        var results = mySearchControl.getResultsArray(); coords = results[index].geometry.getCoordinates();
        myMapMod.setZoom(12);
        city_name=results[index].properties.get('name');
        jQuery('#select-city-go').html(city_name);
        setCookie("city_name", city_name);
        mySearchControl.getResult(index).then(function (res) {
           mySearchResults.add(res);
        });
        }).add('submit', function () {
            mySearchResults.removeAll();
        });
});
</script>
				</div>
	  	 			<jdoc:include type="modules" name="elektro-regist" style="none" />
				</div>
			<?php endif; ?>
		  </div>
		<div id="header_elektro">
		<div class="container">
		<?php if($this->countModules('elektro-search') or $this->countModules('position-0')) : ?>
				<div class="joomla-search span-7 last">
	  	 			<div id="phone"><jdoc:include type="modules" name="position-0" style="none" /></div>
	  	 			
				</div>
			<?php endif; ?>
			<div class="joomla-header span-16 append-1">
				<div id="elektro_logo">
				<a href="" style="text-decoration:none;"><jdoc:include type="modules" name="logo" style="none" /></a>
				<jdoc:include type="modules" name="logo-2" style="none" />
				</div>
				<div id="search"><jdoc:include type="modules" name="elektro-search" style="none" /></div>
				<?php if($this->countModules('elektro-cart') ) : ?>
				<div class="joomla-cart span-7 last">
	  	 			<jdoc:include type="modules" name="elektro-cart" style="none" />
				</div>
			<?php endif; ?>	
			    <div id="elektro_phone">
			<?php 
		    if($_COOKIE['city_name']=='Москва')
			{echo'<a style="color: #000000; font-size: 22px;" href="tel:+74952155475">+7 (495) 215-54-75</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a>';
		    }else
			   {if($_COOKIE['city_name']=='Санкт-Петербург')
			   {echo'<a style="color: #000000; font-size: 22px;" href="tel:+78124243282">+7 (812) 424-32-82</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a>';
		       }else
			   {if($_COOKIE['city_name']=='Нижний Новгород')
			   {echo'<a style="color: #000000; font-size: 22px;" href="tel:+78312613384">+7 (831) 261-33-84</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a>';
		       }else
			   {if($_COOKIE['city_name']=='Казань')
			   {echo'<a style="color: #000000; font-size: 22px;" href="tel:+78432024031">+7 (843) 202-40-31</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a>';
		       }else
			   {if($_COOKIE['city_name']=='Новосибирск')
			   {echo'<a style="color: #000000; font-size: 22px;" href="tel:+73832078348">+7 (383) 207-83-48</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a>';
		       }else
			   {if($_COOKIE['city_name']=='Самара')
			   {echo'<a style="color: #000000; font-size: 22px;" href="tel:+78462295360">+7 (846) 229-53-60</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a>';
		       }else
			   {if($_COOKIE['city_name']=='Уфа')
                {echo'<a style="color: #000000; font-size: 22px;" href="tel:+73472741514">+7 (347) 274-15-14</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a>';
			    }else   
			   {if($_COOKIE['city_name']=='Алматы')
                {echo'<a style="color: #000000; font-size: 22px;" href="tel:+77273507537">+7 (727) 350-75-37</a>';
			    }else				   
			   {echo'<a style="color: #000000; font-size: 22px;" href="tel:+78001005475">+7 (800) 100-54-75</a><br/><a style="color: #000000; font-size: 22px;" href="tel:+74952155475">+7 (495) 215-54-75</a>';
		       }}}}}}}}
		    ?>
			    <div id="elektro_email">
				<a href="mailto:sales@pro-spec.ru" target="_blank" title="Написать нам письмо" style="font-size: 19px; color: #000000; text-decoration: none;">sales@pro-spec.ru</a>
				</div>
				</div>		
			</div>
		</div>
		</div>
		 <?php if($this->countModules('my-top-menu') ) : ?>
				<div class="my-top-menu">
	  	 			<jdoc:include type="modules" name="my-top-menu" style="none" />
				</div>
				<div style="clear: both; width: 100%; height: 0px; margin: 0px;"></div>
			<?php endif; ?>
		<?php if($this->countModules('elektro-topmenu') or $this->countModules('position-2') ) : ?>
			<div id="top_menu" <?php if($this->countModules('elektro-banner_12') ) : ?> style="width:100%;" <?php endif; ?> ><jdoc:include type="modules" name="elektro-topmenu" style="none" />
			
			</div>
			<jdoc:include type="modules" name="position-1" style="container" />
		<?php endif; ?>
        <?php if($this->countModules('elektro-banner_1') ) : ?>
				<div class="elektro-banner_1">
	  	 			<jdoc:include type="modules" name="elektro-banner_1" style="none" />
				</div>
			<?php endif; ?>
		<?php if($this->countModules('elektro-banner_left') or $this->countModules('elektro-banner_right')) : ?>
			<div style="width: 1250px; margin: 20px auto 30px;">	
				<div class="elektro-banner_left">
	  	 			<jdoc:include type="modules" name="elektro-banner_left" style="none" />
				</div>
				<div class="elektro-banner_right">
	  	 			<jdoc:include type="modules" name="elektro-banner_right" style="none" />
				</div>
				<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			</div>	
			<?php endif; ?>	
	</div>	
	<?php if($this->countModules('mainbody_center1') or $this->countModules('mainbody_center2') or $this->countModules('mainbody_center3') or $this->countModules('mainbody_center4')) : ?>
                <div class="elektro-center_boss">
<div class="tab-content">
<div class="title-tab-content"><a href="/catalog/sredstva-i-sistemy-bezopasnosti/poiskovo-dosmotrovoe-oborudovanie">Поисковое и досмотровое оборудование</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center1" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center1-1" style="none" /></div>
</div>
<div class="tab-content">
<div class="title-tab-content"><a href="/catalog/sredstva-i-sistemy-bezopasnosti/introskopy-rentgenotelevizionnoe-oborudovanie">Интроскопы</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center2" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center2-2" style="none" /></div>
</div>

<div class="tab-content">
<div class="title-tab-content"><a href="/catalog/sistemy-videonabliudeniia/ip-videonablyudenie">Системы видеонаблюдения</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center3" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center3-3" style="none" /></div>
</div>

<div class="tab-content" style="margin-right: 0px ! important;">
<div class="title-tab-content"><a href="/catalog/sredstva-i-sistemy-bezopasnosti/tekhnicheskie-sredstva-zashchity-informatsii">Защита информации</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center4" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center4-4" style="none" /></div>
</div>			
				</div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
            <?php endif; ?>	
        <?php if($this->countModules('elektro-center_top') or $this->countModules('elektro-center_top2') or $this->countModules('mainbody_center') ) : ?>
				<div class="elektro-center_top">
                    <div style=""><jdoc:include type="modules" name="mainbody_center" style="xhtml" /></div>
	  	 			<div style=""><jdoc:include type="modules" name="elektro-center_top" style="none" /></div>
					<div style=""><jdoc:include type="modules" name="elektro-center_top2" style="none" /></div>
				</div>
				<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			<?php endif; ?>	
			 <?php if($this->countModules('my_litle_banner_left') or $this->countModules('my_litle_banner_right') or $this->countModules('my_litle_banner_center') or $this->countModules('my_litle_banner_left2') or $this->countModules('my_litle_banner_right2')) : ?>	
			    <div id="my_litle_banner">
				      <div id="my_litle_banner_left"><jdoc:include type="modules" name="my_litle_banner_left" style="none" /></div>
					  <div id="my_litle_banner_center"><jdoc:include type="modules" name="my_litle_banner_center" style="none" /></div>
					  <div id="my_litle_banner_right"><jdoc:include type="modules" name="my_litle_banner_right" style="none" /></div>
			    <?php if($this->countModules('my_litle_banner_left2') or $this->countModules('my_litle_banner_right2')) : ?>
					  <div id="my_litle_banner_left2"><jdoc:include type="modules" name="my_litle_banner_left2" style="none" /></div>
					  <div id="my_litle_banner_right2"><jdoc:include type="modules" name="my_litle_banner_right2" style="none" /></div>
				<?php endif; ?>
			    <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
				</div>
				<?php endif; ?>
		<div id="content-elektro" class="container"> 
        <?php if($this->countModules('breadcrumbs') ) : ?>
				<div class="breadcrumbs">
	  	 			<jdoc:include type="modules" name="breadcrumbs" style="none" />
					<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
				</div>
				
			<?php endif; ?> 	  			
		<div id="elektro_center">	
			<?php if($this->countModules('left_left') ) : ?>
			<?php 
                 $controller = JRequest::getVar('controller', null);
                 if (!($controller == 'cart')) : ?>
			<?php 
                 $controller = JRequest::getVar('controller', null);
                 if (!($controller == 'product')) : ?>
				<?php 
                 $controller = JRequest::getVar('controller', null);
                 if (!($controller == 'checkout')) : ?>	 
			
				<div class="elektro-left">
	  	 			<div class="elektro-top-left"><jdoc:include type="modules" name="left_left" style="xhtml" /></div>
					<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
				</div>
			<?php endif; ?> 
            <?php endif; ?> 			
			<?php endif; ?> 
            <?php endif; ?>  			
			<div class="center" <?php if($this->countModules('left_left') && (!($controller == 'product'))&& (!($controller == 'cart')) && (!($controller == 'checkout')) ) : ?>style="width: 73.6%; float: left;"<?php endif; ?> >
			<?php if($this->countModules('elektro-topquote') or $this->countModules('position-15') ) : ?>
				<?php 
                     $controller = JRequest::getVar('controller', null);
                     
                     if (!($controller == 'product')) : ?>
				<jdoc:include type="modules" name="elektro-topquote" style="xhtml" />
				 <?php endif; ?>
				<jdoc:include type="modules" name="position-15" style="none" />

			<?php endif; ?>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<hr />
			<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			</div>
			<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			</div>
				<?php if($this->countModules('elektro-bottomleft') or $this->countModules('position-11')) : ?>
			 	<div class="span-7 colborder">
					<jdoc:include type="modules" name="elektro-bottomleft" style="bottommodule" />
					<jdoc:include type="modules" name="position-11" style="bottommodule" />
                <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
	        	</div>
	        <?php endif; ?>
            <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			<?php if($this->countModules('elektro-center_bottom') or $this->countModules('elektro-center_bottom1')
				or $this->countModules('elektro-center_bottom2')) : ?>
				<div class="elektro-center_bottom_old">
	        		<div class="elektro-center_bottom" <?php if($this->countModules('elektro-center_bottom1') ) : ?>style="width:70%;"<?php endif; ?> ><jdoc:include type="modules" name="elektro-center_bottom"  style="xhtml" /></div>
					<div class="elektro-center_bottom1"><jdoc:include type="modules" name="elektro-center_bottom1"  style="xhtml" /></div>
					<div class="elektro-center_bottom2"><jdoc:include type="modules" name="elektro-center_bottom2"  style="xhtml" /></div>
                <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
				</div>
			<?php endif; ?>
	        <?php if($this->countModules('elektro-bottommiddle') or $this->countModules('position-9')
				or $this->countModules('position-10')) : ?>
				<div class="span-7 last">
	        		<jdoc:include type="modules" name="elektro-bottommiddle"  style="xhtml" />
					<jdoc:include type="modules" name="position-9"  style="xhtml" />
					<jdoc:include type="modules" name="position-10"  style="xhtml" />

				</div>
			<?php endif; ?>
			<?php if($this->countModules('elektro-sidebar') || $this->countModules('position-7')
			|| $this->countModules('position-4') || $this->countModules('position-5')
			|| $this->countModules('position-3') || $this->countModules('position-6') || $this->countModules('position-8'))
			: ?>
				<div class="right">
					<jdoc:include type="modules" name="elektro-sidebar" style="sidebar" />
					<jdoc:include type="modules" name="position-7" style="sidebar" />
					<jdoc:include type="modules" name="position-4" style="sidebar" />
					<jdoc:include type="modules" name="position-5" style="sidebar" />
					<jdoc:include type="modules" name="position-6" style="sidebar" />
					<jdoc:include type="modules" name="position-8" style="sidebar" />
					<jdoc:include type="modules" name="position-3" style="sidebar" />
				</div>
             <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			<?php endif; ?>
        </div>
			<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			
		</div>
	<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>	
		<?php if($this->countModules('bottom_pro')) : ?>
			 	<div class="bottom_pro">
					<jdoc:include type="modules" name="bottom_pro" style="xhtml" />
                <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
	        	</div>
	        <?php endif; ?>
</div>	
</div>	
<?php
if ($_SERVER['REQUEST_URI']!='/' && $_SERVER['REQUEST_URI']!='/?no_redirect=true' && $_SERVER['REQUEST_URI']!='/?no_redirect=true?no_redirect=true')
{?>
<?php if((!($controller == 'product')) && (!($controller == 'cart')) && (!($controller == 'checkout')) ) : ?> 			
<div style="width: 1250px; margin:0 auto;">
<!-- Яндекс.Директ -->
<script type="text/javascript">
yandex_partner_id = 176294;
yandex_site_bg_color = 'FFFFFF';
yandex_ad_format = 'direct';
yandex_font_size = 1;
yandex_direct_type = 'horizontal';
yandex_direct_limit = 4;
yandex_direct_title_font_size = 3;
yandex_direct_links_underline = true;
yandex_direct_header_bg_color = 'FEEAC7';
yandex_direct_title_color = '0000CC';
yandex_direct_url_color = '006600';
yandex_direct_text_color = '000000';
yandex_direct_hover_color = '0066FF';
yandex_direct_sitelinks_color = '0000CC';
yandex_direct_favicon = true;
yandex_no_sitelinks = false;
document.write('<scr'+'ipt type="text/javascript" src="//an.yandex.ru/system/context.js"></scr'+'ipt>');
</script>
</div>			
<?php endif; ?>
 <?php }?>
<div id="elektro_bottom">
	<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
	      <div style="width:1250px; margin:0 auto;">
		  <div style="width: 70%; float: left;">
		          <jdoc:include type="modules" name="footer_nav" />
				  <a href="http://clickfrog.ru/?page=registration&amp;referrer_id=12733"><img src="//stat.clickfrog.ru/img/clfg_ref/icon_6.png" alt="click fraud detection"></a><div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='da15b3332a39db7350b3266986470128';</script>
		  <?php 
		$path = "./clickfrogru_udp_tcp.php";
		include_once($path);
	?>
	
		  </div>
	      <div style="float:right;">
		         <jdoc:include type="modules" name="footer_phone" style="<?php echo $this->module_styles['footer_phone']; ?>" />
				 <span><a href="http://m.pro-spec.ru<?php echo $_SERVER["REQUEST_URI"]; ?>?no_redirect=true" target="_parent" style="color: rgb(255, 255, 255); text-decoration: none; text-align: center; line-height: 50px; font-size:12px;">Мобильная  версия сайта</a></span>
		</div>
	<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div><div style="float: right; margin: -35px 0px 0px;"><p>
	<img alt="Платежные карты MAESTRO" border="0" src="images/banners/maestro.png" style="font-family: Tahoma;" title="Платежные карты MAESTRO" />&nbsp;<img alt="Платежные карты MasterCard" border="0" src="images/banners/mastercard.png" title="Платежные карты MasterCard" />&nbsp;<img alt="netpay1" src="images/banners/netpay1.png" title="Электронные платежи NET PAY" />&nbsp;<img alt="Сбербанк России" border="0" src="images/banners/sberbank.png" title="Сбербанк России" />&nbsp;<img alt="Платежные карты VISA" border="0" src="images/banners/visa.png" title="Платежные карты VISA" />&nbsp;<img alt="yandex-money" src="images/banners/yandex-money.png" title="Электронные платежи Яндекс деньги" />&nbsp;&nbsp;</p>
</div>
		  <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
		  </div
		  	    
</div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23630017 = new Ya.Metrika({id:23630017,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23630017" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=f9lfZJQgMxzENzVTica4yRpsQcGc/3h3l*ggieM02Nfkf3IX4OM7npdcK3zjpE98dXIBxrHFbDOBihtAOss/CipXOt/AGWFp6kzV0TBnM0qfXVVsjRZLR0ODWRKiGq8qFBzvFxto0PRNrEO4xQyAUA1jHGAUnLcQXLuEHGC1VzM-';</script>

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">//<![CDATA[
var _tmr = _tmr || [];
_tmr.push({id: "2427361", type: "pageView", start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
   ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
//]]></script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2427361;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<script type="text/javascript"> 
  jQuery(function(){
jQuery('dl.tabses dt').click(function(){
jQuery(this)
.siblings().removeClass('selected').end()
.next('dd').andSelf().addClass('selected');
});
});
  </script>
<!-- {literal} -->
<script type="text/javascript">
var liveTex = true,
liveTexID = 121612,
liveTex_object = true;
window.LiveTex = {
	onLiveTexReady: function () {
		var desc1 = LiveTex.addEventListener(
			LiveTex.Event.CALL_STARTED,
			function (data) {
				yaCounter23630017.reachGoal ("CALL_STARTED");
				
			}
		);
		
	}
};
(function() {
	var lt = document.createElement('script');
	lt.type ='text/javascript';
	lt.async = true;
	lt.src = '//cs15.livetex.ru/js/client.js';
	var sc = document.getElementsByTagName('script')[0];
	if ( sc ) sc.parentNode.insertBefore(lt, sc);
	else document.documentElement.firstChild.appendChild(lt);
})();
</script>
<!-- {/literal} -->
  <!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t26.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число посетителей за"+
" сегодня' "+
"border='0' width='88' height='15'><\/a>")
//--></script><!--/LiveInternet-->
	</body>
</html>