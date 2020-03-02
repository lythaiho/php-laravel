@extends('layout')
@section('title',"Trang chủ")

@section('content')
    <?php
    function checkString($str, $numberOfLetter)
    {
        if (strlen($str) > $numberOfLetter) {
            return str_replace(substr($str, $numberOfLetter, strlen($str) - $numberOfLetter), '...', $str);
        } else {
            return $str;
        }
    }
    ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop01.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop03.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Accessories<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Cameras<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#Laptops">Laptops</a></li>
                                <li><a data-toggle="tab" href="#Smartphones">Smartphones</a></li>
                                <li><a data-toggle="tab" href="#Cameras">Cameras</a></li>
                                <li><a data-toggle="tab" href="#Accessories">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="Laptops" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Laptop")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                            <sup>đ</sup></del>
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Smartphones" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Smartphones")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                            <sup>đ</sup></del>
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Cameras" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Camera")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                            <sup>đ</sup></del>
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Accessories" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Accessories")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <?php
                                                        $oldPrince = $p['old-prince'];?>
                                                        @if(strlen($oldPrince)>0)
                                                            <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                                <sup>đ</sup></del>
                                                        @endif
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <ul class="hot-deal-countdown">
                            <li>
                                <div>
                                    <h3>02</h3>
                                    <span>Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>10</h3>
                                    <span>Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>34</h3>
                                    <span>Mins</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>60</h3>
                                    <span>Secs</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">hot deal this week</h2>
                        <p>New Collection Up to 50% OFF</p>
                        <a class="primary-btn cta-btn" href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Top selling</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#Laptop-sell">Laptops</a></li>
                                <li><a data-toggle="tab" href="#Smartphone-sell">Smartphones</a></li>
                                <li><a data-toggle="tab" href="#Camera-sell">Cameras</a></li>
                                <li><a data-toggle="tab" href="#Accessorie-sell">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="Laptop-sell" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Laptop")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                            <sup>đ</sup></del>
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Smartphone-sell" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Smartphones")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                            <sup>đ</sup></del>
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Camera-sell" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Camera")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                            <sup>đ</sup></del>
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="Accessorie-sell" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                <?php foreach ($products as $p): ?>
                                <?php
                                $category = $p['category'];
                                ?>
                                @if($category =="Accessories")
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo $p['image'];?>" alt="">
                                                <div class="product-label">
                                                    <?php
                                                    $sale = $p['sale'];
                                                    $new = $p['new'];  ?>
                                                    @if(strlen($sale)>0)
                                                        <span class="sale"><?php echo $p['sale'];?></span>
                                                    @endif

                                                    @if(strlen($new)>0)
                                                        <span class="new"><?php echo $p['new'];?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $p['category'];?></p>
                                                <h3 class="product-name"><a
                                                            href="#"><?php echo checkString($p['name'], 22);?></a></h3>
                                                <h4 class="product-price"><?php echo $p['price'];?><sup>đ</sup>
                                                    <?php
                                                    $oldPrince = $p['old-prince'];?>
                                                    @if(strlen($oldPrince)>0)
                                                        <del class="product-old-price"><?php echo $p['old-prince'];?>
                                                            <sup>đ</sup></del>
                                                    @endif
                                                </h4>
                                                <div class="product-rating">
                                                    <?php
                                                    $rating = $p['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {?>
                                                    <i class="fa fa-star"></i>
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                                class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                                class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to
                                                    cart
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    @endif
                                    <?php endforeach; ?>
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
@endsection
