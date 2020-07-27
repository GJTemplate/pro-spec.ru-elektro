 jQuery('.header__menuLink__icon').click(()=>{
 	jQuery('.overlayHeader').css('display','block');
 });
 jQuery('.compare_link_to_list').text('');
 jQuery('.overlayClose').click(()=>{
 	jQuery('.overlayHeader').css('display','none');
 });
 jQuery('.joomla-nav').append('<li class="moreMenu"><span>Ещё</span></li>')
 jQuery('.moreMenu').mouseover(()=>{
 	jQuery('.moreMenuHidden').css('display','block');
 });
  jQuery('.moreMenu').mouseout(()=>{
 	jQuery('.moreMenuHidden').css('display','none');
 	jQuery('.moreMenuHidden').mouseover(()=>{
 		jQuery('.moreMenuHidden').css('display','block');
 	})
 	jQuery('.moreMenuHidden').mouseout(()=>{
 		jQuery('.moreMenuHidden').css('display','none');
 	})
 });
 jQuery(document).ready(function() {
    let widthElem;
   console.log(jQuery(window).width() / 4)
   if(jQuery(window).width() < 900){
     widthElem = jQuery(window).width() / 3;
   jQuery('.pager').css('width',  widthElem +'px');
   } else {
     if(jQuery(window).width() < 1300){
       widthElem = jQuery(window).width() / 4;
     jQuery('.pager').css('width',  widthElem +'px');
   } else {
     widthElem = jQuery(window).width() /5;
   jQuery('.pager').css('width',  widthElem +'px');
   }

   }


jQuery(window).resize(() => {
  if(jQuery(window).width() < 900){
    widthElem = jQuery(window).width() / 3;
  jQuery('.pager').css('width',  widthElem +'px');
  } else {
    if(jQuery(window).width() < 1300){
      widthElem = jQuery(window).width() / 4;
    jQuery('.pager').css('width',  widthElem +'px');
  } else {
    widthElem = jQuery(window).width() /5;
  jQuery('.pager').css('width',  widthElem +'px');
  }

  }
})
});

jQuery('.categoryMenu').click(()=>{
	jQuery('.categoryBack').toggle();
	jQuery('.categoryBlocks').toggle();
	jQuery('.categoryBlocks > ul > li:eq(0) > ul').css('display','block');
});
jQuery('.categoryBack').click(()=>{
	jQuery('.categoryBack').css('display','none');
	jQuery('.categoryBlocks').css('display','none');
})
jQuery('.overlayClose').click(()=>{
	jQuery('.categoryBack').css('display','none');
	jQuery('.categoryBlocks').css('display','none');
})
if(jQuery(window).width() < 1020){
		jQuery('.item768').css('display','none');
		if(jQuery('.moreMenuHidden').children().length < 4){
		 jQuery('.moreMenuHidden').prepend('<li ><a href="/uslugi/arenda">Аренда раций</a></li>')
		}
	} else {
			jQuery('.item768').css('display','block');
			jQuery('.moreMenuHidden li:nth-child(1)').remove()
		}
	if(jQuery(window).width() < 900){
		jQuery('.item770').css('display','none');
		if(jQuery('.moreMenuHidden').children().length < 5){
		 jQuery('.moreMenuHidden').prepend('<li ><a href="/company/partnerskaya-programma">Партнерская программа</a></li>')
		}
	} else {
			jQuery('.item770').css('display','block');
			jQuery('.moreMenuHidden li:nth-child(1)').remove()
		}
jQuery(window).resize(()=>{
	if(jQuery(window).width() < 1020){
		jQuery('.item768').css('display','none');
		if(jQuery('.moreMenuHidden').children().length < 4){
		 jQuery('.moreMenuHidden').prepend('<li ><a href="/uslugi/arenda">Аренда раций</a></li>')
		}
	} else {
			jQuery('.item768').css('display','block');
			jQuery('.moreMenuHidden li:nth-child(1)').remove()
		}
	if(jQuery(window).width() < 900){
		jQuery('.item770').css('display','none');
		if(jQuery('.moreMenuHidden').children().length < 5){
		 jQuery('.moreMenuHidden').prepend('<li ><a href="/company/partnerskaya-programma">Партнерская программа</a></li>')
		}
	} else {
			jQuery('.item770').css('display','block');
			jQuery('.moreMenuHidden li:nth-child(1)').remove()
		}
	console.log(jQuery(window).width())
})
