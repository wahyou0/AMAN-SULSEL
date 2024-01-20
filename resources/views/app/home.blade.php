<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('tema/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('tema/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('tema/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('tema/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('tema/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('tema/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('tema/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('tema/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>AMAN SULAWESI SELATAN</title>
    <link rel="icon" type="image/X-icon" href="{{ asset('logo/aman.png') }}"/>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->

        @include('app.layout.header')

		<!-- #header end -->

		<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="height: 15cm;">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url( {{ asset('logo/sahkanruu.png') }} );">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">AMAN</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Aliansi Masyarakat Adat Nusantara (AMAN) adalah organisasi kemasyarakatan independen dengan visi untuk mewujudkan kehidupan yang adil dan sejahtera bagi semua Masyarakat Adat di Indonesia.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url({{ asset('logo/bendera.jpg') }});">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->

        @yield('content')

		<!-- #content end -->

		<!-- Footer
		============================================= -->
		
        @include('app.layout.footer')
        
        <!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('tema/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('tema/js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('tema/js/functions.js') }}"></script>

</body>
</html>

