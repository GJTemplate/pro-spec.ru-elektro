window.mycategoryBlocks = function () {
    var $ = jQuery ;
    var self = this ;
    this.__type = 'modules' ;
    this.__name = 'mycategoryBlocks' ;
    this.__group = null ;
    this.__param = {
        selectors : {
            btn : '.mycategoryMenu' ,
            template : '#__template_mycategoryBlocks_ul_menu'
        }
    };




    this.Init = function () {
        console.log( this.__param )

        self.fromTemplate(self.__param.selectors.template)
        self.onClick();
        $(self.__param.selectors.btn).off().on('click' , self.onClick )

       /* Promise.all([
            // self.load.css('/modules/mod_myod_jshopping_cat/tmpl/'+this.__param.tmpl+'/css/style.css') ,
            // self.load.js('/modules/mod_myod_jshopping_cat/tmpl/'+this.__param.tmpl+'/js/accordion.js') ,

        ]).then(function ( a)
        {

        })*/


    };
    this.onClick = function () {
        jQuery('.mycategoryBack').toggle();
        jQuery('.mycategoryBlocks').toggle();
        jQuery('.mycategoryBlocks > ul > li:eq(0) > ul').css('display','block');
    }
    this.Init();
}
window.mycategoryBlocks.prototype = new GNZ11() ;
new window.mycategoryBlocks();

