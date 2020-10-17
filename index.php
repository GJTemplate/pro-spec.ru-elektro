<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

    defined('_JEXEC') or die;

    $app = \Joomla\CMS\Factory::getApplication();
    $doc= \Joomla\CMS\Factory::getDocument();

    defined('TMPL_ELEKTRO_DEBUG' )?:define( 'TMPL_ELEKTRO_DEBUG', $this->params->get('debug', false) ) ;

    if (!defined('TEMPLATE_VERSION')){
        $ver = '?v='.$this->params->get('version_tmpl', '1.1.6') ;
        // Если включена отладка для шаблона - то грузим файлы
        //  без медиа версии
        if( TMPL_ELEKTRO_DEBUG  ) $ver = null; #END IF
        define('TEMPLATE_VERSION', $ver  );
        $doc->addScriptOptions('__tmpV', TEMPLATE_VERSION , false);
    }













    $controller = $app->input->get('controller', null);



    \GNZ11\Document\Document::addIncludeStyleDeclaration(
            JPATH_THEMES . '/elektro/assets/css/header.critical.css',
            ['debug'=>TMPL_ELEKTRO_DEBUG,'asFile' =>TMPL_ELEKTRO_DEBUG ]) ;




   /* $app = \Joomla\CMS\Factory::getApplication()->input ;
    echo'<pre>';print_r( $app );echo'</pre>'.__FILE__.' '.__LINE__;
    die(__FILE__ .' '. __LINE__ );*/




/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();

?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<?php $this->setGenerator(''); ?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml"
	  xmlns:og="https://ogp.me/ns#"
	  xmlns:fb="https://www.facebook.com/2008/fbml"
	  xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
        <link rel="preload" href="/style/GTEestiProDisplay-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="/style/GTEestiProDisplay-Light.woff" as="font" type="font/woff" crossorigin="anonymous">
<!--        <link rel="preload" href="/style/GTEestiProDisplay-Light.ttf" as="font" type="font/woff2" crossorigin="anonymous">-->

        <?php
        $app = \Joomla\CMS\Factory::getApplication();
        $option = $app->input->get( 'option' , false );
        $controller = $app->input->get( 'controller' , false );

        /*echo'<pre>';print_r( $controller );echo'</pre>'.__FILE__.' '.__LINE__;
        die(__FILE__ .' '. __LINE__ );*/

        ?>

<?php



        if( $option == 'com_jshopping' && $controller == 'category'  ){
        ?>
            <link rel="preload" href="<?= \Joomla\CMS\Uri\Uri::root()?>modules/mod_jshopping_unijax_filter/css/default.css" as="style">
	        <link rel="preload" href="<?= \Joomla\CMS\Uri\Uri::root()?>templates/elektro/css/moduletable_brend.css" as="style">
        <?php
        }else if( $option == 'com_jshopping' && $controller == 'product'  ){

            $doc->addStyleSheet(\Joomla\CMS\Uri\Uri::root().'templates/elektro/assets/css/product/module_slider.css');
//            $doc->addStyleSheet(\Joomla\CMS\Uri\Uri::root().'templates/elektro/assets/css/product/product_tab_desc.css');

        }#END IF


    /*echo'<pre>';print_r( $app->input );echo'</pre>'.__FILE__.' '.__LINE__;
    die(__FILE__ .' '. __LINE__ );
    [option] => com_jshopping
            [controller] => product
*/

/*echo'<pre>';print_r( $app->input );echo'</pre>'.__FILE__.' '.__LINE__;
die(__FILE__ .' '. __LINE__ );*/




 ?>






		<!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
		<jdoc:include type="head" />





			<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TS4LFLL');
</script>


<!-- End Google Tag Manager -->

		<!-- The following five lines load the Blueprint CSS Framework (https://blueprintcss.org). If you don't want to use this framework, delete these lines. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.critical.css" type="text/css" media="screen, projection" />

		<!-- The following line loads the template CSS file located in the template folder. -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/css/template.critical.css<?= TEMPLATE_VERSION ?>" type="text/css" />


		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/screen.css" type="text/css" media="screen, projection" />

		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/joomla-nav/screen.css" type="text/css" media="screen" />



		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/css/template.css<?= TEMPLATE_VERSION ?>" type="text/css" />




<?php
/**
 * Стили для основного меню категории
 * /templates/elektro/css/menu-item.css Стили для основного меню подключение перенесено в компонент
 * @see https://pro-spec.ru/testvik/test/administrator/index.php?option=com_pro_critical&view=html_task&layout=edit&id=2
 * <link rel="stylesheet" href="--><?php //echo $this->baseurl ?>/templates/elektro/css/menu-item.css<?= TEMPLATE_VERSION ?>" type="text/css" />
 */
?>




		<!-- The following four lines load the Blueprint CSS Framework and the template CSS file for right-to-left languages. If you don't want to use these, delete these lines. -->
		<?php if($this->direction == 'rtl') : ?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/blueprint/plugins/rtl/screen.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
		<?php endif; ?>

		<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
		<script async src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>




		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/css/products_viewed.css<?= TEMPLATE_VERSION ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/css/moduletable_brend.css<?= TEMPLATE_VERSION ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/css/elektro_bottom.css<?= TEMPLATE_VERSION ?>" type="text/css" />

		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/css/jshop_pagination.css<?= TEMPLATE_VERSION ?>" type="text/css" />


<!--		<link data-not-interact="1" rel="stylesheet" href="--><?php //echo $this->baseurl ?><!--/plugins/jshoppingproducts/quickorder/assets/css/style.css--><?//= TEMPLATE_VERSION ?><!--" type="text/css" />-->
<!--		<link data-not-interact="1" rel="stylesheet" href="--><?php //echo $this->baseurl ?><!--/plugins/jshoppingproducts/quickorder/assets/css/themes/dark.css--><?//= TEMPLATE_VERSION ?><!--" type="text/css" />-->



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47068506-1', 'pro-spec.ru');
  ga('send', 'pageview');
</script>
<meta name="viewport" content="width=1250">
<meta http-equiv="cache-control" content="no-cache">
<meta name="google-site-verification" content="n7_JBknQ5IEAOoAelFD4m7F3VIYZBPpMB7XR16eetHg" />

<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "vkDFcfw7_uRq5WubZ2cUvY6S7g54gpgM"]);
</script>










    <?php
    # Стили для добавления к CCSS на странице товара
    if( $option == 'com_jshopping' && $controller == 'product'  ){
    ?>
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/assets/css/critical/addInProduct.css<?= TEMPLATE_VERSION ?>" type="text/css" />

    <?php
    }#END IF
    ?>



<?php
# Добавлять ко всем критичиским стилям
# Настройки компонента com_pro_critical  https://pro-spec.ru/testvik/test/administrator/index.php?option=com_config&view=component&component=com_pro_critical&path=
# Владка Critical CSS
# Критические стили ВКЛ.
# Добавить стили ко всем созданным критическим стилям

?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/elektro/assets/css/critical/addAll.css<?= TEMPLATE_VERSION ?>" type="text/css" />












</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS4LFLL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="content">
        <div id="text">


	        <?= JLayoutHelper::render('heder.elektro_top', [] ); ?>

	        <?php
            if($this->countModules('elektro-center_top') or $this->countModules('elektro-center_top2') or $this->countModules('mainbody_center') ) : ?>
				<div class="elektro-center_top">
                    <div style=""><jdoc:include type="modules" name="mainbody_center" style="xhtml" /></div>
	  	 			<div style=""><jdoc:include type="modules" name="elektro-center_top" style="none" /></div>
					<div style=""><jdoc:include type="modules" name="elektro-center_top2" style="none" /></div>
				</div>
				<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
			<?php endif; ?>
			<?php
			if($this->countModules('mainbody_center1') or $this->countModules('mainbody_center2') or $this->countModules('mainbody_center3') or $this->countModules('mainbody_center4')) : ?>
                
				<div class="elektro-center_boss">
				    <h3>Избранное</h3>
                    <div class="top-tab-content">
                        <div class="tab-content">
                            <div class="title-tab-content">
                                <a href="catalog/metallodetektory-i-metalloiskateli">Металлодетекторы</a>
                            </div>
                            <div style="">
                                <jdoc:include type="modules" name="mainbody_center1" style="none" />
                            </div>
                            <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                            <div class="bottom-tab-content">
                                <jdoc:include type="modules" name="mainbody_center1-1" style="none" />
                            </div>
                        </div>
                    </div>
<div class="top-tab-content">
<div class="tab-content">
<div class="title-tab-content"><a href="catalog/sredstva-i-sistemy-bezopasnosti/antiterroristicheskaya-bezopasnost">Антитеррористическая безопасность</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center2" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center2-2" style="none" /></div>
</div>
</div>
<div class="top-tab-content">
<div class="tab-content">
<div class="title-tab-content"><a href="catalog/introskopy-rentgenotelevizionnoe-oborudovanie">Интроскопы</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center3" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center3-3" style="none" /></div>
</div>
</div>
<div class="top-tab-content">
<div class="tab-content" style="margin-right: 0px ! important;">
<div class="title-tab-content"><a href="catalog/poiskovo-dosmotrovoe-oborudovanie">Поисково-досмотровое</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center4" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center4-4" style="none" /></div>
</div>
</div>
<div class="top-tab-content">
<div class="tab-content" style="margin-right: 0px ! important;">
<div class="title-tab-content"><a href="catalog/blokiratory-besprovodnoj-sviazi">Блокираторы связи</a></div>
<div style=""><jdoc:include type="modules" name="mainbody_center5" style="none" /></div>
<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
<div class="bottom-tab-content"><jdoc:include type="modules" name="mainbody_center5-5" style="none" /></div>
</div>
</div>
				</div>
                <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                <div class="elektro-center_boss">
                    <div class="top-tab-content">
                    <div class="tab-content">
                    <div class="title-tab-content"><a href="catalog/sistemy-kontrolia-dostupa">Контроль доступа</a></div>
                    <div style=""><jdoc:include type="modules" name="b-mainbody_center1" style="none" /></div>
                    <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                    <div class="bottom-tab-content"><jdoc:include type="modules" name="b-mainbody_center1-1" style="none" /></div>
                    </div>
                    </div>
                    <div class="top-tab-content">
                    <div class="tab-content">
                    <div class="title-tab-content"><a href="catalog/sistemy-videonabliudeniia">Видеонаблюдение</a></div>
                    <div style=""><jdoc:include type="modules" name="b-mainbody_center2" style="none" /></div>
                    <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                    <div class="bottom-tab-content"><jdoc:include type="modules" name="b-mainbody_center2-2" style="none" /></div>
                    </div>
                    </div>
                    <div class="top-tab-content">
                    <div class="tab-content">
                    <div class="title-tab-content"><a href="catalog/prochaia-amuniciia">Снаряжение</a></div>
                    <div style=""><jdoc:include type="modules" name="b-mainbody_center3" style="none" /></div>
                    <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                    <div class="bottom-tab-content"><jdoc:include type="modules" name="b-mainbody_center3-3" style="none" /></div>
                    </div>
                    </div>
                    <div class="top-tab-content">
                    <div class="tab-content" style="margin-right: 0px ! important;">
                    <div class="title-tab-content"><a href="catalog/radiosvyaz">Связь</a></div>
                    <div style=""><jdoc:include type="modules" name="b-mainbody_center4" style="none" /></div>
                    <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                    <div class="bottom-tab-content"><jdoc:include type="modules" name="b-mainbody_center4-4" style="none" /></div>
                    </div>
                    </div>
                    <div class="top-tab-content">
                    <div class="tab-content" style="margin-right: 0px ! important;">
                    <div class="title-tab-content"><a href="catalog/pozharnoe-oborudovanie">Пожарная безопасность</a></div>
                    <div style=""><jdoc:include type="modules" name="b-mainbody_center5" style="none" /></div>
                    <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
                    <div class="bottom-tab-content"><jdoc:include type="modules" name="b-mainbody_center5-5" style="none" /></div>
                    </div>
                    </div>
				</div>
                <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
            <?php endif; ?>
			<?php
			if($this->countModules('my_litle_banner_left') or $this->countModules('my_litle_banner_right') or $this->countModules('my_litle_banner_center') or $this->countModules('my_litle_banner_left2') or $this->countModules('my_litle_banner_right2')) : ?>
			        <div id="my_litle_banner">
			            <div id="my_litle_banner_left"><jdoc:include type="modules" name="my_litle_banner_left" style="none" /></div>
					    <div id="my_litle_banner_center"><jdoc:include type="modules" name="my_litle_banner_center" style="none" /></div>
					    <div id="my_litle_banner_right"><jdoc:include type="modules" name="my_litle_banner_right" style="none" /></div>
                        <?php
                        if($this->countModules('my_litle_banner_left2') or $this->countModules('my_litle_banner_right2')) : ?>
                            <div id="my_litle_banner_left2"><jdoc:include type="modules" name="my_litle_banner_left2" style="none" /></div>
                            <div id="my_litle_banner_right2"><jdoc:include type="modules" name="my_litle_banner_right2" style="none" /></div>
                        <?php
                        endif; ?>
                        <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
				    </div>
				<?php
				endif; ?>

            <div id="header_elektro">
                <div class="container ">
                    <span><a class="mobileButton" href="?device=mobile" rel="nofollow">Мобильная версия</a></span>
                     <div class="joomla-header span-16 append-1">
                        <div class="header-left">
                            <?= JLayoutHelper::render('heder.logo', [] ); ?>
                            <?= JLayoutHelper::render('heder.top_menu', [] ); ?>
                        </div>
                        <div id="search">
                            <jdoc:include type="modules" name="elektro-search" style="none" />
                        </div>
                        <div class="header-right">
                            <?= JLayoutHelper::render('heder.header_right', [] ); ?>
                        </div>
                     </div>
                </div>
            </div>

            <?php
            if($this->countModules('elektro-topmenu') or $this->countModules('position-2') ) : ?>
                <div id="elektro-topmenu" <?php if($this->countModules('elektro-banner_12') ) { ?> style="width:100%;" <?php } ?> >
                    <div class="menu-container">
                        <div id="top_menu-new">
			                <jdoc:include type="modules" name="elektro-topmenu" style="none" />
                        </div>
                    </div>
			    </div>
			    <jdoc:include type="modules" name="position-1" style="container" />
		    <?php
		    endif; ?>



            <div id="content-elektro" >
                <?= JLayoutHelper::render('heder.breadcrumbs', [] ); ?>
                <?= JLayoutHelper::render('heder.sub-breadcrumbs-mod', [] ); ?>


                    <div id="elektro_center" <?php
            if((!($controller == 'product'))&& (!($controller == 'cart')) && (!($controller == 'checkout'))) : ?>style="max-width: 1600px; margin:0 auto; background:#ffffff;"<?php endif; ?>>
                <?php if($this->countModules('left_left') ) : ?>
                <?php
                     if (!($controller == 'cart')) : ?>
                <?php
                     if (!($controller == 'product')) : ?>
                    <?php
                     if (!($controller == 'checkout')) : ?>




                    <div class="elektro-left">
<!--                        --><?//= JLayoutHelper::render('dummys.dummy-filter', [] ); ?>


                        <div class="elektro-top-left">
                        <jdoc:include type="modules" name="left_left" style="xhtml" />
                        </div>
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
                    <div class="banner_category"><jdoc:include type="modules" name="elektro-topquote" style="xhtml" /></div>
                     <?php endif; ?>
                    <jdoc:include type="modules" name="position-15" style="none" />

                <?php endif; ?>
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                    <jdoc:include type="modules" name="elektro-topquote1" style="xhtml" />
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
<div id="elektro_bottom">
<div style="border-bottom:1px solid #cccccc; margin-bottom: 40px;"><div class="footer_acy">Подпишитесь! Новинки, скидки, предложения! <jdoc:include type="modules" name="footer_acy" /></div></div>
	<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
	      <div style="max-width:1600px; margin:0 auto;">
		  
		  <div >
		          <jdoc:include type="modules" name="footer_nav" />
				 <a href="//scroogefrog.com/en/?referrer_id=12733">
				    <img src="//stat.clickfrog.ru/img/clfg_ref/icon_0.png" alt="click fraud detection">
				 </a>
				 <div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div>
				 <script>
				    /*(function(d, w) {
				        var clickfrog = function() {
				            if( !d.getElementById('clickfrog_js_container') ) {
				                var sc = document.createElement('script');
				                sc.type = 'text/javascript';
				                sc.async = true;
				                sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();
				                sc.id = 'clickfrog_js_container';
				                var c = document.getElementById('clickfrog_counter_container');
				                c.parentNode.insertBefore(sc, c);
				            }
				        };
				        if(w.opera === "[object Opera]"){
				            d.addEventListener("DOMContentLoaded",clickfrog,false);
				        }else {
				            clickfrog();
				        }
				    })(document, window);*/
				    </script>
				    <noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript>

				    <script type="text/javascript">var clickfrogru_uidh='da15b3332a39db7350b3266986470128';</script>
				  <?php
		            // include_once 'clickfrogru_udp_tcp.php';
	                ?>

		  </div>

	<div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div><div style="float: right; margin: -60px 0px 0px;"><jdoc:include type="modules" name="footer_paymen" /></div>
		  <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
		  </div>
<?php if($this->countModules('bottom_pro1')) : ?>
			 	<div class="bottom_pro1">
					<jdoc:include type="modules" name="bottom_pro1" style="xhtml" />
                <div style="clear: both; width: 100%; height: 1px; margin: 0px;"></div>
	        	</div>
	        <?php endif; ?>
</div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter23630017 = new Ya.Metrika({
                    id:23630017,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/23630017" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<div id="uPage_el_14"></div>
<!--LiveInternet counter-->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
    var $ = jQuery ;
    setTimeout(function (){
        $("#uPage_el_14").html("<a href='//www.liveinternet.ru/click' target=_blank><img src='//counter.yadro.ru/hit?t26.1;r"+
        escape(document.referrer)+((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+";"+Math.random()
        +"' alt='' title='LiveInternet: показано число посетителей за"+" сегодня' "+"border='0' width='88' height='15'><\/a>");
    },3000);
});


</script><!--/LiveInternet-->



<script type="text/javascript">

// #top_menu-new li.parent ul
document.addEventListener("DOMContentLoaded", function () {
    var $ = jQuery;
    var $menuParent = $('#top_menu-new li.parent');
    $menuParent.on({
    mouseenter: function () {
        wgnz11.load.css('<?= $this->baseurl ?>/templates/elektro/css/top_menu-new.css<?= TEMPLATE_VERSION ?>')
        console.log( 'mouseenter' )
    },
    mouseleave: function () {
       // console.log( 'mouseleave' )
    }
})
});


  jQuery(function(){
jQuery('dl.tabses dt').click(function(){
jQuery(this)
.siblings().removeClass('selected').end()
.next('dd').andSelf().addClass('selected');
});
});
  </script>
<?php
if ($_SERVER['REQUEST_URI']=='catalog/cart/view') {?>
<!-- Google Code for &#1050;&#1086;&#1088;&#1079;&#1080;&#1085;&#1072; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 858871980;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "1yVnCJ7Sn28QrLHFmQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/858871980/?label=1yVnCJ7Sn28QrLHFmQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php }?>
<?php
if ($_SERVER['REQUEST_URI']=='catalog/checkout/step2'){?>
<!-- Google Code for &#1054;&#1092;&#1086;&#1088;&#1084;&#1080;&#1090;&#1100; &#1079;&#1072;&#1082;&#1072;&#1079; &#1064;&#1072;&#1075;&#8470;2 Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 858871980;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "ZuyuCLGtmW8QrLHFmQM";
var google_remarketing_only = false;
/* ]]> */




</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/858871980/?label=ZuyuCLGtmW8QrLHFmQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php }?>




<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){
    var widget_id = 'cXKcp7fV5O';
    var d=document;var w=window;function l(){
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//code.jivosite.com/script/widget/'+widget_id;
        var ss = document.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss);
    }
    if( d.readyState === 'complete' ){
        l();
    }else{
        if(w.attachEvent){
            w.attachEvent('onload',l);
        }else{
            w.addEventListener('load',l,false);
        }
    }
})();</script>

<!-- {/literal} END JIVOSITE CODE -->
<!--<script src="-->
<?php //echo $this->baseurl ?><!--/templates/--><?php //echo $this->template ?><!--/js/custom-js.js"></script>-->


<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/ingevents.4.0.8.js"></script>

<script async charset="utf-8" src="<?= $this->baseurl ?>/buyme/js/buyme.js"></script>


	</body>
</html>

<?php
JLoader::registerNamespace( 'GNZ11' , JPATH_LIBRARIES . '/GNZ11' , $reset = false , $prepend = false , $type = 'psr4' );
$GNZ11_js =  \GNZ11\Core\Js::instance();

$doc = \Joomla\CMS\Factory::getDocument();
$Jpro = $doc->getScriptOptions('Jpro') ;
$Jpro['load'][] = [
    'u' =>  $this->baseurl .'/templates/'. $this->template . '/js/custom-js.js' , // Путь к файлу
    't' => 'js' ,                                       // Тип загружаемого ресурса
    'c' => '' ,                             // метод после завершения загрузки
];
$doc->addScriptOptions('Jpro' , $Jpro ) ;





?>