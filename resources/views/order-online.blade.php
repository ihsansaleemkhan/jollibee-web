<title>order-online | jollibee</title>
@include('partials.app')
<body class="columns-3 archive woocommerce-page left-sidebar lite">
<div id="page" class="hfeed site">
    @include('partials.header')
<div id="content" class="site-content" tabindex="-1">
<div class="col-full">
    <div class="pizzaro-sorting">
        <div class="food-type-filter">
            <div class="clear-food-type-filter chosen"><a href="#">Show All</a>
            </div>
            <div class="widget woocommerce widget_layered_nav">
                <ul>
                    <li class="wc-layered-nav-term "><a href="#">Meat</a> <span class="food-type-icon"><i class="fa fa-cutlery"></i></span></li>
                    <li class="wc-layered-nav-term "><a href="#">Spicy</a> <span class="food-type-icon"><i class="fa fa-fire"></i></span></li>
                    <li class="wc-layered-nav-term "><a href="#">Veg</a> <span class="food-type-icon"><i class="po po-veggie-icon"></i></span></li>
                </ul>
            </div>
            <div class="create-your-own"><a href="single-product-v3.html">Create your own</a></div>
        </div>
    </div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="columns-3">
                    <ul class="products">
                        @foreach($products as $p)
                        <li class="product">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <div class="product-image-wrapper">
                                        <a href="{{ route('single-product',$p->productID) }}" class="woocommerce-LoopProduct-link">
                                            <img src="images/products/{{$p->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <a href="{{ route('single-product',$p->productID) }}" class="woocommerce-LoopProduct-link">
                                            <h3>{{$p->name}}</h3>
                                            <div >
                                                <span class="" style="margin: 30px;color: #ffae00;font-size: larger;font-family: Arial;">AED {{$p->sale_price}}</span>
                                            </div>
                                     {{--       <div itemprop="description">
                                                <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                            </div>
                                            <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                    <h3><span>Pick Size</span></h3>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">

                                                        <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                        <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                    </div>
                                                    <div class="ywapo_input_container ywapo_input_container_radio">

                                                        <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                        <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </a>
                                        <div class="hover-area" style="margin-top: 40px">
                                            <a rel="nofollow" href="{{ route('single-product',$p->productID) }}" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" style="background-color: #2ab27b;">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.product-outer -->
                        </li>
                        @endforeach
                    </ul>
                </div>
                <nav class="woocommerce-pagination">
                    <ul class="page-numbers">
                        {{$products->links()}}
{{--                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>--}}
                    </ul>
                </nav>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
        <div id="secondary" class="widget-area" role="complementary">
            <div id="nav_menu-2" class="widget widget_nav_menu">
                <div class="menu-food-menu-container">
                    <ul id="menu-food-menu-2" class="menu">
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-pizza"></i>Pizza</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-burger"></i>Burgers</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-salads"></i>Salads</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-tacos"></i>Tacos</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-wraps"></i>Wraps</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-fries"></i>Fries</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-salads"></i>Salads</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-drinks"></i>Drinks</a></li>
                    </ul>
                </div>
            </div>
            <div id="search-2" class="widget widget_search">
                <form role="search" method="get" class="search-form" action="blog-single.html">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
            </div>
            <div id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter">
                <span class="gamma widget-title">Filter by price</span>
                <form method="get" action="#">
                    <div class="price_slider_wrapper">
                        <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                        </div>
                        <div class="price_slider_amount">


                            <button type="submit" class="button">Filter</button>
                            <div class="price_label" style="">
                                Price: <span class="from">$1</span> — <span class="to">$59</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="woocommerce_products-2" class="widget woocommerce widget_products">
                <span class="gamma widget-title">Best Deals</span>
                <ul class="product_list_widget">
                    <li>
                        <a href="#" title="Orange Juice">
                            <img width="180" height="180" src="assets/images/blog/sidebar-product-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="28">
                            <span class="product-title">Orange Juice</span>
                        </a>
                        <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1.90</span>
                           </span>
                    </li>
                    <li>
                        <a href="#" title="Cola Bottle">
                            <img width="180" height="180" src="assets/images/blog/sidebar-product-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="22">
                            <span class="product-title">Cola Bottle</span>
                        </a>
                        <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>2.90</span>
                           </span>
                    </li>
                    <li>
                        <a href="#" title="Hawaii Vegetarian Pizza">
                            <img width="180" height="180" src="assets/images/blog/sidebar-product-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="13">
                            <span class="product-title">Hawaii Vegetarian Pizza</span>
                        </a>
                        <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>39.80</span>–<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>59.90</span>
                           </span>
                    </li>
                    <li>
                        <a href="#" title="Grand Italiano">
                            <img width="180" height="180" src="assets/images/blog/sidebar-product-4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="2">
                            <span class="product-title">Grand Italiano</span>
                        </a>
                        <span class="widget-price">
                           <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22.90</span></del>
                           <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19.90</span></ins>
                           </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- #secondary -->
    </div>
    <!-- #primary -->
</div>
<!-- .col-full -->
</div>
</div>
@include('partials.footer')