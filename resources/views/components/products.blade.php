<div class="col-sm-12">
				<div class="row">

					@foreach($products as $p)
					<div class="col-sm-4 fd_item">
						<div class="row">
                            <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="{{$p['FullImagePath']}}" class="img-responsive"></a>
						</div>
						<div class="row">
                            <a{{-- href="{{ route('single-product',$p->productID) }}"--}}><p></p></a>
									<span class="price">AED {{$p['Price1']}}</span>
							<br/>
							<div class="hover-area">
				                <a href="" {{--data-toggle="modal" data-target="#exampleModalCenter"--}}  rel="nofollow" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
				            </div>
						</div>
					</div>
					@endforeach
				</div>
</div>