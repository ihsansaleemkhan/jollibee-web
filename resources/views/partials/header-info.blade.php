<div class="header-info-wrapper header-mrg">
    <div class="header-phone-numbers">
        <div class="phonep1">
            <span class="intro-text">Call and Order in</span>
            <span id="city-phone-number-label" class="phone-number">600 587000</span>
        </div>
        <div class="phonep2">
            <a data-toggle="modal" data-target="#location" {{--href="{{route('order-online')}}"--}}>Order Online</a>
        </div>
    </div>

    <ul class="site-header-cart-v2 menu">
        @guest()
            <li class="header-signup"><a href="" data-toggle="modal" data-target=".bd-example-modal-sm">Sign in / Sign Up</a></li>
        @else
            <li class="dropdown header-signup">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->full_name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
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

