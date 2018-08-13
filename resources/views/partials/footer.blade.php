<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="assets/images/jollibee.png" class="modal_img">
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" id="full_name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Mobile Number" id="mobile" name="mobile" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Sign Up</button>
                </form>
                <br/>
                <button type="button" class="btn btn-info  btn-block">Sign in with facebook</button>
                <button type="button" class="btn btn-primary  btn-block">Sign in with google</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light btn-signin" data-toggle="modal" data-target=".bd-ex-modal-sm">Sign In</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-ex-modal-sm" tabindex="-1" role="dialog" aria-labelledby="SmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="assets/images/jollibee.png" class="modal_img">
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Sign In</button>
                </form>

                <br/>
                <button type="button" class="btn btn-info  btn-block">Sign in with facebook</button>
                <button type="button" class="btn btn-primary  btn-block">Sign in with google</button>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light">Create Account</button>
            </div>
        </div>
    </div>
</div>



<div class="bg_yellow">
    <div class="container">
        <div class="col-sm-4 col-xs-12">
            <h3>Subscribe for latest updates and new promotions </h3>
        </div>
        <div class="col-sm-3 col-xs-8">
            <input type="text" placeholder="Enter Mobile Number" class="form-control">
        </div>
        <!-- <div class="col-sm-6 col-xs-12">
          <div class="col-sm-6 col-xs-12">
            <input type="text" placeholder="Enter Email Address" class="form-control">
          </div>
          <div class="col-sm-6 col-xs-12">
            <input type="text" placeholder="Enter Mobile Number" class="form-control">
          </div>
          <div class="col-sm-12 col-xs-12">
            <br/>
            <span class="footer-order">Call and Order in</span> &nbsp;&nbsp;&nbsp;
            <span class="footer-num">600 587000</span>
          </div>
        </div> -->
        <div class="col-sm-2 col-xs-4">
            <button class="button_signup">Sign up</button>
        </div>
        <div class="col-sm-3 col-xs-12">
            <span class="footer-num"><i class="fa fa-phone"></i> 600 587000</span>
        </div>
    </div>
</div>
<div id="top_footer" class="top-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-12">
                <img src="assets/images/jollibee.png" class="jollimg">
            </div>
            <div class="col-sm-7 col-xs-12">
                <div class="col-sm-3 col-xs-12">
                    <h4>About</h4>
                    <ul>
                        <li><a href="">Our Story</a></li>
                        <li><a href="{{route('store-locator')}}">Store Locator</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Complaints & Feedback</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>Media</h4>
                    <ul>
                        <li><a href="">News & Events</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>Social</h4>
                    <ul class="sociallin">
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-play"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <h4 class="down">Download Our App</h4>
                <div class="col-sm-6">
                    <a href="#"><img src="assets/images/p1.png"></a>
                </div>
                <div class="col-sm-6">
                    <a href="#"><img src="assets/images/p2.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="colophon" class="site-footer footer-v1" >
    <div class="col-full">

        <p class="p">Jollibee Middle East</p>
        <p class="fl-rght">Designed by <a href="http://bezingo.com">Bezingo Media</a></p>
        @include('partials.handheld-footer-bar')

    </div><!-- .col-full -->
</footer><!-- #colophon -->

<script src="js/ajax.js"> </script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/tether.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/social.share.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/scripts.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vm-carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script type="text/javascript">

    jQuery(function($){

        $('.vmcarousel-centered-infitine').vmcarousel({
            centered: true,
            start_item: 1,
            autoplay: false,
            infinite: true
        });

    });


    $(document).ready(function(){
        $(".btn-signin").click(function(){
            $('.bd-example-modal-sm').hide();
        });

        $("#nxt1").click(function(){
            $('#example1').hide();
            $('#example2').show();
            $('#bd1').hide();
            $('#bd2').show();
            $('#btn1').hide();
            $('#btn2').show();
        });

        $("#bk1").click(function(){
            $('#example1').show();
            $('#example2').hide();
            $('#bd1').show();
            $('#bd2').hide();
            $('#btn1').show();
            $('#btn2').hide();
        });

        $("#nxt2").click(function(){
            $('#example1').hide();
            $('#example2').hide();
            $('#example3').show();
            $('#bd1').hide();
            $('#bd2').hide();
            $('#bd3').show();
            $('#btn1').hide();
            $('#btn2').hide();
            $('#btn3').show();
        });

        $("#bk2").click(function(){
            $('#example2').show();
            $('#example1').hide();
            $('#example3').hide();
            $('#bd2').show();
            $('#bd1').hide();
            $('#bd3').hide();
            $('#btn2').show();
            $('#btn1').hide();
            $('#btn3').hide();
        });

        $("#nxt3").click(function(){
            $('#example1').hide();
            $('#example2').hide();
            $('#example3').hide();
            $('#example4').show();
            $('#bd1').hide();
            $('#bd2').hide();
            $('#bd3').hide();
            $('#bd4').show();
            $('#btn1').hide();
            $('#btn2').hide();
            $('#btn3').hide();
            $('#btn4').show();
        });

        $("#bk3").click(function(){
            $('#example3').show();
            $('#example1').hide();
            $('#example4').hide();
            $('#example2').hide();
            $('#bd3').show();
            $('#bd1').hide();
            $('#bd4').hide();
            $('#bd2').hide();
            $('#btn3').show();
            $('#btn1').hide();
            $('#btn2').hide();
            $('#btn4').hide();
        });

        $(".v1_search").click(function(){
            $('#search_bar').toggle(500);
        });
    });
</script>

</body>
</html>
