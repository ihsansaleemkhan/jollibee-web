<title>Home | jollibee</title>
@include('partials.app')
<body class="page-template-template-homepage-v1 home-v1">
<div id="page" class="hfeed site">
    @include('partials.header')
    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    @include('homepage.home-slider')
                    @include('homepage.home-ads-block')
                    @include('homepage.home-featurelist')
                 {{--   @include('homepage.home-stretch-full')--}}
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .col-full -->
    </div><!-- #content -->
</div>
@include('partials.footer')