<!-- HEADER START -->
<header class="site-header header-style-6  mobile-sider-drawer-menu">

    <div class="top-bar top-bar-liner bg-gray">
        <div class="container">
            <div class="row">
                <div class="wt-topbar-left">
                    <ul class="list-unstyled pull-right tb-info-liner">
                        <li><i class="fa fa-envelope site-text-primary"></i>almuko.m@gmail.com</li>
                        <li><i class="fa fa-phone site-text-primary"></i>+7 707 780 10 11</li>
                    </ul>
                </div>
                <div class="wt-topbar-right">
                    <ul class="list-inline pull-right tb-social-liner">
                        <li><a href="blog-grid.html" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- Search Link -->

    <div class="main-bar header-middle bg-white">
        <div class="container">
            <div class="logo-header">
                <a href="#">
                    <img src="{{asset('/site/images/logo-1.png')}}" width="216" height="37" alt="" />
                </a>
            </div>
            <div class="header-info">
                <ul>
                    <li>
                        <div>
                            <div class="icon-sm">
                                <span class="icon-cell  site-text-primary"><i class="iconmoon-travel"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>Наш Адрес </strong>
                                <span>Валиханова 47, г.Алматы</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="icon-sm">
                                <span class="icon-cell  site-text-primary"><i class="iconmoon-envelope"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>Email Address</strong>
                                <span>almuko.m@gmail.com</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="icon-sm">
                                <span class="icon-cell  site-text-primary"><i class="iconmoon-smartphone"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>Телефон</strong>
                                <span>+7 707 780 10 11</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="sticky-header main-bar-wraper">
        <div class="main-bar header-botton nav-site-bg-primary">
            <div class="container">
                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>
                <!-- MAIN Vav -->
                <div class="header-nav navbar-collapse collapse ">
                    <ul class=" nav navbar-nav">
                        <li class="active">
                            <a href="index.html">Главная</a>

                        </li>

                        <li>
                            <a href="services-1.html">Услуги</a>
                            <!--<ul class="sub-menu">
                                <li><a href="services-1.html">Services</a></li>
                                <li><a href="services-detail.html">Services Detail</a></li>
                            </ul>-->
                        </li>

                        <!--<li>
                            <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                <li><a href="footer-light.html">Footer Light</a></li>
                                <li><a href="footer-dark.html">Footer Dark</a></li>
                            </ul>
                        </li>-->

                        <li>
                            <a href="javascript:;">Магазин<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="product.html">Product</a></li>
                                <li><a href="product-detail.html">Product Detail</a></li>
                                <li><a href="shopping-cart.html">Shopping cart</a></li>
                                <li><a href="wish-list.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Категории<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                        <li>
                                            <a href="#">{{$category->name}}</a>
                                            @if($category->children->isNotEmpty())
                                                <ul class="sub-menu">
                                                    @foreach($category->children as $child)
                                                        @include('layouts.menu-item', ['category'=>$child])
                                                    @endforeach
                                                </ul>
                                            @endif

                                        </li>

                                @endforeach
                            </ul>

                        </li>

                        <!--<li>
                            <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="blog-list.html">List</a></li>
                                <li><a href="blog-list-sidebar.html">List-sidebar</a></li>
                                <li><a href="blog-grid.html">Grid</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid-sidebar</a></li>
                                <li><a href="blog-post.html">Post</a></li>
                            </ul>
                        </li>-->

                        <li class="has-mega-menu">
                            <a href="contact-1.html">Контакты</a>
                        </li>

                        <!--<li>
                            <a href="javascript:;">Elements<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="shortcode-accordians.html">Accordians</a></li>
                                <li><a href="shortcode-carousel-sliders.html">Carousel sliders</a></li>
                                <li><a href="shortcode-counters.html">Counters</a></li>
                                <li><a href="shortcode-google-map.html">Google map</a></li>
                                <li><a href="shortcode-icon-box-styles.html">Icon box styles</a></li>
                                <li><a href="shortcode-pricing-table.html">Pricing table</a></li>
                                <li><a href="shortcode-toggles.html">Toggles</a></li>
                                <li><a href="shortcode-tabs.html">Tabs</a></li>
                                <li><a href="shortcode-testimonials.html">Testimonials</a></li>
                                <li><a href="shortcode-video.html">Video</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div>

                <!-- ETRA Nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="extra-cell">
                        <a href="javascript:;" class="wt-cart cart-btn dropdown-toggle" title="Your Cart" data-bs-toggle="dropdown">
                                    <span class="link-inner">
                                        <span class="woo-cart-total"> </span>
                                        <span class="woo-cart-count">
                                            <i class="fa fa-shopping-bag"></i>
                                            <span class="shopping-bag wcmenucart-count ">2</span>
                                        </span>
                                    </span>
                        </a>

                        <div class="dropdown-menu cart-dropdown-item-wraper">

                            <div class="nav-cart-content">

                                <div class="nav-cart-items p-a15">
                                    <div class="nav-cart-item clearfix">
                                        <div class="nav-cart-item-image">
                                            <a href="#"><img src="{{asset('/site/images/cart/pic-1.jpg')}}" alt="p-1"></a>
                                        </div>
                                        <div class="nav-cart-item-desc">
                                            <a href="#">Product One</a>
                                            <span class="nav-cart-item-price"><strong>2</strong> x $19.99</span>
                                            <a href="#" class="nav-cart-item-quantity radius-sm">x</a>
                                        </div>
                                    </div>
                                    <div class="nav-cart-item clearfix">
                                        <div class="nav-cart-item-image">
                                            <a href="#"><img src="{{asset('/site/images/cart/pic-2.jpg')}}" alt="p-2"></a>
                                        </div>
                                        <div class="nav-cart-item-desc">
                                            <a href="#">Product Two</a>
                                            <span class="nav-cart-item-price"><strong>1</strong> x $24.99</span>
                                            <a href="#" class="nav-cart-item-quantity radius-sm">x</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                    <h4  class="pull-left m-a0">Subtotal:</h4>
                                    <h5 class="pull-right m-a0">$67.97</h5>
                                </div>
                                <div class="nav-cart-action p-a15 p-b0 clearfix">
                                    <button class="site-button butt pull-left m-b15 " type="button">View Cart</button>
                                    <button class="site-button-secondry pull-right" type="button">Checkout </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                        <div class="input-group">
                            <input value="" name="q" type="search" placeholder="Type to search"/>
                            <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

</header>
<!-- HEADER END -->
