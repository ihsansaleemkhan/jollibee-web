
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
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Mobile Number" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="recipient-name">
                    </div>
                </form>

                <button type="button" class="btn btn-danger btn-block">Sign Up</button>
                <br/>
                <a href="{{ url('login/facebook') }}" type="button" class="btn btn-info  btn-block">Sign in with facebook</a>
                <a href="{{ url('login/google') }}" type="button" class="btn btn-primary  btn-block">Sign in with google</a>


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
                <form>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="recipient-name">
                    </div>

                </form>

                <button type="button" class="btn btn-danger btn-block">Sign In</button>

                <br/>
                <a href="{{ url('login/facebook') }}" type="button" class="btn btn-info  btn-block">Sign in with facebook</a>
                <a href="{{ url('login/google') }}" type="button" class="btn btn-primary  btn-block">Sign in with google</a>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light">Create Account</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example1">SELECT LOCATION</h5>
                <h5 class="modal-title" id="example2" style="display:none;">SELECT SIDES</h5>
                <h5 class="modal-title" id="example3" style="display:none;">SELECT BEVERAGE</h5>
                <h5 class="modal-title" id="example4" style="display:none;">SELECT DESSERTS</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row" id="bd1">
                        <div class="form-group col-sm-6">
                            <label class="col-sm-7">Select Location</label>
                            <select class="col-sm-5 form-control">
                                <option>City</option>

                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Area">
                        </div>
                    </div>
                    <div class="col-sm-12" id="bd2" style="display: none;">
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/sauce.jpg">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Mushroom Sauce</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/sauce.jpg">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Mushroom Sauce</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/sauce.jpg">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Mushroom Sauce</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" id="bd3" style="display: none;">
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/coke.png">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Coke</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/coke.png">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Coke</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/coke.png">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Coke</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" id="bd4" style="display: none;">
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/ice.jpg">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Ice Cream</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/ice.jpg">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Ice Cream</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12 cartpopimg">
                                <img src="assets/images/ice.jpg">
                            </div>
                            <div class="col-sm-12 cartpophh5">
                                <h5>Ice Cream</h5>
                                <input type="number" value="1" title="Qty" class="input-text qty text popqty">
                                <br/>
                                <button type="button" class="btn btn-warning btn-block">Select</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row" id="btn1">
                    <button type="button" id="nxt1" class="btn btn-secondary">Next</button>
                </div>
                <div class="row" id="btn2" style="display: none;">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <button type="button" data-dismiss="modal" class="btn btn-dark btn-block">Skip</button>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" id="bk1" class="btn btn-dark btn-block">Back</button>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" id="nxt2" class="btn btn-secondary btn-block">Next</button>
                        </div>
                    </div>
                </div>

                <div class="row" id="btn3" style="display: none;">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <button type="button" data-dismiss="modal" class="btn btn-dark btn-block">Skip</button>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" id="bk2" class="btn btn-dark btn-block">Back</button>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" id="nxt3" class="btn btn-secondary btn-block">Next</button>
                        </div>
                    </div>
                </div>

                <div class="row" id="btn4" style="display: none;">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <button type="button" data-dismiss="modal" class="btn btn-dark btn-block">Skip</button>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" id="bk3" class="btn btn-dark btn-block">Back</button>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" id="nxt4" class="btn btn-secondary btn-block">Next</button>
                        </div>
                    </div>
                </div>
            </div>
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
                        <li><a href="">Store Locator</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Contact Us</a></li>
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
<!-- #colophon -->
</div>

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
    });
</script>

</body>
</html>