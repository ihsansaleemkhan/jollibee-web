<title>Favourites | jollibee</title>
@include('partials.app')
<body class="page-template-template-contactpage">
<div id="page" class="hfeed site">
    @include('partials.header')

    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">


            <div id="primary" class="content-area" style="margin-top:10px;">
                <main id="main" class="site-main" >
                    <div class="pizzaro-order-steps">
                        <h1>Favourites</h1>
                    </div>

                    <div class="col-sm-4 fd_item">
                        <div class="row">
                            <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="images/products/Breakfast Yumburger.png" class="img-responsive"></a>
                        </div>
                        <div class="row">
                            <a{{-- href="{{ route('single-product',$p->productID) }}"--}}><p>Breakfast Yumburger</p></a>
                            <button type="submit" data-toggle="modal" data-target="#selectSizeModal" rel="nofollow" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">AED 15</button>
                        </div>
                    </div>
                    <div class="col-sm-4 fd_item">
                        <div class="row">
                            <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="images/products/Breakfast Yumburger.png" class="img-responsive"></a>
                        </div>
                        <div class="row">
                            <a{{-- href="{{ route('single-product',$p->productID) }}"--}}><p>Breakfast Yumburger</p></a>
                            <button type="submit" data-toggle="modal" data-target="#selectSizeModal" rel="nofollow" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">AED 15</button>
                        </div>
                    </div>
                    <div class="col-sm-4 fd_item">
                        <div class="row">
                            <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="images/products/Breakfast Yumburger.png" class="img-responsive"></a>
                        </div>
                        <div class="row">
                            <a{{-- href="{{ route('single-product',$p->productID) }}"--}}><p>Breakfast Yumburger</p></a>
                            <button type="submit" data-toggle="modal" data-target="#selectSizeModal" rel="nofollow" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">AED 15</button>
                        </div>
                    </div>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .col-full -->
    </div><!-- #content -->
</div>

@include('partials.footer')