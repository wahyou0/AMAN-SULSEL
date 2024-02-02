<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{asset('logo/aman.png')}}"><img src="{{asset('logo/aman.png')}}" alt="AMAN"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="{{asset('logo/aman.png')}}"><img src="{{asset('logo/aman.png')}}" alt="AMAN"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="{{ url('/') }}"><div>Home</div></a>
								{{-- <ul>
									<li><a href="#"><div>Home - Corporate</div></a>
										<ul>
											<li><a href="#"><div>Corporate - Layout 1</div></a></li>
										</ul>
									</li>
								</ul> --}}
							</li>
							<li><a href="#"><div>Pengurus Daerah</div></a>
								<ul>
									<li>
										<a href="{{ url('pd-gowa') }}"><div>Gowa</div></a>
									</li>
									<li>
										<a href="{{ url('pd-majene') }}"><div>Majene</div></a>
									</li>
									<li>
										<a href="{{ url('pd-mamasa') }}"><div>Mamasa</div></a>
									</li>
									<li>
										<a href="{{ url('pd-maros')}}"><div>Maros</div></a>
									</li>
									<li>
										<a href="{{ url('pd-massenrempulu')}}"><div>Massenrempulu</div></a>
									</li>
									<li>
										<a href="{{ url('pd-sidrap') }}"><div>Sidrap</div></a>
									</li>
									<li>
										<a href="{{ url('pd-sinjai')}}"><div>Sinjai</div></a>
									</li>
									<li>
										<a href="{{ url('pd-toraya')}}"><div>Toraya</div></a>
									</li>
								</ul>
							</li>
							<li><a href="#"><div>Wilayah Adat</div></a>
								<ul>
									<li>
										<a href="{{ url('wilayah-adat') }}"><div><i class="icon-stack"></i>GIS</div></a>
									</li>
								</ul>
							</li>
							<li><a href="#"><div>Tentang Aman</div></a>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
						
                        
                        <!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
                                <ul>
                                    <a href="{{ url('login')}}">Login</a>
                                </ul>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header>