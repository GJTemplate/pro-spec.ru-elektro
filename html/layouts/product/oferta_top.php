<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

defined('_JEXEC') or die();
/* @var $displayData array */
/* @var $self object */
/* @var $template object */

extract($displayData);

 





\GNZ11\Document\Document::addIncludeStyleDeclaration(JPATH_THEMES . '/' . $template->template . '/assets/css/product/critical.oferta_top.css',
    [

        'debug' => $template->params->get('debug_on', true),
        'asFile' => true,
    ]
);


?>
<div class="oferta_top">
    <div class="offerta">
        <button class="l-get-form-btn"
                data-add_class="<?= $template->template ?>"
                data-form_type="GetDiscount"
                data-template="create_offer"> Создать оферту ЕАИСТ
        </button>
    </div>
    <div class="offerta1">
        <button class="l-get-form-btn"
                data-add_class="<?= $template->template ?>"
                data-form_type="GetDiscount"
                data-template="to_tender">Пригласить на ТЕНДЕР
        </button>
    </div>
    <div class="offerta2">
        <button class="l-get-form-btn"
                data-add_class="<?= $template->template ?>"
                data-form_type="GetDiscount"
                data-template="commercial_proposal">Запросить КП
        </button>
    </div>
    <div  class="offerta3">
        <?php print $self->_tmp_product_html_after_my_buttons;?>
        <?php print $self->_tmp_product_html_my_buttons;?>
    </div>
    <div  class="offerta4"><?php if ($self->enable_wishlist){?>
            <input type="submit" class="button wishlist" value="<?php echo _JSHOP_ADD_TO_WISHLIST?>" onclick="jQuery('#to').val('wishlist');" />
        <?php }?></div>
</div>
