@extends('site.layout')	
@section('content')
	<main>
		<!-- Page Banner -->
		<div class="page-banner services-banner container-fluid no-padding">
			<div class="banner-content">
				<h3>Services</h3>
				<ol class="breadcrumb">
					<li><a href="index.html" title="Home">Home</a></li>							
					<li class="active">Services</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<!-- Service Section -->
		<div class="service-section container-fluid">
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>our services</h3>
				</div><!-- Section Header /- -->
				<div class="col-md-4 col-sm-6 col-xs-6 service-box">
					<img src="images/service-1.jpg" alt="service" />
					<div class="service-content">
						<h5>World Class Restaurant</h5>
						<p>They'll have to make the best of things its an uphill climb. Their house is a museum where people come.</p>
						<a href="#" class="read-more" title="Read More">Read More</a>
						<a href="#" class="link"><i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 service-box">
					<img src="images/service-2.jpg" alt="service" />
					<div class="service-content">
						<h5>Luxury Rooms and Resorts</h5>
						<p>They'll have to make the best of things its an uphill climb. Their house is a museum where people come.</p>
						<a href="#" class="read-more" title="Read More">Read More</a>
						<a href="#" class="link"><i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 service-box">
					<img src="images/service-3.jpg" alt="service" />
					<div class="service-content">
						<h5>Wellness and SPA</h5>
						<p>They'll have to make the best of things its an uphill climb. Their house is a museum where people come.</p>
						<a href="#" class="read-more" title="Read More">Read More</a>
						<a href="#" class="link"><i class="fa fa-caret-right"></i></a>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Service Section /- -->
		
		<!-- Gallery Section 2 -->
		<div class="gallery-section gallery-section-2 service-gallery container-fluid">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<ul class="portfolio-list no-left-padding">
						<li class="col-md-4 col-sm-4 col-xs-6 design">
							<div class="content-image-block">
								<img src="images/gallery-7.jpg" alt="gallery">
							</div>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6 design">
							<!-- Section Header -->
							<div class="section-header">
								<h3>our gallery</h3>
								<p>A man is born he's a man of means. Then along come two they got nothin' but their jeans. Come and knock on.</p>
								<a href="#" title="view all categories">view all categories</a>
							</div><!-- Section Header /- -->
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6 design">
							<div class="content-image-block">
								<img src="images/gallery-10.jpg" alt="gallery">
							</div>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6 design">
							<div class="content-image-block">
								<img src="images/gallery-9.jpg" alt="gallery">
							</div>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6 design">
							<div class="content-image-block">
								<img src="images/gallery-11.jpg" alt="gallery">
							</div>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6 design">
							<div class="content-image-block">
								<img src="images/gallery-8.jpg" alt="gallery">
							</div>
						</li>
					</ul>
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</div><!-- Gallery Section 2 /- -->
		
		<!-- Testimonial Section -->
		<div class="testimonial-section testimonial-section-1 container-fluid">
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>what our client say</h3>
				</div><!-- Section Header /- -->
				<div class="testimonial-carousel-2">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="testimonial-content">
							<i><img src="images/testi-1.jpg" alt="testi" /></i>
							<p>The law will allow. That this group would somehow form a family that's the way we all became the Brady Bunch. Were gonna do it. Give us any chance well take it. Give us any rule we'll break it. </p>
							<h5>William Smith<span>(CEO of Boston Group)</span></h5>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="testimonial-content">
							<i><img src="images/testi-2.jpg" alt="testi" /></i>
							<p>The law will allow. That this group would somehow form a family that's the way we all became the Brady Bunch. Were gonna do it. Give us any chance well take it. Give us any rule we'll break it. </p>
							<h5>Boeace<span>(CEO of SAS Insititute)</span></h5>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Testimonial Section /- -->
	</main>
	@endsection