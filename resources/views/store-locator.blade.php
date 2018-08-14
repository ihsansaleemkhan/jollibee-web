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
											<tr>
												<td>
													<strong>The Dubai Mall </strong><br/>
													<span>TDM -SF-130-11, 2nd level food court,<br/>The Dubai Mall</span><br/><br/>
													<strong>Tel </strong> 04 273 5160<br/>
												</td>
												<td>
													<strong>Weekdays </strong>8:00 am-1:00 am<br/>
													<strong>Weekends </strong>8:00 am-1:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Burjuman Center </strong><br/>
													<span>Unit 001, Ground Floor,Burjuman Center,<br/> Bur Dubai, Dubai UAE</span><br/><br/>
													<strong>Tel </strong> 04 269 0000<br/>
												</td>
												<td>
													<strong>Weekdays </strong>6:00 am-12:00 am<br/>
													<strong>Weekends </strong>6:00 am-1:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Mall of the Emirates </strong><br/>
													<span>Unit FC15, food court,<br/> Mall of the Emirates, Dubai UAE</span><br/><br/>
													<strong>Tel </strong> 04 269 5815<br/>
												</td>
												<td>
													<strong>Weekdays </strong>8:00 am-12:00 am<br/>
													<strong>Weekends </strong>8:00 am-12:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Al Ghurair Center </strong><br/>
													<span>GC15, food court,<br/>Al Ghurair Center, Dubai UAE</span><br/><br/>
													<strong>Tel </strong> 04 397 7578<br/>
												</td>
												<td>
													<strong>Weekdays </strong>6:00 am-12:00 am<br/>
													<strong>Weekends </strong>6:00 am-3:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Al Satwa </strong><br/>
													<span>Shop no G-10,11,12, M-1,2,3,4,5 <br/>Raisa Beljafia M.A Muhairi,<br/>K.K Saif Beljafia Bldg</span><br/><br/>
													<strong>Tel </strong> 04 327 3331<br/>
												</td>
												<td>
													<strong>Weekdays </strong>6:00 am-3:00 am<br/>
													<strong>Weekends </strong>6:00 am-3:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Al Falah </strong><br/>
													<span>B.H Building(Al Murjan Tower),<br/>Sector Number (E-40/01), Plot C45</span><br/><br/>
													<strong>Tel </strong> 04 242 4034<br/>
												</td>
												<td>
													<strong>Weekdays </strong>7:00 am-12:00 am<br/>
													<strong>Weekends </strong>6:00 am-1:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Mushrif Mall </strong><br/>
													<span>Unit 309, 3rd Floor Food Court <br/>Mushrif Mall, Abhu Dhabi UAE </span><br/><br/>
													<strong>Tel </strong> 02 555 5748<br/>
												</td>
												<td>
													<strong>Weekdays </strong>8:00 am-12:00 am<br/>
													<strong>Weekends </strong>8:00 am-12:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>IBN Battuta </strong><br/>
													<span>LE 46 & 47 <br/>IBN Battuta Mall Metrolink </span><br/><br/>
													<strong>Tel </strong> 02 551 8888<br/>
												</td>
												<td>
													<strong>Weekdays </strong>8:00 am-12:00 am<br/>
													<strong>Weekends </strong>8:00 am-1:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Tourists Club </strong><br/>
													<span>Unit G-1 Ground Level <br/>Al Fahad Tower 2 ,Tourists Club <br/>Abhu Dhabi </span><br/><br/>
													<strong>Tel </strong> 02 631 1296<br/>
												</td>
												<td>
													<strong>Weekdays </strong>6:00 am-12:00 am<br/>
													<strong>Weekends </strong>6:00 am-12:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>City Center Ajman </strong><br/>
													<span>Unit FB13,<br/>City Center Ajman </span><br/><br/>
													<strong>Tel </strong> 06 531 0533<br/>
												</td>
												<td>
													<strong>Weekdays </strong>9:00 am-12:00 am<br/>
													<strong>Weekends </strong>9:00 am-12:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>City Center Sharjah </strong><br/>
													<span>Unit No B11,<br/>City Center Sharjah, UAE </span><br/><br/>
													<strong>Tel </strong> 06 741 0665<br/>
												</td>
												<td>
													<strong>Weekdays </strong>8:00 am-12:00 am<br/>
													<strong>Weekends </strong>8:00 am-12:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Al Ain </strong><br/>
													<span>Unit S18 & S19 Food Court,<br/>2nd Foloor Al Ain Mall </span><br/><br/>
													<strong>Tel </strong> 03 764 3388<br/>
												</td>
												<td>
													<strong>Weekdays </strong>9:00 am-12:00 am<br/>
													<strong>Weekends </strong>9:00 am-1:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
											<tr>
												<td>
													<strong>Al Wahda </strong><br/>
													<span>3rd Floor Food Court,<br/>Al Wahda Mall Extension</span><br/><br/>
													<strong>Tel </strong> 02 446 5625<br/>
												</td>
												<td>
													<strong>Weekdays </strong>10:00 am-11:00 pm<br/>
													<strong>Weekends </strong>10:00 am-12:00 am
												</td>
												<td><a href="{{route('store-detail')}}" class="loc-view">View</a></td>
											</tr>
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