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
	<title>Home - Magazine Layout | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="login-register.html">Login</a>
								<div class="top-link-section">
									<form id="top-login" role="form">
										<div class="input-group" id="top-login-username">
											<span class="input-group-addon"><i class="icon-user"></i></span>
											<input type="email" class="form-control" placeholder="Email address" required="">
										</div>
										<div class="input-group" id="top-login-password">
											<span class="input-group-addon"><i class="icon-key"></i></span>
											<input type="password" class="form-control" placeholder="Password" required="">
										</div>
										<label class="checkbox">
										  <input type="checkbox" value="remember-me"> Remember me
										</label>
										<button class="btn btn-danger btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
							<li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
							<li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
					<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
				</div><!-- #logo end -->

				<div class="top-advert">
					<img src="images/magazine/ad.jpg" alt="Ad">
				</div>

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li class="current"><a href="index.html"><div>Home</div></a>
								<ul>
									<li><a href="index-corporate.html"><div>Home - Corporate</div></a>
										<ul>
											<li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>
											<li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>
											<li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>
											<li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>
										</ul>
									</li>
									<li><a href="index-portfolio.html"><div>Home - Portfolio</div></a>
										<ul>
											<li><a href="index-portfolio.html"><div>Portfolio - Layout 1</div></a></li>
											<li><a href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a></li>
											<li><a href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a></li>
											<li><a href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a></li>
										</ul>
									</li>
									<li><a href="index-blog.html"><div>Home - Blog</div></a>
										<ul>
											<li><a href="index-blog.html"><div>Blog - Layout 1</div></a></li>
											<li><a href="index-blog-2.html"><div>Blog - Layout 2</div></a></li>
											<li><a href="index-blog-3.html"><div>Blog - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="index-shop.html"><div>Home - Shop</div></a>
										<ul>
											<li><a href="index-shop.html"><div>Shop - Layout 1</div></a></li>
											<li><a href="index-shop-2.html"><div>Shop - Layout 2</div></a></li>
										</ul>
									</li>
									<li><a href="index-magazine.html"><div>Home - Magazine</div></a>
										<ul>
											<li><a href="index-magazine.html"><div>Magazine - Layout 1</div></a></li>
											<li><a href="index-magazine-2.html"><div>Magazine - Layout 2</div></a></li>
											<li><a href="index-magazine-3.html"><div>Magazine - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="landing.html"><div>Home - Landing Page</div></a>
										<ul>
											<li><a href="landing.html"><div>Landing Page - Layout 1</div></a></li>
											<li><a href="landing-2.html"><div>Landing Page - Layout 2</div></a></li>
											<li><a href="landing-3.html"><div>Landing Page - Layout 3</div></a></li>
											<li><a href="landing-4.html"><div>Landing Page - Layout 4</div></a></li>
											<li><a href="landing-5.html"><div>Landing Page - Layout 5</div></a></li>
										</ul>
									</li>
									<li><a href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
										<ul>
											<li><a href="index-fullscreen-image.html"><div>Full Screen - Image</div></a></li>
											<li><a href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a></li>
											<li><a href="index-fullscreen-video.html"><div>Full Screen - Video</div></a></li>
										</ul>
									</li>
									<li><a href="index-onepage.html"><div>Home - One Page</div></a>
										<ul>
											<li><a href="index-onepage.html"><div>One Page - Default</div></a></li>
											<li><a href="index-onepage-2.html"><div>One Page - Submenu</div></a></li>
											<li><a href="index-onepage-3.html"><div>One Page - Dots Style</div></a></li>
										</ul>
									</li>
									<li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>
									<li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>
									<li><a href="index-events.html"><div>Home - Events</div></a></li>
									<li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>
									<li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>
									<li><a href="index-boxed.html"><div>Home - Boxed Layout</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Features</div></a>
								<ul>
									<li><a href="#"><div><i class="icon-stack"></i>Sliders</div></a>
										<ul>
											<li><a href="slider-revolution.html"><div>Revolution Slider</div></a>
												<ul>
													<li><a href="rs-demo-premium-concept.html"><div>Premium Templates</div></a></li>
													<li><a href="slider-revolution.html"><div>Full Screen</div></a></li>
													<li><a href="slider-revolution-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a></li>
													<li><a href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
											<li><a href="slider-canvas.html"><div>Canvas Slider</div></a>
												<ul>
													<li><a href="slider-canvas.html"><div>Full Width</div></a></li>
													<li><a href="slider-canvas-fade.html"><div>Fade Transition</div></a></li>
													<li><a href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a></li>
													<li><a href="slider-canvas-video-event.html"><div>Custom Video Event</div></a></li>
													<li><a href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a></li>
													<li><a href="slider-canvas-3.html"><div>3 Columns</div></a></li>
													<li><a href="slider-canvas-4.html"><div>4 Columns</div></a></li>
													<li><a href="slider-canvas-5.html"><div>5 Columns</div></a></li>
												</ul>
											</li>
											<li><a href="slider-flex.html"><div>Flex Slider</div></a>
												<ul>
													<li><a href="slider-flex.html"><div>Default Layout</div></a></li>
													<li><a href="slider-flex-thumbs.html"><div>with Thumbs</div></a></li>
												</ul>
											</li>
											<li><a href="slider-owl.html"><div>Owl Slider</div></a>
												<ul>
													<li><a href="slider-owl-full.html"><div>Full Width</div></a></li>
													<li><a href="slider-owl.html"><div>Boxed Width</div></a></li>
													<li><a href="slider-owl-videos.html"><div>Video Slider</div></a></li>
												</ul>
											</li>
											<li><a href="static-parallax.html"><div>Static Media</div></a>
												<ul>
													<li><a href="static-parallax.html"><div>Static - Parallax</div></a></li>
													<li><a href="static-image.html"><div>Static - Image</div></a></li>
													<li><a href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a></li>
													<li><a href="static-html5-video.html"><div>Static - HTML5 Video</div></a></li>
													<li><a href="static-embed-video.html"><div>Static - Embedded Video</div></a></li>
												</ul>
											</li>
											<li><a href="slider-camera.html"><div>Camera Slider</div></a></li>
											<li><a href="slider-elastic.html"><div>Elastic Slider</div></a></li>
											<li><a href="slider-nivo.html"><div>Nivo Slider</div></a></li>
										</ul>
									</li>
									<li><a href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>
										<ul>
											<li><a href="widgets.html"><div>Links</div></a></li>
											<li><a href="widgets.html"><div>Flickr Photostream</div></a></li>
											<li><a href="widgets.html"><div>Dribbble Shots</div></a></li>
											<li><a href="widgets.html"><div>Instagram Feed</div></a></li>
											<li><a href="widgets.html"><div>Posts List</div></a></li>
											<li><a href="widgets.html"><div>Twitter Feed</div></a></li>
											<li><a href="widgets.html"><div>Tabbed Widgets</div></a></li>
											<li><a href="widgets.html"><div>Carousel</div></a></li>
											<li><a href="widgets.html"><div>Subscribers</div></a></li>
											<li><a href="widgets.html"><div>Social Icons</div></a></li>
											<li><a href="widgets.html"><div>Testimonials</div></a></li>
											<li><a href="widgets.html"><div>Quick Contact</div></a></li>
											<li><a href="widgets.html"><div>Tags Cloud</div></a></li>
											<li><a href="widgets.html"><div>Video Embeds</div></a></li>
											<li><a href="widgets.html"><div>Raw Text/HTML</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-umbrella"></i>Headers</div></a>
										<ul>
											<li><a href="header-light.html"><div>Light Version</div></a></li>
											<li><a href="header-dark.html"><div>Dark Version</div></a></li>
											<li><a href="header-transparent.html"><div>Transparent</div></a></li>
											<li><a href="header-semi-transparent.html"><div>Semi Transparent</div></a>
												<ul>
													<li><a href="header-semi-transparent.html"><div>Light Version</div></a></li>
													<li><a href="header-semi-transparent-dark.html"><div>Dark Version</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-left.html"><div>Left Side Header</div></a>
												<ul>
													<li><a href="header-side-left.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-left-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-left-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-right.html"><div>Right Side Header</div></a>
												<ul>
													<li><a href="header-side-right.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-right-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-right-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-floating.html"><div>Floating Version</div></a></li>
											<li><a href="static-sticky.html"><div>Static Sticky</div></a></li>
											<li><a href="responsive-sticky.html"><div>Responsive Sticky</div></a></li>
											<li><a href="logo-changer.html"><div>Alternate Logos</div></a></li>
											<li><a href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a></li>
										</ul>
									</li>
									<li><a href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>
										<ul>
											<li><a href="side-panel-left-overlay.html"><div>Left Overlay</div></a></li>
											<li><a href="side-panel-left-push.html"><div>Left Push</div></a></li>
											<li><a href="side-panel-right-overlay.html"><div>Right Overlay</div></a></li>
											<li><a href="side-panel.html"><div>Right Push</div></a></li>
											<li><a href="side-panel-light.html"><div>Light Background</div></a></li>
										</ul>
									</li>
									<li><a href="mega-menu.html"><div><i class="icon-line-columns"></i>Mega Menu</div></a></li>
									<li><a href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
										<ul>
											<li><a href="header-light.html"><div>Menu - Style 1</div></a></li>
											<li><a href="menu-2.html"><div>Menu - Style 2</div></a></li>
											<li><a href="menu-3.html"><div>Menu - Style 3</div></a></li>
											<li><a href="menu-4.html"><div>Menu - Style 4</div></a></li>
											<li><a href="menu-5.html"><div>Menu - Style 5</div></a></li>
											<li><a href="menu-6.html"><div>Menu - Style 6</div></a></li>
											<li><a href="menu-7.html"><div>Menu - Style 7</div></a></li>
											<li><a href="menu-8.html"><div>Menu - Style 8</div></a></li>
											<li><a href="menu-9.html"><div>Menu - Style 9</div></a></li>
											<li><a href="menu-10.html"><div>Menu - Overlay</div></a></li>
											<li><a href="split-menu.html"><div>Menu - Split Layout</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
										<ul>
											<li><a href="page.html"><div>Left Align</div></a></li>
											<li><a href="page-title-right.html"><div>Right Align</div></a></li>
											<li><a href="page-title-center.html"><div>Center Align</div></a></li>
											<li><a href="page-titledark.html"><div>Dark Style</div></a></li>
											<li><a href="page-title-pattern.html"><div>Pattern Background</div></a></li>
											<li><a href="page-title-parallax.html"><div>Parallax Background</div></a>
												<ul>
													<li><a href="page-title-parallax.html"><div>Default Header</div></a></li>
													<li><a href="page-title-parallax-header.html"><div>Transparent Header</div></a></li>
												</ul>
											</li>
											<li><a href="page-title-video.html"><div>HTML5 Video</div></a></li>
											<li><a href="page-title-nobg.html"><div>No Background</div></a></li>
											<li><a href="page-title-mini.html"><div>Mini Version</div></a></li>
										</ul>
									</li>
									<li><a href="contact.html"><div><i class="icon-envelope-alt"></i>Contact Pages</div></a>
										<ul>
											<li><a href="contact.html">Contact 1</a></li>
											<li><a href="contact-2.html">Contact 2</a></li>
											<li><a href="contact-3.html">Contact 3</a></li>
											<li><a href="contact-4.html">Contact 4</a></li>
											<li><a href="contact-5.html">Contact 5</a></li>
											<li><a href="contact-6.html">Contact 6</a></li>
											<li><a href="contact-7.html">Contact 7</a></li>
										</ul>
									</li>
									<li><a href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>
										<ul>
											<li><a href="sticky-footer.html"><div>Sticky Footer</div></a></li>
											<li><a href="#footer" data-scrollto="#footer"><div>Footer - Layout 1</div></a></li>
											<li><a href="footer-2.html#footer"><div>Footer - Layout 2</div></a></li>
											<li><a href="footer-3.html#footer"><div>Footer - Layout 3</div></a></li>
											<li><a href="footer-4.html#footer"><div>Footer - Layout 4</div></a></li>
											<li><a href="footer-5.html#footer"><div>Footer - Layout 5</div></a></li>
											<li><a href="footer-6.html#footer"><div>Footer - Layout 6</div></a></li>
											<li><a href="footer-7.html#footer"><div>Footer - Layout 7</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-calendar3"></i>Events</div></a>
										<ul>
											<li><a href="events-calendar.html"><div>Full Width Calendar</div></a></li>
											<li><a href="events-list.html"><div>Events List</div></a>
												<ul>
													<li><a href="events-list.html"><div>Right Sidebar</div></a></li>
													<li><a href="events-list-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="events-list-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="events-list-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="events-list-parallax.html"><div>Parallax List</div></a></li>
												</ul>
											</li>
											<li><a href="event-single.html"><div>Single Event</div></a>
												<ul>
													<li><a href="event-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
													<li><a href="event-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="event-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="event-single.html"><div>Full Width</div></a></li>
												</ul>
											</li>
											<li><a href="event-single-full-width-image.html"><div>Single Event - Full</div></a>
												<ul>
													<li><a href="event-single-full-width-image.html"><div>Parallax Image</div></a></li>
													<li><a href="event-single-full-width-map.html"><div>Google Map</div></a></li>
													<li><a href="event-single-full-width-slider.html"><div>Slider Gallery</div></a></li>
													<li><a href="event-single-full-width-video.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
										<ul>
											<li><a href="modal-onload.html"><div>Simple Layout</div></a></li>
											<li><a href="modal-onload-iframe.html"><div>Video iFrame</div></a></li>
											<li><a href="modal-onload-subscribe.html"><div>Subscription Form</div></a></li>
											<li><a href="modal-onload-common-height.html"><div>Common Height</div></a></li>
											<li><a href="modal-onload-cookie.html"><div>Cookies Enabled</div></a></li>
										</ul>
									</li>
									<li><a href="coming-soon.html"><div><i class="icon-time"></i>Coming Soon</div></a>
										<ul>
											<li><a href="coming-soon.html"><div>Simple Layout</div></a></li>
											<li><a href="coming-soon-2.html"><div>Parallax Image</div></a></li>
											<li><a href="coming-soon-3.html"><div>HTML5 Video</div></a></li>
										</ul>
									</li>
									<li><a href="profile.html"><div><i class="icon-user"></i>User Profile</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Pages</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Introduction</div></a>
											<ul>
												<li><a href="about.html"><div>About Us</div></a></li>
												<li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>
												<li><a href="about-me.html"><div>About Me</div></a></li>
												<li><a href="team.html"><div>Team Members</div></a></li>
												<li><a href="jobs.html"><div>Careers</div></a></li>
												<li><a href="side-navigation.html"><div>Side Navigation</div></a></li>
												<li><a href="page-submenu.html"><div>Page Submenu</div></a></li>
												<li><a href="sitemap.html"><div>Sitemap</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Utility</div></a>
											<ul>
												<li><a href="services.html"><div>Services - Layout 1</div></a></li>
												<li><a href="services-2.html"><div>Services - Layout 2</div></a></li>
												<li><a href="services-3.html"><div>Services - Layout 3</div></a></li>
												<li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>
												<li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>
												<li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>
												<li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>
												<li><a href="maintenance.html"><div>Maintenance Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>
											<ul>
												<li><a href="full-width.html"><div>Full Width</div></a></li>
												<li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>
												<li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>
												<li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>
												<li><a href="blank-page.html"><div>Blank Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>
											<ul>
												<li><a href="login-register.html"><div>Login/Register</div></a></li>
												<li><a href="login-register-2.html"><div>Login/Register - Style 2</div></a></li>
												<li><a href="login-register-3.html"><div>Login/Register - Style 3</div></a></li>
												<li><a href="login-1.html"><div>Login - Style 1</div></a></li>
												<li><a href="login-2.html"><div>Login - Style 2</div></a></li>
												<li><a href="404.html"><div>404 - Simple Layout</div></a></li>
												<li><a href="404-2.html"><div>404 - Parallax Image</div></a></li>
												<li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Portfolio</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Grids</div></a>
											<ul>
												<li><a href="portfolio-1.html"><div>1 Column</div></a></li>
												<li><a href="portfolio-2.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>
												<li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>
											<ul>
												<li><a href="portfolio.html"><div>jQuery Filter</div></a></li>
												<li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>
												<li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>
												<li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>
												<li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>
												<li><a href="portfolio-filter-styles.html"><div>Filter Styles</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Single Project</div></a>
											<ul>
												<li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>
												<li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>
												<li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>
												<li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>
												<li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>
												<li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Layouts</div></a>
											<ul>
												<li><a href="portfolio-nomargin.html"><div>Default</div></a></li>
												<li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>
												<li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Blog</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Default</div></a>
											<ul>
												<li><a href="blog.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-full-width.html"><div>Full Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Timeline</div></a>
											<ul>
												<li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-timeline.html"><div>Full Width</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="blog-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>
												<li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Grid</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>4 Columns</div></a></li>
												<li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>
											<ul>
												<li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-small.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>
												<li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>Pagination</div></a></li>
												<li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Single</div></a>
											<ul>
												<li><a href="blog-single.html"><div>Default Layout</div></a></li>
												<li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-single-full.html"><div>Full Width</div></a></li>
												<li><a href="blog-single-small.html"><div>Small Image</div></a></li>
												<li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>
											<ul>
												<li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>
												<li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="shop.html"><div>Shop</div></a>
								<ul>
									<li><a href="shop.html"><div>4 Columns</div></a></li>
									<li><a href="shop-3.html"><div>3 Columns</div></a>
										<ul>
											<li><a href="shop-3.html"><div>Full Width</div></a></li>
											<li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-2.html"><div>2 Columns</div></a>
										<ul>
											<li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-1.html"><div>1 Columns</div></a>
										<ul>
											<li><a href="shop-1.html"><div>Full Width</div></a></li>
											<li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
									<li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>
									<li><a href="shop-single.html"><div>Single Product</div></a>
										<ul>
											<li><a href="shop-single.html"><div>Full Width</div></a></li>
											<li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="cart.html"><div>Cart</div></a></li>
									<li><a href="checkout.html"><div>Checkout</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
								<div class="mega-menu-content clearfix">
									<ul class="mega-menu-column col-5">
										<li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
										<li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
										<li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
										<li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
										<li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
										<li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
										<li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
										<li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>
										<li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
										<li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
										<li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
										<li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
										<li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
										<li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
										<li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
										<li><a href="component-editable.html"><div><i class="icon-edit"></i>Editable Fields</div></a></li>
										<li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="lists-panels.html"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>
										<li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
										<li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
										<li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
										<li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
										<li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
										<li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
										<li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
										<li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
										<li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
										<li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
										<li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
										<li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
										<li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
										<li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
										<li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>
										<li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
										<li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
										<li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
										<li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
										<li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
										<li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
										<li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
										<li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
										<li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>
									</ul>
								</div>
							</li>
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
					<div>
						<div class="container clearfix">
							<span class="label label-danger bnews-title">Breaking News:</span>

							<div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="#"><strong>Russia hits back, says US acts like a 'bad surgeon'..</strong></a></div>
										<div class="slide"><a href="#"><strong>'Sulking' Narayan Rane needs consolation: Uddhav reacts to Cong leader's attack..</strong></a></div>
										<div class="slide"><a href="#"><strong>Rane needs consolation. I pray to God that he gets mental peace in a political party..</strong></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="bottommargin-lg">
                    <div class="fslider flex-thumb-grid grid-6" data-speed="400" data-arrows="true" data-thumbs="false" data-easing="easeOutQuad">
                        <div class="flexslider" style="height: 15cm;">
                            <div class="slider-wrap">
                                <div class="slide" data-thumb="{{ asset('tema/images/magazine/thumb/1.jpg')}}">
                                    <a href="#">
                                        <img src="{{ asset('tema/images/magazine/1.jpg')}}" alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <div class="text-overlay-title">
                                                    <h3>Locked Steel Gate</h3>
                                                </div>
                                                <div class="text-overlay-meta">
                                                    <span>Illustrations</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="slide" data-thumb="{{ asset('tema/images/magazine/thumb/2.jpg')}}">
                                    <a href="#">
                                        <img src="{{ asset('tema/images/magazine/2.jpg')}}" alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <div class="text-overlay-title">
                                                    <h3>Russia hits back, says US acts like a 'bad surgeon'</h3>
                                                </div>
                                                <div class="text-overlay-meta">
                                                    <span><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="slide" data-thumb="images/magazine/thumb/3.jpg">
                                    <a href="#">
                                        <img src="{{ asset('tema/images/magazine/3.jpg')}}" alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <div class="text-overlay-title">
                                                    <h3>Locked Steel Gate</h3>
                                                </div>
                                                <div class="text-overlay-meta">
                                                    <span>Technology</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="slide" data-thumb="images/magazine/thumb/4.jpg">
                                    <iframe src="http://player.vimeo.com/video/99895335" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <div class="slide" data-thumb="{{ asset('tema/images/magazine/thumb/5.jpg')}}">
                                    <a href="#">
                                        <img src="{{ asset('tema/images/magazine/5.jpg')}}" alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <div class="text-overlay-title">
                                                    <h3>Locked Steel Gate</h3>
                                                </div>
                                                <div class="text-overlay-meta">
                                                    <span><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="slide" data-thumb="images/magazine/thumb/6.jpg">
                                    <a href="#">
                                        <img src="{{ asset('tema/images/magazine/6.jpg')}}" alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <div class="text-overlay-title">
                                                    <h3>Locked Steel Gate</h3>
                                                </div>
                                                <div class="text-overlay-meta">
                                                    <span>Entertainment</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="container clearfix">

					<div class="postcontent nobottommargin">

						

						<div class="clear"></div>

						<div class="col_full bottommargin-lg clearfix">

							<div class="fancy-title title-border">
								<h3>Technology</h3>
							</div>

							<div class="col_one_third">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg" alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">Yum, McDonald's apologize as new China food scandal brews</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 9th Sep 2014</li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
									</ul>
									<div class="entry-content">
										<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
									</div>
								</div>
							</div>

							<div class="col_one_third">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="images/magazine/thumb/16.jpg" alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">Halliburton gets boost from rebound in North America drilling</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 23rd Aug 2014</li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 33</a></li>
									</ul>
									<div class="entry-content">
										<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
									</div>
								</div>
							</div>

							<div class="col_one_third col_last">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="images/magazine/thumb/13.jpg" alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">China sends spy ship off Hawaii during U.S.-led drills brews</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 11th Feb 2014</li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
									</ul>
									<div class="entry-content">
										<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
									</div>
								</div>
							</div>

							<div class="clear"></div>

						</div>

						<div class="bottommargin-lg">
							<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter notopmargin nobottommargin">
						</div>

						<div class="col_full bottommargin-lg clearfix">

							<div class="fancy-title title-border">
								<h3>Entertainment</h3>
							</div>

							<div class="col_one_third nobottommargin">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="images/magazine/thumb/10.jpg" alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 17th Jan 2014</li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 50</a></li>
									</ul>
									<div class="entry-content">
										<p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
									</div>
								</div>
							</div>

							<div class="col_one_third nobottommargin">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="images/magazine/thumb/15.jpg" alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
									</ul>
									<div class="entry-content">
										<p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
									</div>
								</div>
							</div>

							<div class="col_one_third nobottommargin col_last">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="images/magazine/thumb/6.jpg" alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 10th Dec 2013</li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
									</ul>
									<div class="entry-content">
										<p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
									</div>
								</div>
							</div>

							<div class="clear"></div>

						</div>

						<div class="tabs bottommargin-lg clearfix" id="tab-news">

							<ul class="tab-nav clearfix">
								<li><a href="#tabs-news-1"><i class="icon-facetime-video"></i><span class="hidden-xs"> Video News</span></a></li>
								<li><a href="#tabs-news-2"><i class="icon-film"></i><span class="hidden-xs"> Movie Reviews</span></a></li>
								<li><a href="#tabs-news-3"><i class="icon-music2"></i><span class="hidden-xs"> Music</span></a></li>
								<li><a href="#tabs-news-4"><i class="icon-bar-chart"></i><span class="hidden-xs"> Opinion Polls</span></a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix" id="tabs-news-1">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<iframe src="//player.vimeo.com/video/97243508" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<div class="entry-title">
												<h3><a href="blog-single.html">Foreign advisors killed in Kabul blast</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
												<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
												<li><i class="icon-eye-open"></i> 6422 Views</li>
											</ul>
											<div class="entry-content">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus. Dolores pariatur rem assumenda labore eligendi explicabo dolor.</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">UK government weighs Tesla's Model S for its ??5 million electric vehicle fleet</a></h4>
												</div>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">MIT's new robot glove can give you extra fingers</a></h4>
												</div>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Black boxes handed to Malaysia</a></h4>
												</div>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">MH17 forensic team face challenge</a></h4>
												</div>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Spain lifts file-sharing site blocks</a></h4>
												</div>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Body of fugitive South Korea ferry businessman found, police say</a></h4>
												</div>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Yen dips on modest reduction in risk aversion, markets still wary</a></h4>
												</div>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">China's Xiaomi announces latest flagship Mi 4 smartphone</a></h4>
												</div>
											</div>
										</div>

									</div>

								</div>
								<div class="tab-content clearfix" id="tabs-news-2">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/17.jpg" alt="Image"></a>
											</div>
											<div class="entry-title">
												<h3><a href="blog-single.html">Review: Dallas Buyers Club</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
												<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
												<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
												<li><i class="icon-heart3 text-danger"></i> 95%</li>
											</ul>
											<div class="entry-content">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Cupiditate quia nesciunt repellat animi amet magnam officiis!</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/small/movie/2.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Dawn Of The Planet Of The Apes</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
													<li><i class="icon-heart3 text-danger"></i> 92%</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/small/movie/3.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">The Purge: Anarchy</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
													<li><i class="icon-heart3 text-warning"></i> 54%</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/small/movie/4.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Planes: Fire And Rescue</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
													<li><i class="icon-heart3 text-warning"></i> 45%</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/small/movie/5.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Sex Tape</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
													<li><i class="icon-heart3 text-default"></i> 20%</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/small/movie/6.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Transformers: Age of Extinction</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
													<li><i class="icon-heart3 text-default"></i> 17%</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/small/movie/7.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">How to Train Your Dragon 2</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i></li>
													<li><i class="icon-heart3 text-danger"></i> 90%</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/small/movie/8.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Earth to Echo</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
													<li><i class="icon-heart3 text-warning"></i> 48%</li>
												</ul>
											</div>
										</div>

									</div>

								</div>
								<div class="tab-content clearfix" id="tabs-news-3">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<iframe width="100%" height="250" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139433038&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
											</div>
											<div class="entry-title">
												<h3><a href="blog-single.html">Afrojack vs Thirty Seconds To Mars - Do Or Die (Club Remix)</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
												<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
												<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i></li>
												<li><i class="icon-heart3 text-danger"></i> 85%</li>
											</ul>
											<div class="entry-content">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Cupiditate quia nesciunt repellat animi amet magnam officiis!</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Thomas Jack Presents: Tropical House Vol.5</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-heart3 text-danger"></i> 92%</li>
													<li>Thomas Jack</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Major Lazer's Walshy Fire Presents: Jesse Royal - Royally Speaking</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-heart3 text-warning"></i> 54%</li>
													<li>Major Lazer</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">The Weeknd - King Of The Fall</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-heart3 text-success"></i> 78%</li>
													<li>The Weeknd-XO</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">No Flex Zone Remix Feat. Nicki Minaj</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-heart3 text-warning"></i> 45%</li>
													<li>Nicki Minaj</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Mike Mago &amp; Dragonette - Outlines</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-heart3 text-primary"></i> 65%</li>
													<li>Mike Mago</li>
												</ul>
											</div>
										</div>

									</div>

								</div>
								<div class="tab-content clearfix" id="tabs-news-4">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<a href="#"><img class="image_fade" src="images/magazine/18.jpg" alt="Image"></a>
											</div>
											<div class="entry-title">
												<h3><a href="blog-single.html">America Should Stay Out of Foreign Troubles?</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 5th July, 2014</li>
												<li><i class="icon-thumbs-up text-success"></i> 69.3%</li>
												<li><i class="icon-thumbs-down text-danger"></i> 31.7%</li>
											</ul>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Who do you think is responsible for shooting down Malaysia Airlines flight MH17?</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><span class="text-success">Ukraine:</span> 77%</li>
													<li><span class="text-danger">Rebels:</span> 23%</li>
												</ul>
											</div>
										</div>
										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Maradona says Messi didn't deserve Golden Ball?</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-thumbs-up text-success"></i> 54%</li>
													<li><i class="icon-thumbs-down text-danger"></i> 46%</li>
												</ul>
											</div>
										</div>
										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Palestinian president says Israel is carrying out a genocide in Gaza?</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-thumbs-up text-success"></i> 80%</li>
													<li><i class="icon-thumbs-down text-danger"></i> 20%</li>
												</ul>
											</div>
										</div>
										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Can Brazil progress in the World Cup without Neymar?</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-thumbs-up text-success"></i> 55%</li>
													<li><i class="icon-thumbs-down text-danger"></i> 45%</li>
												</ul>
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="sidebar nobottommargin col_last">

						<div class="sidebar-widgets-wrap">
							<div class="clear"></div>
							<div class="widget clearfix">

								<img class="aligncenter" src="images/magazine/ad.png" alt="">

							</div>

							<div class="widget widget_links clearfix">

								<h4>Categories</h4>
								<div class="col_half nobottommargin">
									<ul>
										<li><a href="#">World</a></li>
										<li><a href="#">Technology</a></li>
										<li><a href="#">Entertainment</a></li>
										<li><a href="#">Sports</a></li>
										<li><a href="#">Media</a></li>
										<li><a href="#">Politics</a></li>
										<li><a href="#">Business</a></li>
									</ul>
								</div>
								<div class="col_half nobottommargin col_last">
									<ul>
										<li><a href="#">Lifestyle</a></li>
										<li><a href="#">Travel</a></li>
										<li><a href="#">Cricket</a></li>
										<li><a href="#">Football</a></li>
										<li><a href="#">Education</a></li>
										<li><a href="#">Photography</a></li>
										<li><a href="#">Nature</a></li>
									</ul>
								</div>

							</div>

							<div class="widget clearfix">

								<h4>Twitter Feed Scroller</h4>
								<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
									<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
									<div class="flexslider" style="width: auto;">
										<div class="slider-wrap">
											<div class="slide"></div>
										</div>
									</div>
								</div>

							</div>

							<div class="widget clearfix">

								<h4>Flickr Photostream</h4>
								<div id="flickr-widget" class="flickr-feed masonry-thumbs col-5" data-id="613394@N22" data-count="15" data-type="group" data-lightbox="gallery"></div>

							</div>

							<div class="widget clearfix">

								<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1">Popular</a></li>
										<li><a href="#tabs-2">Recent</a></li>
										<li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<div id="popular-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 35 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 24 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 19 Comments</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-2">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-3">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
													</div>
												</div>

											</div>
										</div>

									</div>

								</div>

							</div>

							<div class="widget clearfix">

								<img class="aligncenter" src="images/magazine/ad.png" alt="">

							</div>

							<div class="widget clearfix">
								<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=240&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:240px;" allowTransparency="true"></iframe>
							</div>

						</div>

					</div>

					<div class="clear"></div>

					<div class="fancy-title title-border topmargin">
						<h3>Other News</h3>
					</div>

					<div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">

						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">A Baseball Team Blew Up A Bunch Of Justin Bieber And Miley Cyrus Merch</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 13th Jun 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
								</ul>
							</div>
						</div>
						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/2.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">UK government weighs Tesla's Model S for its ??5 million electric vehicle fleet</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 24th Feb 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
								</ul>
							</div>
						</div>
						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/3.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">MIT's new robot glove can give you extra fingers</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 30th Dec 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								</ul>
							</div>
						</div>
						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/4.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">Yen dips on modest reduction in risk aversion, markets still wary</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 15th Jan 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
								</ul>
							</div>
						</div>
						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/5.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">Beyonce Dropped A '50 Shades Of Grey', Teaser On Instagram Last Night</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 27th Jul 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 61</a></li>
								</ul>
							</div>
						</div>
						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/6.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">Want To Know The New 'Star Wars' Plot? Then This Is The Post For You</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 34</a></li>
								</ul>
							</div>
						</div>
						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/7.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">Toyotas next minivan will let you shout at your kids without turning around</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 21st Oct 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 11</a></li>
								</ul>
							</div>
						</div>
						<div class="oc-item">
							<div class="ipost clearfix">
								<div class="entry-image">
									<a href="#"><img class="image_fade" src="images/magazine/thumb/8.jpg" alt="Image"></a>
								</div>
								<div class="entry-title">
									<h4><a href="blog-single.html">You can now listen to headphones through your hoodie</a></h4>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 20th Nov 2014</li>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 07</a></li>
								</ul>
							</div>
						</div>

					</div>


					<img src="images/magazine/ad.jpg" alt="Ad" class="aligncenter topmargin-lg nobottommargin">

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="http://codex.wordpress.org/">Documentation</a></li>
									<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="http://wordpress.org/support/">Support Forums</a></li>
									<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Flickr Photostream</h4>
								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

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