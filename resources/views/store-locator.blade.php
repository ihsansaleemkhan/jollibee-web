<title>Store Locator | jollibee</title>
@include('partials.app')
<body class="store-locator-page">
<div id="page" class="hfeed site">
	@include('partials.header')
	<div id="content" class="site-content" tabindex="-1" >
		<div class="col-full">
			<div class="pizzaro-breadcrumb">
				<nav class="woocommerce-breadcrumb" >
					<a href="home">Home</a>
					<span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Store Locator
				</nav>
			</div>
			<!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<div id="post-537" class="post-537 page type-page status-publish hentry">
						<header class="entry-header">
							<h1 class="entry-title">Store Locator</h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<div id="wpsl-wrap">
								<div class="wpsl-search wpsl-clearfix ">

									<div id="wpsl-search-wrap">
										<div class="wpsl-from">
											<div class="wpsl-input">
												<div>
													<label for="wpsl-search-input">Your location</label>
												</div>
												<input id="wpsl-search-input" type="text" value="" name="wpsl-search-input" placeholder="" aria-required="true" />
											</div>
											<div class="wpsl-select-wrap">
												<!-- <div class="wpsl-radius">
                                                    <label for="wpsl-radius-dropdown">Search radius</label>

                                                    <div class="wpsl-dropdown">
                                                        <select id="wpsl-radius-dropdown" class="" name="wpsl-radius">
                                                            <option value="10">10 km</option>
                                                            <option value="25">25 km</option>
                                                            <option selected="selected" value="50">50 km</option>
                                                            <option value="100">100 km</option>
                                                            <option value="200">200 km</option>
                                                            <option value="500">500 km</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="wpsl-results">
                                                    <label for="wpsl-results-dropdown">Results</label>
                                                    <div class="wpsl-dropdown">
                                                        <select id="wpsl-results-dropdown" class="" name="wpsl-results">
                                                            <option selected="selected" value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="75">75</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div> -->
											</div>
											<div class="wpsl-search-btn-wrap">
												<input id="wpsl-search-btn" type="submit" value="Search">
											</div>
										</div>
									</div>
								</div>

								<div id="wpsl-result-list" class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
									<div id="wpsl-stores" >
										<table class="table table-hover table-striped">
											@foreach($stores as $s)
											<tr>
												<td>
													<strong>{{$s->storeName}} </strong><br/>
													<span>{{$s->address}}</span><br/><br/>
													<strong>Tel </strong> {{$s->contact_no}}<br/>
												</td>
												<td>
													<strong>Weekdays </strong>{{$s->weekday_time}}<br/>
													<strong>Weekends </strong>{{$s->weekend_time}}
												</td>
												<td><a href="{{route('store-detail',$s->storeID)}}" class="loc-view">View</a></td>
											</tr>
											@endforeach
										</table>
										<!-- <ul>
                                            <li data-store-id="535">
                                                <div>
                                                    <p>

                                                        <span class="wpsl-street">27, Maraicoir Street</span>

                                                        <span class="wpsl-country">India</span>
                                                    </p>
                                                </div>
                                                <div class="wpsl-direction-wrap">2.9 km
                                                </div>
                                            </li>
                                        </ul> -->
									</div>
								</div>

								<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 map">
									@include('layouts.contact-map');
								</div>
							</div>
						</div><!-- .entry-content -->
					</div><!-- #post-## -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col-full -->
	</div><!-- #content -->

</div>
@include('partials.footer')