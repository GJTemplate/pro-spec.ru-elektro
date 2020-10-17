jQuery('.categoryMenu').click(()=>{
	jQuery('.categoryBack').toggle();
	jQuery('.categoryBlocks').toggle();
	jQuery('.categoryBlocks > ul > li:eq(0) > ul').css('display','block');
});
jQuery('.categoryBack').click(()=>{
	jQuery('.categoryBack').css('display','none');
	jQuery('.categoryBlocks').css('display','none');
})

 jQuery('.header__menuLink__icon').click(()=>{
 	jQuery('.overlayHeader').css('display','block');
 });
 jQuery('.compare_link_to_list').text('');
 jQuery('.overlayClose').click(()=>{
 	jQuery('.overlayHeader').css('display','none');
 });
 

jQuery('.mycategoryBack').click(()=>{
	jQuery('.mycategoryBack').css('display','none');
	jQuery('.mycategoryBlocks').css('display','none');
})
/*jQuery('.myoverlayClose').click(()=>{
	jQuery('.mycategoryBack').css('display','none');
	jQuery('.mycategoryBlocks').css('display','none');
})*/
 jQuery('.header__menuLink__icon').click(()=>{
 	jQuery('.myoverlayHeader').css('display','block');
 });
 jQuery('.compare_link_to_list').text('');
 jQuery('.myoverlayClose').click(()=>{
 	jQuery('.myoverlayHeader').css('display','none');
 });


jQuery('.overlayClose').on('click',function () {

	jQuery('.categoryBack').css('display','none');
	jQuery('.categoryBlocks').css('display','none');
});
jQuery('.mycategoryMenu').on('click',function () {
	var GNZ11 = (Joomla.getOptions('GNZ11'))
	wgnz11.load.js(GNZ11.Document.Host+'/templates/elektro/js/mycategoryBlocks.js');

});