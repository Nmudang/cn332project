<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- CONTENT =============================-->
<section class="item content">
        <div class="container toparea">
            <div class="underlined-title">
                <div class="editContent">
                    <h1 class="text-center latestitems">OUR PRODUCTS</h1>
                </div>
                <div class="wow-hr type_short">
                    <span class="wow-hr-h">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
			</span>
                </div>
            </div>
            <?php foreach ($clothes as $item):?>
                <div class="row">
                    <div class="col-md-4">
                    
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
                                        <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
                                        <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
                                    </p>
                                </div>
                                <span class="maxproduct"><img src="public/images/product1-1.jpg" alt=""></span>
                            </div>
                            <div class="product-details">
                                <a href="#">
                                    <h1><?= $item['Name'] ?></h1>
                                </a>
                                <span class="price">
                                    <span class="edd_price"><?= $item['Price'] ?></span>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>   
        </div>
    </section>