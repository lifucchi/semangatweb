
	<nav class="fh5co-nav" role="navigation">
	
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html">HELPYOW<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="gallery.html">Cleaner</a></li>
							<li><a href="about.html">Technician</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Cara Kerja</a>
							{{-- 	<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul> --}}
							</li>
							<li><a href="#loginModal" data-toggle="modal" role="button">Login</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  @include('layouts.login')
</div>

<!-- <script src="{{ asset('js/login.js') }}"></script> -->