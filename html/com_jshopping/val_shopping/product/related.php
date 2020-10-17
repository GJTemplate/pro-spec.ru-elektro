
<?php




$in_row = $this->config->product_count_related_in_row;?>
<?php if (count($this->related_prod)){?>  
<?php $result = count($this->related_prod)?>
<h3 class="jshop-titleheading-2"><?php print _JSHOP_RELATED_PRODUCTS?></h3>
    
   <div class="b-carousel"> <!-- контейнер, в котором будет карусель -->
        <?php
        if($result > 4){ ?>
            <div class="carousel-button-left b-carousel-button-left"></div> <!-- левая кнопка -->
            <div class="carousel-button-right b-carousel-button-right"></div> <!-- правая кнопка -->
        <?php
        } ?>
<div class="h-carousel-wrapper"> <!-- видимая область карусели -->
    <div class="carousel-items"> <!-- весь набор элементов карусели -->
       <?php foreach($this->related_prod as $k=>$product) {?> 
        <?php if ($product->label_id == '6') continue; ?>	   
           <div class="carousel-block">
                <div class="block_item">
                    <div class="item_name">
                        <a href="<?php print $product->product_link?>"><?php
			$str=($product->name);
            //разбиваем на массив
             $arr_str = explode(" ", $str);
            //берем первые 6 элементов
            $arr = array_slice($arr_str, 0, 6);
            //превращаем в строку
            $new_str = implode(" ", $arr);
           // Если необходимо добавить многоточие
            if (count($arr_str) > 6) {
            $new_str .= '...';
            }
            echo $new_str;//Выведет 'Этот текст имеет большое количество пробелов и...'
			?></a>
        </div>
        <div class="item_image">
		    
            <a href="<?php print $product->product_link?>">               
                <img width="70px" height="70px" src="<?print($product->image);?>">
            </a>
        </div>

    
		<?php if ($product->product_old_price > 0){?>
            <div class="old_price"><?php if ($this->config->product_list_show_price_description) echo _JSHOP_OLD_PRICE.": ";?><span><?php echo formatprice($product->product_old_price)?></span></div>
        <?php }?>
        <?php if ($product->_display_price){?>
        <div class="item_price">
            <div class="item_price_1">
			<?php if ($product->product_price == '0') { ?>
			<span style="font-size:8px;"><?php print 'ДОГОВОРНАЯ ЦЕНА';?></span>
			<?php } else {?>
			<?php print formatprice($product->product_price);?>
			<?php }?>
			</div>
			<?php if ($product->buy_link){?>
            <a class="button_buy" title="Добавить в корзину <?php 
			$str=($product->name);
            //разбиваем на массив
             $arr_str = explode(" ", $str);
            //берем первые 6 элементов
            $arr = array_slice($arr_str, 0, 6);
            //превращаем в строку
            $new_str = implode(" ", $arr);
           // Если необходимо добавить многоточие
            if (count($arr_str) > 6) {
            $new_str .= '...';
            }
            echo $new_str;//Выведет 'Этот текст имеет большое количество пробелов и...'
			?>" href="<?php echo $product->buy_link?>"><?php echo _JSHOP_ADD_TO_CART?></a> &nbsp;
            <?php }?>
        </div>
		<div class="cls"></div>
        <?php }?>
		<div class="cls"></div>
    </div>
</div>
           
       <?php }?>
</div>

</div>
       
 </div> 
   

<?php }?>