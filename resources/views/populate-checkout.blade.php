<title>checkout | jollibee</title>
@include('partials.app')
<body class="woocommerce-checkout">
<div id="page" class="hfeed site">
    @include('partials.header')
<div id="content" class="site-content" tabindex="-1" >
<div class="col-full">
    <div class="pizzaro-breadcrumb">
        <nav class="woocommerce-breadcrumb" ><a href="home">Home</a>
            <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Checkout
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
            <div id="post-9" class="post-9 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="woocommerce">
                            <form name="checkout" id="checkout" class="checkout woocommerce-checkout" method="POST" enctype="multipart/form-data" action="{{route('order-received')}}">
                                {{csrf_field()}}
                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Customer Details</h3>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_first_name_field">
                                            <label for="billing_first_name" class="">Full Name </label>
                                            <input type="text" class="input-text " name="full_name" id="full_name"   autocomplete="given-name" value="{{$user[0]->full_name}}"  />
                                            @if ($errors->has('first_name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                                 </span>
                                            @endif
                                        </p>
                                     {{--   <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                            <label for="billing_last_name" class="">Last Name </label>
                                            <input type="text" class="input-text " name="last_name" id="last_name"   autocomplete="family-name" value="{{$user[0]->full_name}}"  />
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                                 </span>
                                            @endif
                                        </p>--}}
                                        <div class="clear"></div>
                                       {{-- <p class="form-row form-row form-row-wide" id="billing_company_field">
                                            <label for="billing_company" class="">Company Name</label>
                                            <input type="text" class="input-text " name="billing_company" id="billing_company"   autocomplete="organization" value=""  />
                                        </p>--}}
                                        <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                            <label for="billing_email" class="">Email Address </label>
                                            <input type="text" class="input-text " name="email" id="email"   autocomplete="email" value="{{$user[0]->email}}" />
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                            @endif
                                        </p>
                                        <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                            <label for="billing_phone" class="">Phone </label>
                                            <input type="text" class="input-text " name="phone" id="phone"   autocomplete="tel" value="{{$user[0]->mobile}}"  />
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                                 </span>
                                            @endif
                                        </p>
                                       {{-- <div class="clear"></div>
                                        <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
                                            <label for="billing_country" class="">Country </label>
                                            <input type="text" value=""  id="country" name="country" class="input-text ">
                                            @if ($errors->has('country'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('country') }}</strong>
                                                 </span>
                                            @endif
                                        </p>--}}
                                        <div class="clear"></div>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                            <label for="billing_address_1" class="">Address </label>
                                            <input type="text" class="input-text " name="address_1" id="address_1" placeholder="Street address"  autocomplete="address-line1" value="{{$user[0]->default_address}}"  />
                                            @if ($errors->has('address_1'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('address_1') }}</strong>
                                                 </span>
                                            @endif
                                        </p>
                                     {{--   <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                            <input type="text" class="input-text " name="villa_no" id="villa_no" placeholder="Villa No (Building)"  autocomplete="" value=""  />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                            <input type="text" class="input-text " name="address_2" id="address_2" placeholder="Apartment, suite, unit etc. (optional)"  autocomplete="address-line2" value=""  />
                                        </p>
                                        <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                            <label for="billing_city" class="">Town / City </label>
                                            <input type="text" class="input-text " name="city" id="city"   autocomplete="address-level2" value=""  />
                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                                 </span>
                                            @endif
                                        </p>--}}
                                    {{--    <p class="form-row form-row form-row-first address-field validate-required validate-state" id="billing_state_field">
                                            <label for="billing_state" class="">State / County </label>
                                            <input type="text" value=""  id="billing_state" name="billing_phone" class="input-text ">
                                        </p>
                                        <p class="form-row form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field">
                                            <label for="billing_postcode" class="">Postcode / ZIP </label>
                                            <input type="text" class="input-text " name="billing_postcode" id="billing_postcode"   autocomplete="postal-code" value="DFSAF@GMAIL.COM"  />
                                        </p>--}}
                                        <div class="clear"></div>
                                     {{--   <p class="form-row form-row-wide create-account">
                                            <input class="input-checkbox" id="createaccount"  type="checkbox" name="createaccount" value="1" />
                                            <label for="createaccount" class="checkbox">Create an account?</label>
                                        </p>
                                        <div id="create_account" class="create-account" hidden="true">
                                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <p class="form-row form-row validate-required" id="account_password_field">
                                                <label for="account_password" class="">Account password </label>
                                                <input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password"   value=""  />
                                            </p>
                                            <div class="clear"></div>
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields">
                                        <h3>Additional Information</h3>
                                        <p class="form-row form-row notes" id="order_comments_field">
                                            <label for="order_comments" class="">Order Notes</label>
                                            <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."    rows="2" cols="5"></textarea>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3 id="order_review_heading">Your order</h3>
                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                   @foreach(Cart::content() as $item)
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{ $item->model->name }}&nbsp;<strong class="product-quantity">&times; {{ $item->qty }}</strong>
                                            <dl class="variation">
                                                <dt class="variation-Baseprice">Base price:</dt>
                                                <dd class="variation-Baseprice">
                                                    <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED</span> {{ $item->model->sale_price }}</span></p>
                                                </dd>
                                            {{--    <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
                                                </dt>
                                                <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                    <p>29  cm</p>
                                                </dd>--}}
                                            </dl>
                                        </td>
                                        <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">AED</span> {{ $item->model->sale_price * $item->qty}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                               {{--     <tr class="cart_item">
                                        <td class="product-name">
                                            Pepperoni Pizza&nbsp;<strong class="product-quantity">&times; 1</strong>
                                            <dl class="variation">
                                                <dt class="variation-Baseprice">Base price:</dt>
                                                <dd class="variation-Baseprice">
                                                    <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
                                                </dd>
                                                <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):</dt>
                                                <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                    <p>29  cm</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
                                        </td>
                                    </tr>--}}

                                    </tbody>
                                    <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">AED</span> {{ Cart::subtotal() }}</span>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Tax(5%)</th>
                                        <td>
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">AED</span> {{ Cart::tax() }}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">AED</span> {{ Cart::total() }}</span></strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div id="payment" class="woocommerce-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        {{--<li class="wc_payment_method payment_method_bacs">
                                            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"  checked='checked' data-order_button_text="" />
                                            <label for="payment_method_bacs">Direct Bank Transfer</label>
                                            <div class="payment_box payment_method_bacs" >
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won&#8217;t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"  data-order_button_text="" />
                                            <label for="payment_method_cheque">Check Payments  </label>
                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </li>--}}
                                        <li class="wc_payment_method payment_method_cod">
                                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="Cash on delivery"  data-order_button_text="" />
                                            <label for="payment_method_cod">Cash on Delivery   </label>
                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="Card on delivery"  data-order_button_text="" />
                                            <label for="payment_method_cheque">Card on Delivery  </label>
                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </li>
                                       {{-- <li class="wc_payment_method payment_method_paypal">
                                            <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal"  data-order_button_text="Proceed to PayPal" />
                                            <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"/>
                                                <a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/us/webapps/mpp/paypal-popup"   >What is PayPal?</a>  </label>
                                            <div class="payment_box payment_method_paypal" style="display:none;">
                                                <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account.</p>
                                            </div>
                                        </li>--}}
                                    </ul>
                                    <div class="form-row place-order">
                                        <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>
                                            <input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" />
                                        </noscript>
                                     {{--   <p class="form-row terms wc-terms-and-conditions">
                                            <input type="checkbox" class="input-checkbox" name="terms"  id="terms" />
                                            <label for="terms" class="checkbox">I&rsquo;ve read and accept the <a href="terms-and-conditions.html" target="_blank">terms &amp; conditions</a> <span class="required">*</span></label>
                                            <input type="hidden" name="terms-field" value="1" />
                                        </p>--}}
                                        <button type="submit" class="button alt" style="text-align: center;">Place order</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- .entry-content -->
            </div>
            <!-- #post-## -->
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
</div>
<!-- .col-full -->
</div>
</div>
@include('partials.footer')

<script>
    $(document).ready(function(){
        $('#createaccount').change(function(){
            if(this.checked)
                $('#create_account').fadeIn('slow');
            else
                $('#create_account').fadeOut('slow');

        });
    });
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js', '#checkout')}}"></script>