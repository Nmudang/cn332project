<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- CONTENT =============================-->
<section class="item content">
        <div class="container toparea">
            
            <?php foreach ($clothes as $item):?>
                <div class="col">
                    <div class="row-md-4">
                    
                        <div class="productbox">
                            <div class="fadeshop">
                                <div class="captionshop text-center" style="display: none;">
                                    <h3><?= $item['Name'] ?></h3>
                                    <p>
                                        <?= $item['CollectionType'] ?>
                                        <?= $item['Type'] ?>
                                        <?= $item['Number'] ?>
                                    </p>
                                    <p>
                                        <a href="<?=base_url('shopping_cart');?>" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                    </p>
                                </div>
                                <img src="<?=base_url('public/images');?>/<?= $item['product_image'] ?>" class="img-thumbnail">
                            </div>
                            <div class="product-details">
                                <a href="#">
                                    <h1>NAME: <?= $item['Name'] ?></h1>
                                </a>
                                <span class="price">
                                    <span class="edd_price"><p>PRICE: <?= $item['Price'] ?></p></span>
                                </span>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>   
        </div>
    </section>