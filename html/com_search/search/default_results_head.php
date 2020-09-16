<?php
	/**
	 * @package     ${NAMESPACE}
	 * @subpackage
	 *
	 * @copyright   A copyright
	 * @license     A "Slug" license name e.g. GPL2
	 */





/*echo'<pre>';print_r( TMPL_ELEKTRO_DEBUG );echo'</pre>'.__FILE__.' '.__LINE__;
echo'<pre>';print_r( TMPL_ELEKTRO_CRITICAL_AS_FILE );echo'</pre>'.__FILE__.' '.__LINE__;

die(__FILE__ .' '. __LINE__ );*/
	
	$titles = array(' %d позиция', ' %d позиции', ' %d позиций');
	
	$app = \JFactory::getApplication() ;
	$doc = JFactory::getDocument();
	
	
	$searchword = $_GET['searchword'] ;
	$searchphrase = $app->input->get('searchphrase' );
	$section_current_id = $app->input->get('category_id' , 0  );
	$limit = $app->input->get('limit' );
	$start = $app->input->get('start' , 0 );
	$ordering = $app->input->get('ordering' , 'popular' );


$pathStyle = JPATH_THEMES . '/elektro/assets/css/critical.com_search.css';
$params = [
    'debug' => 1 ,
    'asFile' => 1 ,
];
\GNZ11\Document\Document::addIncludeStyleDeclaration($pathStyle, $params);




	$section = array();
	

	$countText = \GNZ11\Document\Text::declOfNum( $this->total , $titles );

?>
	<div class="results_head">
	
	
	
<?php



//    echo'<pre>';print_r( $categorys );echo'</pre>'.__FILE__.' '.__LINE__;
//    die(__FILE__ .' '. __LINE__ );




//echo'<pre>';print_r( count( $this->results ) );echo'</pre>'.__FILE__.' '.__LINE__;




	foreach ( $this->results as $result)
	{
		$section_id = $result->section_id ;
		
		if( in_array( $section_id , $section) || !$section_id    ) continue ; #END IF
		
		$section[] = $section_id ;
		
		if(  count($section)==1 )
		{
			$sectionTxt = '' ;
			if( $section_current_id  ) $sectionTxt  = ' в категории <b>'.$result->section.'</b> ' ;  #END IF
			
			?>
			<div class="r-head-wrp">
				<div class="r-head">
					<span>Результаты поиска</span>
				</div>
				<div class="r-head-text">
					<span>По запросу <b><?= $searchword ?></b> <?= $sectionTxt ?> найдено <?= $countText ?></span>
				</div>
			</div>
			<?php
		}#END IF
		

		

		
	}#END FOREACH

    $categorys = $app->get('joomshopping_categorys_search', array());
?>
        <div class="categorys-r-line-name scroll-special-style">
        <?php
foreach ($categorys as $id => $category)
{
    ?>
    <div class="r-line">
        <a title="<?= $category->name ?>" class="r-line-name" href="<?= $category->href ?>">
            <?= \GNZ11\Document\Text::truncation( $category->name, 41);  ?>
        </a>
    </div>


    <?php
}
?>
        </div>
            <?php



	?>
	</div><!--/.results_head -->
	
<?php
	
