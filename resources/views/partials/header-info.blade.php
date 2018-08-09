{{--
<div class="header-info-wrapper header-mrg">
    <div class="header-phone-numbers">
        <div class="v1_inputbar">
            <input type="text" id="search_bar" placeholder="Search for.." class="form-control" style="display: none">
        </div>
        <span class="v1_search"><i class="fa fa-search"></i></span>
    </div>

    <ul class="site-header-cart-v2 menu">
        <li class="header-signup"><a href="" data-toggle="modal" data-target=".bd-example-modal-sm">Sign in / Sign Up</a></li>
        <li class="cart-content ">
            <a href="{{route('cart')}}" title="View your shopping cart">
                <i class="po po-scooter"></i>
                <span>Your Bag</span>
            </a>
            <ul class="sub-menu">
                <li class="menu-item menu-item-has-children">
                    @if (Cart::count() > 0)
                        <a href="{{route('cart')}}" title="View your shopping cart"></a>
                        <span class="count">{{Cart::instance('default')->count()}} item(s)</span> <span class="amount"></span>
                    @else
                        <span class="count">No item(s)</span>
                    @endif
                </li>
            </ul>
        </li>
    </ul>
</div>
--}}


{{--<div class="header-info-wrapper header-mrg">
    <div class="header-phone-numbers">
        <div class="v1_inputbar">
            <input type="text" id="search_bar" placeholder="Search for.." class="form-control" style="display: none">
        </div>
        <span class="v1_search"><i class="fa fa-search"></i></span>
    </div>

    <ul class="site-header-cart-v2 menu">
        <li class="header-signup"><a href="" data-toggle="modal" data-target=".bd-example-modal-sm">Sign in / Sign Up</a></li>
        <li class="cart-content ">
            <a data-toggle="modal" href="{{route('cart')}}" title="View your shopping cart">
                <i class="po po-scooter"></i>
                <span>Your Bag</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('cart')}}" title="View your shopping cart">
                        @if (Cart::count() > 0)
                            <span class="count">{{Cart::instance('default')->count()}} item(s)</span> <span class="amount">{{ Cart::subtotal() }}</span>
                        @else
                            <span class="count">No item(s)</span>
                        @endif
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>--}}


<div class="header-info-wrapper header-mrg">
    <div class="header-phone-numbers">
        <div class="phonep1">
            <span class="intro-text">Call and Order in</span>
            <span id="city-phone-number-label" class="phone-number">600 587000</span>
        </div>
        <div class="phonep2">
            <a href="{{route('order-online')}}">Order Online</a>
        </div>
    </div>

    <ul class="site-header-cart-v2 menu">
        <li class="header-signup"><a href="" data-toggle="modal" data-target=".bd-example-modal-sm">Sign in / Sign Up</a></li>
        <li class="cart-content ">
            <a href="{{route('cart')}}" title="View your shopping cart">
                <i class="fa fa-shopping-cart"></i>
                <span>Your Cart</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('cart')}}" title="View your shopping cart">
                        @if (Cart::count() > 0)
                            <span class="count">{{Cart::instance('default')->count()}} item(s)</span> <span class="amount">{{ Cart::subtotal() }}</span>
                        @else
                            <span class="count">No item(s)</span>
                        @endif
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example1">SELECT LOCATION</h5>
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
                </form>
            </div>
            <div class="modal-footer">
                <div class="row" id="btn1" style="margin-right: 2px">
                    <a href="{{route('order-online')}}" style="background-color: green;" class="btn btn-secondary">Next</a>
                </div>
            </div>
        </div>
    </div>
</div>

