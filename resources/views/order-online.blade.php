<title>order-online | jollibee</title>
@include('partials.app')
    @include('partials.header')

 {{--

<div id="content" class="site-content" tabindex="-1">
<div class="col-full">
    <div class="pizzaro-sorting">
        @include('homepage.home-ads-block')
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
                                     --}}{{--       <div itemprop="description">
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
                                            </div>--}}{{--
                                        </a>
                                        <div class="hover-area" style="margin-top: 40px">
                                            <a rel="nofollow" data-toggle="modal" data-target="#exampleModalCenter" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart" style="background-color: #2ab27b;">Add to cart</a>
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
--}}{{--                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>--}}{{--
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
                        <li class="menu-item"><a href="">Best Sellers</a></li>
                        <li class="menu-item"><a href="">Deals & Promotions</a></li>
                        <li class="menu-item"><a href="">Value Meals</a></li>
                        <li class="menu-item"><a href="">Bucket Meals</a></li>
                        <li class="menu-item"><a href="">Combos</a></li>
                    </ul>
                </div>
            </div>
            <div id="search-2" class="widget widget_search">
                <form role="search" method="get" class="search-form" action="blog-single.html">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search Product" value="" name="s">
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
                                Price: <span class="from">AED 4</span> to <span class="to">AED 70</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="woocommerce_products-2" class="widget woocommerce widget_products">
                <span class="gamma widget-title">Best Deals</span>
                <ul class="product_list_widget">
                    @foreach($deals as $d)
                    <li>
                        <a href="{{ route('single-product',$d->productID) }}" title="Orange Juice">
                            <img width="180" height="180" src="images/products/{{$d->image}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="28">
                            <span class="product-title">{{$d->name}}</span>
                        </a>
                        <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED </span>{{$d->sale_price}}</span>
                           </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- #secondary -->
    </div>
    <!-- #primary -->
</div>
<!-- .col-full -->


--}}


<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        @include('components.pizzaro-sorting')
        <div id="secondary" class="widget-area col-md-3 col-sm-12" role="complementary">
            @include('layouts.search-widget')
            @include('layouts.widget-nav-menu')

        </div><!-- #secondary -->
        <div id="primary" class="content-area col-md-7 col-sm-12">
            <main id="main" class="site-main" >
                @include('components.products')
                @include('components.pagination')
            </main><!-- #main -->
        </div><!-- #primary -->
        <div class="col-md-2 col-sm-12">
            <div class="row cart-head">Your Cart</div>
            <div class="row cart-bx">
                <i class="fa fa-shopping-cart"></i><br/>
                @if (Cart::count() > 0)
                    <span class="count">{{Cart::instance('default')->count()}} item(s)</span> <span class="amount">{{ Cart::subtotal() }}</span>
                @else
                    There are no item in your cart
                @endif
            </div>
        </div><!-- #secondary -->
        <a href=""><img src="assets/images/chat.png" class="chat"></a>
    </div><!-- .col-full -->
</div>


@include('partials.footer')