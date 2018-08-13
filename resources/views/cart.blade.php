<title>order-online | jollibee</title>
@include('partials.app')
<body class="woocommerce-cart">
<div id="page" class="hfeed site">
    @include('partials.header')
<div id="content" class="site-content" tabindex="-1" >
<div class="col-full">
    <div class="pizzaro-breadcrumb">
        <nav class="woocommerce-breadcrumb" >
            <a href="home">Home</a>
            <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Cart
        </nav>
    </div>
    <!-- .woocommerce-breadcrumb -->
    <div id="primary" class="content-area">
        <main id="main" class="site-main" >
            <div class="pizzaro-order-steps">
                <ul>
                    <li class="cart">
                        <span class="step">1</span>Shopping Cart
                    </li>
                    <li class="checkout">
                        <span class="step">2</span>Checkout
                    </li>
                    <li class="complete">
                        <span class="step">3</span>Order Complete
                    </li>
                </ul>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif


            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif


            @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif


            @if ($message = Session::get('info'))
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (Cart::count() > 0)
            <div id="post-8" class="post-8 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="woocommerce">
                            <table class="shop_table shop_table_responsive cart" >
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $item)
                                <tr class="cart_item">
                                    <td class="product-remove">
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        {{csrf_field() }}
                                        {{ method_field('DELETE') }}

                                            <button type="submit" class="remove" style="background-color: white;color:black" >&times;</button>
                             {{--               <a href="#" class="remove" >&times;</a>--}}
                                        </form>.
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="{{ route('single-product',$item->model->productID) }}">
                                            <img width="180" height="180" src="images/products/{{ $item->model->image }}" alt=""/>
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="{{ route('single-product',$item->model->productID) }}">{{ $item->model->name }}</a>
                                        <dl class="variation">
                                            <dt class="variation-Baseprice">Base price:</dt>
                                            <dd class="variation-Baseprice">
                                                <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED </span>{{ $item->model->sale_price }}</span></p>
                                            </dd>
                                         {{--   <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
                                            </dt>
                                            <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                <p>29  cm</p>
                                            </dd>--}}
                                        </dl>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED </span>{{ $item->model->sale_price }}</span>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="qty-btn">
                                            <label>Quantity</label>
                                            <div class="quantity">
                                                <input type="number" value="{{ $item->qty }}" title="Qty" class="input-text qty text"/>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED </span>{{ $item->model->sale_price * $item->qty  }}</span>
                                    </td>
                                </tr>
                                @endforeach
                          {{--      <tr class="cart_item">
                                    <td class="product-remove">
                                        <a href="#" class="remove">&times;</a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="single-product-v1.html">
                                            <img width="180" height="180" src="assets/images/products/2.jpg" alt="" />
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product-v1.html">Pepperoni Pizza</a>
                                        <dl class="variation">
                                            <dt class="variation-Baseprice">Base price:</dt>
                                            <dd class="variation-Baseprice">
                                                <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
                                            </dd>
                                            <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
                                            </dt>
                                            <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                <p>29  cm</p>
                                            </dd>
                                        </dl>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="qty-btn">
                                            <label>Quantity</label>
                                            <div class="quantity">
                                                <input type="number"  value="1" title="Qty" class="input-text qty text" size="4" />
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
                                    </td>
                                </tr>--}}
                                <form class="cart" method="POST" enctype="multipart/form-data" action="{{url('checkout')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" class="form-control" value="id" id="productID" name="productID">
                                    <input type="hidden" class="form-control" value="name" id="name" name="name">
                                    <input type="hidden" class="form-control" value="price" id="sale_price" name="sale_price">
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" name="promo_code" class="input-text" id="promo_code" value="" placeholder="Promo code" />
                                            <input type="submit" class="button" name="apply_promo" value="Apply Promo" />
                                        </div>
                                        <input type="submit" class="button" name="update_cart" value="Update Cart" />
                                        <div class="wc-proceed-to-checkout">
                                            <a href="{{ route('checkout.index') }}" type="submit" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                        </div>
                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="21ca9d92f8" /><input type="hidden" name="_wp_http_referer" value="/pizzaro/cart/" />
                                    </td>
                                </tr>
                                </form>
                                </tbody>
                            </table>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>
                                <table  class="shop_table shop_table_responsive">
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED </span>{{ Cart::subtotal() }}</span>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Tax(5%)</th>
                                        <td data-title="tax">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED </span>{{ Cart::tax() }}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total">
                                            <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED </span></span>{{ Cart::total() }}</strong>
                                        </td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <h1>No Item(s) In your Shopping Cart</h1>
                <a href="{{route('order-online')}}" class="button">Continue Shopping</a>
            @endif
            <!-- .entry-content -->
        </main><!-- #main -->
    </div>
    <!-- #post-## -->

</div>
<!-- #primary -->
</div>
</div>
@include('partials.footer')