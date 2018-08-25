<div class="col-sm-12">
				<div class="row">

					@foreach($products as $p)


						<!-- Modal -->
							<div class="modal fade" id="selectSizeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Select Sizes</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<input type="checkbox" name="normal" value="normal">Normal<br>
											<input type="checkbox" name="large" value="large" checked>Large<br>
											<input type="checkbox" name="ex_large" value="ex_large" checked>Extra Large<br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Select</button>
										</div>
									</div>
								</div>
							</div>

					<div class="col-sm-4 fd_item" style="height: 300px;">
						<div class="row">
                            <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="{{$p['FullImagePath']}}" class="img-responsive"></a>
						</div>
						<div class="row">
                            <a{{-- href="{{ route('single-product',$p->productID) }}"--}}><p></p></a>
							<p>{{$p['LargeDes']}}</p>
							<span class="price">AED {{$p['Price1']}}</span>
							<br/>
							<div class="hover-area">
								<form class="cart" method="POST" enctype="multipart/form-data" action="{{route('cart.store')}}">
									{{csrf_field()}}
									<input type="hidden" class="form-control" value="{{$p['MenuCode']}}" id="productID" name="productID">
									<input type="hidden" class="form-control" value="{{$p['LargeDes']}}" id="name" name="name">
									<input type="hidden" class="form-control" value="{{$p['Price1']}}" id="sale_price" name="sale_price">
									<input type="hidden" class="form-control" value="{{$p['FullImagePath']}}" id="image" name="image">
									{{--<input type="hidden" class="form-control" value="{{$p['LN']}}" id="ln" name="ln">--}}
									{{--<input type="hidden" class="form-control" value="{{$p['LargeDes']}}" id="largeName" name="largeName">--}}
				                {{--<button type="submit" data-toggle="modal" data-target="#selectSizeModal" rel="nofollow" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</button>--}}
				                <button type="submit" rel="nofollow" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</button>
								</form>
				            </div>
						</div>
					</div>
					@endforeach
				</div>
</div>