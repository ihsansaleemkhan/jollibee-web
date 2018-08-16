<title>order-online | jollibee</title>
@include('partials.app')
    @include('partials.header')

<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div id="secondary" class="widget-area col-md-3 col-sm-12" role="complementary">
            @include('layouts.search-widget')
            @include('layouts.widget-nav-menu')

        </div><!-- #secondary -->
        <div id="primary" class="content-area col-md-6 col-sm-12">
            <main id="main" class="site-main" >
                @include('components.products')
                @include('components.pagination')
            </main><!-- #main -->
        </div><!-- #primary -->
        <div class="col-md-3 col-sm-12">
            <div class="row cart-head">Your Cart</div>

            <div class="row cart-bx" id="cart-bx">
            @if (Cart::count() > 0)
                <!-- <i class="fa fa-shopping-cart"></i><br/>
                There are no item in your cart -->

                <div id="crt_tbl">
                    <table class="table table-hover table-striped">
                        @foreach(Cart::content() as $item)
                        <tr>
                            <td>
                                <div class="quantity" >
                                    <input type="number" id="cart-bxqun" value="{{ $item->qty }}" title="Qty" class="input-text qty text"/>
                                </div>
                            </td>
                            <td>{{ $item->model->name }}</td>
                            <td>{{ $item->model->sale_price * $item->qty  }}</td>
                            <td>
                                <a data-method="delete" style="cursor:pointer;" onclick="$(this).find('form').submit();"><i class="fa fa-minus-circle mins"></i>
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST" name="delete_item" style="display:none">
                                    {{ method_field('DELETE') }}
                                   {{ csrf_field() }}
                                    </form>
                                </a>
                             {{--   <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                    {{csrf_field() }}
                                    {{ method_field('DELETE') }}--}}
                            {{--    <a href="{{ route('cart.destroy', $item->rowId) }}" data-method="delete" name="delete_item"><i class="fa fa-minus-circle mins"></i></a>--}}
                           {{--     </form>--}}
                            </td>
                        </tr>
                       @endforeach
                    </table>
                </div>
                <table class="table">
                    <tr>
                        <td>Subtotal</td>
                        <td>{{ Cart::subtotal() }}</td>
                    </tr>
                    <tr>
                        <th>TOTAL AMOUNT</th>
                        <th>{{ Cart::total() }}</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="{{ route('checkout.index') }}" style="width: 100%;" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                        </td>
                    </tr>
                </table>
                @else
                    There are no item in your cart
                @endif
            </div>

        </div><!-- #secondary -->
        <a href=""><img src="assets/images/chat.png" class="chat"></a>
    </div><!-- .col-full -->
</div>

<script>
$('[data-method]').append(function(){
return "\n"+
"<form action='"+$(this).attr('href')+"' method='POST' name='delete_item' style='display:none'>\n"+
"   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
"   <input type='hidden' name='_token' value='"+$('meta[name="_token"]').attr('content')+"'>\n"+
"</form>\n"
})
.removeAttr('href')
.attr('style','cursor:pointer;')
.attr('onclick','$(this).find("form").submit();');

/*
Generic are you sure dialog
*/
$('form[name=delete_item]').submit(function(){
return confirm("Are you sure you want to delete this item?");
});
</script>
@include('partials.footer')