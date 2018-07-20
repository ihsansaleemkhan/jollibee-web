<title>order-online | jollibee</title>
@include('partials.app')
<body class="full-width grid-view columns-3 archive woocommerce-page">
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
    <div id="primary" class="content-area" style="margin-top: 100px">
        <main id="main" class="site-main" >
            <div class="columns-3">
                <ul class="products">

                    @foreach($products as $p)
                    <li class="product last">
                        <div class="product-outer">
                            <div class="product-inner">
                                <div class="product-image-wrapper">
                                    <a href="{{ route('single-product',$p->productID) }}" class="woocommerce-LoopProduct-link">
                                        <img src="images/products/{{$p->image}}" class="img-responsive" alt="" style="width: 400px;height: 400px">
                                    </a>
                                </div>
                                <div class="product-content-wrapper">
                                    <a href="{{ route('single-product',$p->productID) }}" class="woocommerce-LoopProduct-link">
                                        <h3>{{$p->name}}</h3>
                                        <div itemprop="description">
                                            <p style="max-height: none;">{{$p->description}}</p>
                                        </div>
                                        <div  class="yith_wapo_groups_container">
                                            <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                <h3><span>Pick Size</span></h3>
                                                <div class="ywapo_input_container ywapo_input_container_radio">

                                                    <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                    <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$p->sale_price}}</span></span>
                                                </div>
                                                <div class="ywapo_input_container ywapo_input_container_radio">

                                                    <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                    <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="hover-area">
                                        <a rel="nofollow" href="{{ route('single-product',$p->productID) }}" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
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
                    <li><span class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="#">2</a></li>
                    <li><a class="page-numbers" href="#">3</a></li>
                    <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>
                </ul>
            </nav>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
</div>
<!-- .col-full -->
</div>
</div>
@include('partials.footer')