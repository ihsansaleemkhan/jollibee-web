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

					<div class="col-sm-4 fd_item">
						<div class="row">
                            <a {{--href="{{ route('single-product',$p->productID) }}"--}}><img src="images/products/{{$p->image}}" class="img-responsive"></a>
						</div>
						<div class="row">
                            <a{{-- href="{{ route('single-product',$p->productID) }}"--}}><p>{{$p->name}}</p></a>
							<span class="price">AED {{$p->sale_price}}</span>
							<br/>
							<div class="hover-area">
								<form class="cart" method="POST" enctype="multipart/form-data" action="{{route('cart.store')}}">
									{{csrf_field()}}
									<input type="hidden" class="form-control" value="{{$p->productID}}" id="productID" name="productID">
									<input type="hidden" class="form-control" value="{{$p->name}}" id="name" name="name">
									<input type="hidden" class="form-control" value="{{$p->sale_price}}" id="sale_price" name="sale_price">
									<input type="hidden" class="form-control" value="{{$p->image}}" id="image" name="image">
				                <button type="submit" data-toggle="modal" data-target="#selectSizeModal" rel="nofollow" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</button>
								</form>
				            </div>
						</div>
					</div>
					@endforeach
				</div>
</div>