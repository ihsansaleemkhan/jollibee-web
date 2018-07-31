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
                <li>
                    @if (Cart::count() > 0)
                        <a href="{{route('cart')}}" title="View your shopping cart">    </a>
                        <span class="count">{{Cart::instance('default')->count()}} item(s)</span> <span class="amount"></span>
                    @else
                        <span class="count">No item(s)</span>
                    @endif
                </li>
            </ul>
        </li>
    </ul>
</div>

