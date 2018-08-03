<div class="tiles">
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<ul class="vmcarousel-centered-infitine vmc-centered">
				@foreach($categories as $cat)
				<li>
					<img src="assets/images/categories/{{$cat->cat_image}}" alt="" >
					<h5>{{$cat->cat_name}} </h5>
				</li>
				@endforeach
			</ul>
		</div>

	</div>
</div>
