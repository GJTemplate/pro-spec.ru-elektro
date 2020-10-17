<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

/* @var $displayData array */
/* @var $template object */
extract($displayData);





?>

<div class="clear"></div>
<div style="" abbr class="l-get-discount" title="Заполните форму заявки и наши менеджеры свяжутся с вами.">
    <span  class="l-get-form-btn get-discount" data-form_type="GetDiscount" data-template="forms_extensions" data-add_class="<?= $template->template ?>"></span>
</div>
<script>
    setTimeout(function (){
        var $ = jQuery ;
        var Host ;
        var __params;
        var El ;
        $('.l-get-form-btn').on('click' , function (){
            this.__plugin = 'quickorder';
            this.__params = Joomla.getOptions(this.__plugin, {});
            El = this ;

            var _v = this.__params.version ;
            var _host = wgnz11.Options.Ajax.siteUrl ;
            wgnz11.load.js( _host+'plugins/jshoppingproducts/quickorder/assets/js/driver.js?'+_v )
                .then(function (){
                    wgnz11.load.js( _host+'plugins/jshoppingproducts/quickorder/assets/js/forms.driver.js?'+_v )
                        .then(function (a) {
                            new window.ProductFormsDriver( El );
                        },function (err) { console.error(err)})
                })
        })
    },2000);
</script>




