<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="AMAN SULAWESI SELATAN" />

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

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href="{{ asset('tema/css/components/bs-datatable.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('tema/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>AMAN SULAWESI SELATAN</title>
    <link rel="icon" type="image/X-icon" href="{{ asset('logo/aman.png') }}"/>

	{{-- apexcharts --}}
    <script src="{{ asset('apxcharts/dist/apexcharts.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('apxcharts/dist/apexcharts.css') }}">

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->

        @include('app.layout.header')

		<!-- #header end -->

		{{-- slider --}}

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

	
	<!-- Bootstrap Data Table Plugin -->
	<script type="text/javascript" src="{{ asset('tema/js/components/bs-datatable.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('tema/js/functions.js') }}"></script>

	<script>

		$(document).ready(function() {
			$('#datatable1').DataTable();
		});

	</script>

</body>
</html>

