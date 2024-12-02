@extends('site.layout')

@section('content')
	<main>
		<!-- Page Banner -->
		<div class="page-banner gallery-banner room-banner container-fluid no-padding">
			<div class="banner-content">
				<h3>Rooms</h3>
				<ol class="breadcrumb">
					<li><a href="index.html" title="Home">Home</a></li>							
					<li class="active">Rooms</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<!-- Offer Section -->
		<div class="offer-section container-fluid">
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header section-header-2">
					<h3>rooms we offer</h3>
				</div><!-- Section Header /- -->
				<div class="offer-carousel">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="offer-box">
							<i><img src="images/offer-1.jpg" alt="offer"></i>
							<div class="offer-content">
								<h5>standard room</h5>
								<p>As long as we live its you and me baby. There ain't nothin' wrong with that. Just two good ol' boys Never meanin' no harm.</p>
								<span>From $200 / Night</span>
								<a class="zoom" href="images/offer-1.jpg" title="offer"><i class="fa fa-plus"></i></a>
								<a href="#" title="Book Now" class="book-now">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="offer-box">
							<i><img src="images/offer-2.jpg" alt="offer"></i>
							<div class="offer-content">
								<h5>luxury room</h5>
								<p>As long as we live its you and me baby. There ain't nothin' wrong with that. Just two good ol' boys Never meanin' no harm.</p>
								<span>From $500 / Night</span>
								<a class="zoom" href="images/offer-2.jpg" title="offer"><i class="fa fa-plus"></i></a>
								<a href="#" title="Book Now" class="book-now">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="offer-box">
							<i><img src="images/offer-3.jpg" alt="offer"></i>
							<div class="offer-content">
								<h5>deluxe room</h5>
								<p>As long as we live its you and me baby. There ain't nothin' wrong with that. Just two good ol' boys Never meanin' no harm.</p>
								<span>From $900 / Night</span>
								<a class="zoom" href="images/offer-3.jpg" title="offer"><i class="fa fa-plus"></i></a>
								<a href="#" title="Book Now" class="book-now">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Offer Section /- -->
	</main>
	@endsection