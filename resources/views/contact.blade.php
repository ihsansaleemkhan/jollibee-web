<title>Contact-Us | jollibee</title>
@include('partials.app')
<body class="page-template-template-contactpage">
<div id="page" class="hfeed site">
	@include('partials.header')
<div id="content" class="site-content" tabindex="-1" >
	<div class="col-full">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php //require_once 'inc/components/contact-map.php'; ?>

				<header class="contact-header">
					<h1 class="entry-title">Contact Us</h1>
					<p class="description">We are a second-generation family business established in 1972</p>
				</header>

				<div class="contact-form-with-address">
					<div class="row">
						@include('components.contact-form')
						@include('components.store-info')
					</div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .col-full -->
</div><!-- #content -->
</div>
@include('partials.footer')