<div class="bg_yellow">
    <div class="container">
        <div class="col-sm-4 col-xs-12">
            <h3>Subscribe for latest Updates </h3>
        </div>
        <div class="col-sm-3 col-xs-12">
            <input type="text" placeholder="Enter Mobile Number" class="form-control">
        </div>
        <div class="col-sm-2 col-xs-12">
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
                        <li><a href="{{route('story')}}">Our Story</a></li>
                        <li><a href="{{route('store-locator')}}">Store Locator</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="{{route('contact-us')}}">Talk to Us</a></li>
                        <li><a href="">Careers</a></li>

                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>Media</h4>
                    <ul>
                        <li><a href="{{route('news')}}">News & Events</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>Social</h4>
                    <ul class="sociallin">
                        <li><a href="https://www.instagram.com/jollibeeuae/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/JollibeeUAE/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCRHmoE7PyZ3VtUStiW9V3sg"><i class="fa fa-play"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/jollibee-uae/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <h4 class="down">Download Our App</h4>
                <div class="col-sm-6 col-xs-6">
                    <a href="#"><img src="assets/images/p1.png" class="img-lg"></a>
                </div>
                <div class="col-sm-6 col-xs-6">
                    <a href="#"><img src="assets/images/p2.png" class="img-lg"></a>
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
