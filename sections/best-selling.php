<?php
$select = "SELECT * FROM product";
$query = mysqli_query($conn, $select);

?>
<section class="section product-slider tab-slider-product">
    <div class="container">
        <div class="section-header">
            <h2>Best Seller</h2>
            <p>Browse the huge variety of our best seller</p>
        </div>
        <div class="tabs-listing">
            <ul class="tabs clearfix tabs-style2">
                <li class="active" rel="tab1">Women</li>
                <li rel="tab2">Men</li>
                <li rel="tab3" class="tab_last">Accessories</li>
            </ul>
            <div class="tab_container">
                <h3 class="tab_drawer_heading d_active body-font text-uppercase text-center" rel="tab1">Women <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                <div id="tab1" class="tab_content">
                    <div class="grid-products">
                        <div class="row">
                            <?php while ($row = mysqli_fetch_array($query)) { 
                                $product_id = $row['id'];
                                
                            ?>

                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/product/<?php echo $row['image_front']; ?>" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/product/<?php echo $row['image_back']; ?>" alt="image" title="">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html"><?php echo $row['name']; ?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$199.00</span>
                                        <span class="price"><?php echo $row['price']; ?></span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="view-collection text-center mt-3 mt-md-4">
                        <a href="shop.php" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab2">Men <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                <div id="tab2" class="tab_content">
                    <div class="grid-products">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-14.jpg" src="assets/images/products/product-14.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-14-1.jpg" src="assets/images/products/product-14-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Martha Knit Top</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$199.00</span>
                                        <span class="price">$219.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!--Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded green medium-xs"><span class="tooltip-label">Green</span></li>
                                        <li class="swatch rounded orange medium-xs"><span class="tooltip-label">Orange</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-12.jpg" src="assets/images/products/product-12.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-12-1.jpg" src="assets/images/products/product-12-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded black medium-xs"><span class="tooltip-label">Black</span></li>
                                        <li class="swatch rounded purple medium-xs"><span class="tooltip-label">Purple</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-13.jpg" src="assets/images/products/product-13.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-13-1.jpg" src="assets/images/products/product-13-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product label-->
                                    <div class="product-labels"><span class="lbl pr-label1">HOT</span></div>
                                    <!--Product label-->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Stand Collar Slim Shirt</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$399.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded red medium-xs"><span class="tooltip-label">red</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-15.jpg" src="assets/images/products/product-15.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-15-1.jpg" src="assets/images/products/product-15-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded darkgreen medium-xs"><span class="tooltip-label">darkgreen</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-16.jpg" src="assets/images/products/product-16.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-16-1.jpg" src="assets/images/products/product-16-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->   
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Cool Short Sleev T-Shirt</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$59.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded maroon medium-xs"><span class="tooltip-label">maroon</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-23.jpg" src="assets/images/products/product-23.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-23-1.jpg" src="assets/images/products/product-23-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->   
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Collar Denim Jacket</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$59.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded maroon medium-xs"><span class="tooltip-label">maroon</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-17.jpg" src="assets/images/products/product-17.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-17-1.jpg" src="assets/images/products/product-17-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">40% OFF</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Black Solid Cap</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$99.00</span>
                                        <span class="price">$89.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!--Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded aqua medium-xs"><span class="tooltip-label">Aqua</span></li>
                                        <li class="swatch rounded orange medium-xs"><span class="tooltip-label">Orange</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-18.jpg" src="assets/images/products/product-18.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-18-1.jpg" src="assets/images/products/product-18-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Leather backpack Black</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded black medium-xs"><span class="tooltip-label">Black</span></li>
                                        <li class="swatch rounded purple medium-xs"><span class="tooltip-label">Purple</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                    <div class="view-collection text-center mt-3 mt-md-4">
                        <a href="shop-top-filter.html" class="btn btn-primary">View Collection</a>
                    </div>
                </div>
                <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab3">Accessories <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                <div id="tab3" class="tab_content">
                    <div class="grid-products">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-17.jpg" src="assets/images/products/product-17.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-17-1.jpg" src="assets/images/products/product-17-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">40% OFF</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Black Solid Cap</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$99.00</span>
                                        <span class="price">$89.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!--Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded aqua medium-xs"><span class="tooltip-label">Aqua</span></li>
                                        <li class="swatch rounded orange medium-xs"><span class="tooltip-label">Orange</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-18.jpg" src="assets/images/products/product-18.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-18-1.jpg" src="assets/images/products/product-18-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Leather backpack Black</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i><i class="an an-star"></i> <i class="an an-star"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded black medium-xs"><span class="tooltip-label">Black</span></li>
                                        <li class="swatch rounded purple medium-xs"><span class="tooltip-label">Purple</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-19.jpg" src="assets/images/products/product-19.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-19-1.jpg" src="assets/images/products/product-19-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Aviator Sunglasses</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$59.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded red medium-xs"><span class="tooltip-label">red</span></li>
                                        <li class="swatch rounded orange medium-xs"><span class="tooltip-label">orange</span></li>
                                        <li class="swatch rounded yellow medium-xs"><span class="tooltip-label">yellow</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-20.jpg" src="assets/images/products/product-20.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-20-1.jpg" src="assets/images/products/product-20-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Classic Watch Khaki</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$499.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                    <!-- Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch rounded darkgreen medium-xs"><span class="tooltip-label">darkgreen</span></li>
                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-10.jpg" src="assets/images/products/product-10.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-10-1.jpg" src="assets/images/products/product-10-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->   
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Backpack With Contrast Bow</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$39.01</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-24.jpg" src="assets/images/products/product-24.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-24-1.jpg" src="assets/images/products/product-24-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->   
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Classic Tie</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$49.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-25.jpg" src="assets/images/products/product-25.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-25-1.jpg" src="assets/images/products/product-25-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->   
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Knit Glove</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$89.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                </div>
                                <!-- End product details -->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-26.jpg" src="assets/images/products/product-26.jpg" alt="image" title="">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-26-1.jpg" src="assets/images/products/product-26-1.jpg" alt="image" title="">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->

                                    <!--Product Button-->
                                    <div class="button-set style2">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                    <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon an an-search-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                    <i class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                    <i class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->   
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-left">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Winter Cap</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$79.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                                    <!--End Product Review-->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                    <div class="view-collection text-center mt-3 mt-md-4">
                        <a href="shop-top-filter.html" class="btn btn-primary">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>