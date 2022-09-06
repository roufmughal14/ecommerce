<header id="header" class="header header-main d-flex align-items-center header-2">
    <div class="container">        
        <div class="row">
            <!--Logo / Menu Toggle-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center justify-content-start d-flex">
                <!--Mobile Toggle-->
                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                <!--End Mobile Toggle-->
                <!--Logo-->
                <div class="logo"><a href="index.php"><img class="logo-img mh-100" src="assets/images/logo-demo2.png" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" width="140" /><span class="logo-txt d-none"></span></a></div>
                <!--End Logo-->
            </div>
            <!--End Logo / Menu Toggle-->
            <!--Main Navigation Desktop-->
            <div class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col">
                <!--Desktop Menu-->
                <div class="row">
                    <div class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-center d-menu-col">
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="index.php">Home <i class="an an-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="shop.php">Shop <i class="an an-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="about.php">About <i class="an an-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="gallery.php">Gallery <i class="an an-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="contact.php">Contact <i class="an an-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="blog.php">Blog <i class="an an-angle-down-l"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                </div>                
                <!--End Desktop Menu-->
            </div>
            <!--End Main Navigation Desktop-->
            <!--Right Action-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center icons-col text-right d-flex justify-content-end">

                <!--Search-->
                <div class="site-search iconset"><i class="icon an an-search-l"></i><span class="tooltip-label">Search</span></div>
                <!--End Search-->

                <!--Wishlist-->
                <div class="wishlist-link iconset"><a href="wishlist.php"><i class="icon an an-heart-l"></i><span class="wishlist-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span><span class="tooltip-label">Wishlist</span></a></div>
                <!--End Wishlist-->

                <!--Setting Dropdown-->
                <div class="user-link iconset"><i class="icon an an-user-2"></i><span class="tooltip-label">Account</span></div>
                <div id="userLinks">
                    <ul class="user-links">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Sign Up</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                        <li><a href="compare.php">Compare</a></li>
                    </ul>
                </div>
                <!--End Setting Dropdown-->

                <!--Minicart Drawer-->
                <div class="header-cart iconset">
                    <a href="#" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                        <i class="icon an an-cart-l"></i><span class="site-cart-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">2</span><span class="tooltip-label">Cart</span>
                    </a>
                </div>
                <!--End Minicart Drawer-->

            </div>
            <!--End Right Action-->
        </div>
    </div>
    <!--Search Popup-->
    <div id="search-popup" class="search-drawer">
        <div class="container">
            <span class="closeSearch an an-times-l"></span>
            <form class="form minisearch" id="header-search" action="#" method="get">
                <label class="label"><span>Search</span></label>
                <div class="control">
                    <div class="searchField">
                        <div class="search-category">
                            <select id="rgsearch-category" name="rgsearch[category]" data-default="All Categories">
                                <option value="00" label="All Categories" selected="selected">All Categories</option>
                                <optgroup id="rgsearch-shop" label="Shop">
                                    <option value="0">- All</option>
                                    <option value="1">- Men</option>
                                    <option value="2">- Women</option>
                                    <option value="3">- Shoes</option>
                                    <option value="4">- Blouses</option>
                                    <option value="5">- Pullovers</option>
                                    <option value="6">- Bags</option>
                                    <option value="7">- Accessories</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-box">
                            <button type="submit" title="Search" class="action search" disabled=""><i class="icon an an-search-l"></i></button>
                            <input type="text" name="q" value="" placeholder="Search by keyword or #" class="input-text">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--End Search Popup-->
</header>

<!-- Mobile Menu -->

<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="index.php">Home <i class="an an-plus-l"></i></a>
        </li>
        <li class="lvl1 parent megamenu"><a href="shop.php">Shop <i class="an an-plus-l"></i></a>
        </li>
        <li class="lvl1 parent megamenu"><a href="about.php">About <i class="an an-plus-l"></i></a>
        </li>
        <li class="lvl1 parent megamenu"><a href="gallery.php">Gallery <i class="an an-plus-l"></i><span class="lbl nm_label1">New</span></a>
        </li>
        <li class="lvl1 parent megamenu"><a href="blog.php">Blog <i class="an an-plus-l"></i></a>
        </li>
        <li class="lvl1 parent megamenu"><a href="contact.php">Contact <i class="an an-plus-l"></i></a>
        </li>
        <li class="acLink"></li>
        <li class="lvl1 bottom-link"><a href="login.php">Login</a></li>
        <li class="lvl1 bottom-link"><a href="register.php">Signup</a></li>
        <li class="lvl1 bottom-link"><a href="wishlist.php">Wishlist</a></li>
        <li class="lvl1 bottom-link"><a href="compare.php">Compare</a></li>
    </ul>
</div>
<div id="page-content">