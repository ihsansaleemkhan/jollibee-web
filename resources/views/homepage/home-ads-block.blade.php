<div class="tiles">
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<ul class="vmcarousel-centered-infitine vmc-centered">
				@foreach($categories as $cat)
				<li>
					<a href="{{ route('cat',$cat->categoryID) }}"><img src="assets/images/categories/{{$cat->cat_image}}" alt="" ></a>
					<h5 style="padding: 15px"><a href="{{ route('cat',$cat->categoryID) }}">{{$cat->cat_name}}</a> </h5>
				</li>
				@endforeach
			</ul>
		</div>

	</div>
</div>
