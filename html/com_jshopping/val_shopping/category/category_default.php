<?php defined('_JEXEC') or die();

$app = \Joomla\CMS\Factory::getApplication();

$pathScript = JPATH_THEMES . '/elektro/assets/css/com_jshopping.category.critical.css';
$params = [
        'debug' => true ,
        'asFile' => true ,
    ];
\GNZ11\Document\Document::addIncludeStyleDeclaration($pathScript, $params);





?>
<div class="jshop">
    <?php if ($this->category->seoname) { ?>
        <h1><?php echo $this->category->seoname ?></h1>
    <?php } else { ?>
        <h1><?php echo $this->category->name ?></h1>
    <?php } ?>
    <?php if ($this->category->short_description) { ?>
        <?php
        $controller = JRequest::getVar('controller', null);
        $category_id = JRequest::getVar('category_id', null);
        if (!($category_id == '857' || $category_id == '858' || $category_id == '859' || $category_id == '893' || $category_id == '1060' || $category_id == '1179' || $category_id == '1393' || $category_id == '1410' || $category_id == '1411' || $category_id == '1466'))
        { ?>
            <div style="border-top: 1px solid rgb(204, 204, 204); padding:10px 0 0; clear: both;"><?php echo $this->category->_short_description ?></p></div>
        <?php } else { ?>

            <div id="category_desc"
                 style="border-top: 1px solid rgb(204, 204, 204); clear: both;"><?php echo $this->category->description ?></div>
        <?php } ?>
    <?php } ?>
    <div style="">
        <?php
        $document = JFactory::getDocument();
        $renderer = $document->loadRenderer('modules');
        $options = array('style' => 'xhtml');
        $position = 'my_categor';
        echo $renderer->render($position, $options, null);
        ?>
    </div>
    <div class="jshop_list_category">
        <?php $Table_Category = JTable::getInstance("Category", "JShop"); ?>

        <?php # Дочернии категории ?>
        <?//= JLayoutHelper::render('category.list_categoryes', [ 'self'=> $this ]); ?>


    </div>
    <?php include(dirname(__FILE__) . "/products.php"); ?>
    <?php
    $controller = JRequest::getVar('controller', null);
    $category_id = JRequest::getVar('category_id', null);

    # исключеные катигории
    $excludedCategories = [857,858,859,893,1060,1179,1393,1410,1411,1466] ;
    if (!in_array($category_id, $excludedCategories))
    { ?>

        <?php
        if (!$app->input->get('start', false, 'INT') && $app->input->get('sitecountry', '', 'STRING') == 'moskva')
        { ?>
            <div id="category_desc" style="border-top: 1px solid rgb(204,204,204); clear: both;">
                <?= $this->category->description ?>
            </div>
            <?php
        }#END IF
        ?>


        <?php
    } ?>
</div>





















