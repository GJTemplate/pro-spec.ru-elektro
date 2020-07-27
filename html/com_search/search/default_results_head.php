<?php
	/**
	 * @package     ${NAMESPACE}
	 * @subpackage
	 *
	 * @copyright   A copyright
	 * @license     A "Slug" license name e.g. GPL2
	 */
	
	
	$titles = array(' %d позиция', ' %d позиции', ' %d позиций');
	
	$app = \JFactory::getApplication() ;
	$doc = JFactory::getDocument();
	
	
	$searchword = $_GET['searchword'] ;
	$searchphrase = $app->input->get('searchphrase' );
	$section_current_id = $app->input->get('category_id' , 0  );
	$limit = $app->input->get('limit' );
	$start = $app->input->get('start' , 0 );
	$ordering = $app->input->get('ordering' , 'popular' );
	
	
	
	$section = array();
	
	JLoader::registerNamespace( 'GNZ11' , JPATH_LIBRARIES . '/GNZ11' , $reset = false , $prepend = false , $type = 'psr4' );
	$countText = \GNZ11\Document\Text::declOfNum( $this->total , $titles );
	
	$doc->addStyleDeclaration('
.search{
    float: left;
    width: auto;
}
.results_head {
    padding: 10px 10px;
    margin: 30px 15px;
    float: left;
    border: 1px solid red;
    width: 100%;
}
.r-head-wrp {
    position: relative;
    margin: 10px 0;
}
.r-head {
    position: absolute;
    top: -34px;
    background: #fff;
}
.r-head span {
    padding: 10px;
    font-size: 1.2rem;
}
.r-head-text {
    font-size: 1rem;
}
.r-line{
    float: left;
    width: 25%;
    margin-bottom: 10px;
}
.r-line-name{

}
@media (max-width: 767px){

}
@media (max-width: 425px){
    .results_head{
        margin: 30px 3px;
        width: calc(100% - 30px);
        /* width: auto; */
    }
    .r-line{
        width: 50%;
    }
}
@media (max-width: 320px){}
	');
	
	// /templates/elektro/html/com_search/search/default_results_head.php
	

?>
	<div class="results_head">
	
	
	
<?php
	
	
	
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
		
		if( $section_current_id == $section_id ) continue ; #END IF
		
		
		$section_name = $result->section  ;
		$section_url = JUri::root() . '?'
			.'searchword='.$searchword
			.'&category_id='.$section_id
			.'&searchphrase='.$searchphrase
			.'&limit='.$limit
			.'&start='.$start
			.'&ordering='.$ordering
			.'&view=search&option=com_search'   ;
		
			?>
			<div class="r-line">
				<a class="r-line-name"  href="<?= $section_url ?>">
					<?= $section_name ?>
				</a>
			</div>
		<?php
		
		
	}#END FOREACH
	
	?>
	</div><!--/.results_head -->
	
<?php
	
