<title>My Profile | jollibee</title>
@include('partials.app')
<body class="page-template-template-contactpage">
<div id="page" class="hfeed site">
    @include('partials.header')

    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div id="primary" class="content-area" style="margin-top:10px;">
                <main id="main" class="site-main" >
                    <div class="pizzaro-order-steps">
                        <h1>My Profile</h1>
                    </div>
                    <div id="post-8" class="post-8 page type-page status-publish hentry">
                        <div class="col-sm-1"></div>
                        <div class="entry-content col-sm-10 reward">
                            <div style="padding: 50px">
                            <h3>My Rewards</h3>
                            <div class="col-lg-12 col-sm-12">
                                <h1 class="points" style="color: red"> AED 43 = 4333 pts</h1>
                            </div>
                            </div>

                            <form class="cart" method="POST" enctype="multipart/form-data" action="">
                                    {{csrf_field()}}
                            <div class="cart-content" style="padding: 50px;padding-top: -20px">
                            <h3>My Profile</h3><br>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                <input type="text" name="full_name" placeholder="Full Name" value="" class="form-control"/>
                                </div>
                                <div class="form-group">
                                <input type="text" name="mobile_no" placeholder="Mobile No" value="" class="form-control"/>
                                </div>
                                <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" value="" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 pad15">
                                <div class="form-group">
                                <input type="password" name="confirm_password" value="" placeholder="Confirm Password" class="form-control"/>
                                </div>
                                <div class="form-group">
                                <input type="password" name="updated_password" value="" placeholder="Updated Password" class="form-control"/>
                                </div>
                            </div>
                                <div class="col-sm-6 form-group center">
                                    <button type="submit" class="button_signup">Update</button>
                                </div>
                            </div>
                            </form>
<br><br><br>
                            <div  style="padding: 50px;">
                            <h3>My Payments</h3>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="col-lg-3 col-sm-6" style="padding-bottom: 20px">
                                    <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="images/visa.png" class="img-responsive" height="100px" width="100px"></a>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                    <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="images/mastercard.jpg" class="img-responsive"  height="100px" width="100px"></a>
                                    </div>
                                </div>
                             {{--   <div class="col-lg-6 col-sm-12 pad15">

                                </div>--}}
                            </div>

                        </div>
                        </div><!-- .entry-content -->
                        <div class="col-sm-1"></div>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .col-full -->
    </div><!-- #content -->
</div>

@include('partials.footer')