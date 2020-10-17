<?php
/***********************************************************************************************************************
 * ╔═══╗ ╔══╗ ╔═══╗ ╔════╗ ╔═══╗ ╔══╗  ╔╗╔╗╔╗ ╔═══╗ ╔══╗   ╔══╗  ╔═══╗ ╔╗╔╗ ╔═══╗ ╔╗   ╔══╗ ╔═══╗ ╔╗  ╔╗ ╔═══╗ ╔╗ ╔╗ ╔════╗
 * ║╔══╝ ║╔╗║ ║╔═╗║ ╚═╗╔═╝ ║╔══╝ ║╔═╝  ║║║║║║ ║╔══╝ ║╔╗║   ║╔╗╚╗ ║╔══╝ ║║║║ ║╔══╝ ║║   ║╔╗║ ║╔═╗║ ║║  ║║ ║╔══╝ ║╚═╝║ ╚═╗╔═╝
 * ║║╔═╗ ║╚╝║ ║╚═╝║   ║║   ║╚══╗ ║╚═╗  ║║║║║║ ║╚══╗ ║╚╝╚╗  ║║╚╗║ ║╚══╗ ║║║║ ║╚══╗ ║║   ║║║║ ║╚═╝║ ║╚╗╔╝║ ║╚══╗ ║╔╗ ║   ║║
 * ║║╚╗║ ║╔╗║ ║╔╗╔╝   ║║   ║╔══╝ ╚═╗║  ║║║║║║ ║╔══╝ ║╔═╗║  ║║─║║ ║╔══╝ ║╚╝║ ║╔══╝ ║║   ║║║║ ║╔══╝ ║╔╗╔╗║ ║╔══╝ ║║╚╗║   ║║
 * ║╚═╝║ ║║║║ ║║║║    ║║   ║╚══╗ ╔═╝║  ║╚╝╚╝║ ║╚══╗ ║╚═╝║  ║╚═╝║ ║╚══╗ ╚╗╔╝ ║╚══╗ ║╚═╗ ║╚╝║ ║║    ║║╚╝║║ ║╚══╗ ║║ ║║   ║║
 * ╚═══╝ ╚╝╚╝ ╚╝╚╝    ╚╝   ╚═══╝ ╚══╝  ╚═╝╚═╝ ╚═══╝ ╚═══╝  ╚═══╝ ╚═══╝  ╚╝  ╚═══╝ ╚══╝ ╚══╝ ╚╝    ╚╝  ╚╝ ╚═══╝ ╚╝ ╚╝   ╚╝
 *----------------------------------------------------------------------------------------------------------------------
 * @author Gartes | sad.net79@gmail.com | Skype : agroparknew | Telegram : @gartes
 * @date 10.10.2020 06:46
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 **********************************************************************************************************************/
defined('_JEXEC') or die; // No direct access to this file
$doc = \Joomla\CMS\Factory::getDocument();

?>
<div id="elektro_top">
    <?php
    if($doc->countModules('my-top-menu') ) : ?>
        <div class="my-top-menu">
            <jdoc:include type="modules" name="my-top-menu" style="none" />
        </div>
        <div style="clear: both; width: 100%; height: 0px; margin: 0px;"></div>
    <?php
    endif; ?>
    <?php
    if($doc->countModules('elektro-banner_1') ) : ?>
        <div class="elektro-banner_1">
            <jdoc:include type="modules" name="elektro-banner_1" style="none" />
        </div>
    <?php
    endif; ?>
    <?php
    if($doc->countModules('elektro-banner_left') or $doc->countModules('elektro-banner_right')) : ?>
        <div class="sliders" >
            <div class="elektro-banner_left">
                <jdoc:include type="modules" name="elektro-banner_left" style="none" />
            </div>
            <div class="slidersCenter">
                <div class="sliderTopCenter">
                    <jdoc:include type="modules" name="my_litle_banner_center" style="none" />
                </div>
                <div class="sliderBottomCenter">
                    <jdoc:include type="modules" name="my_litle_banner_right" style="none" />
                </div>
            </div>
            <div class="elektro-banner_right">
                <jdoc:include type="modules" name="my_litle_banner_left" style="none" />
            </div>
        </div>
    <?php
    endif; ?>
</div>
