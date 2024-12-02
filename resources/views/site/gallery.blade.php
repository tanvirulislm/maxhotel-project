@extends('site.layout')
@section('content')
<main>
		<!-- Page Banner -->
		<div class="page-banner gallery-banner container-fluid no-padding">
			<div class="banner-content">
				<h3>gallery</h3>
				<ol class="breadcrumb">
					<li><a href="index.html" title="Home">Home</a></li>							
					<li class="active">Gallery</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<!-- Gallery Section 1 -->
		<div class="gallery-section gallery-section-1 container-fluid">
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>our gallery</h3>
				</div><!-- Section Header /- -->
				<ul id="filters" class="portfolio-categories no-left-padding">
					<li><a data-filter="*" class="active" href="#">All</a></li>
					<li><a data-filter=".design" href="#">rooms</a></li>
					<li><a data-filter=".video" href="#">resorts</a></li>
					<li><a data-filter=".photography" href="#">restaurant</a></li>
					<li><a data-filter=".web" href="#">spa & pool</a></li>
				</ul>
				<ul class="portfolio-list no-left-padding">
					<li class="col-md-4 col-sm-4 col-xs-6 design">
						<div class="content-image-block">
							<img src="images/gallery-1.jpg" alt="gallery">
							<div class="content-block-hover">
								<h5>beach view</h5>
								<p>Victoria.</p>
								<a class="zoom" href="images/gallery-1.jpg" title="Expand"><i class="fa fa-search"></i></a>
								<a href="gallery-single.html" title="Link"><i class="fa fa-external-link"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-4 col-xs-6 video">
						<div class="content-image-block">
							<img src="images/gallery-2.jpg" alt="gallery">
							<div class="content-block-hover">
								<h5>beach view</h5>
								<p>Victoria.</p>
								<a class="zoom" href="images/gallery-2.jpg" title="Expand"><i class="fa fa-search"></i></a>
								<a href="gallery-single.html" title="Link"><i class="fa fa-external-link"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-4 col-xs-6 photography">
						<div class="content-image-block">
							<img src="images/gallery-3.jpg" alt="gallery">
							<div class="content-block-hover">
								<h5>beach view</h5>
								<p>Victoria.</p>
								<a class="zoom" href="images/gallery-3.jpg" title="Expand"><i class="fa fa-search"></i></a>
								<a href="gallery-single.html" title="Link"><i class="fa fa-external-link"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-4 col-xs-6 design">
						<div class="content-image-block">
							<img src="images/gallery-4.jpg" alt="gallery">
							<div class="content-block-hover">
								<h5>beach view</h5>
								<p>Victoria.</p>
								<a class="zoom" href="images/gallery-4.jpg" title="Expand"><i class="fa fa-search"></i></a>
								<a href="gallery-single.html" title="Link"><i class="fa fa-external-link"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-4 col-xs-6 photography">
						<div class="content-image-block">
							<img src="images/gallery-5.jpg" alt="gallery">
							<div class="content-block-hover">
								<h5>beach view</h5>
								<p>Victoria.</p>
								<a class="zoom" href="images/gallery-5.jpg" title="Expand"><i class="fa fa-search"></i></a>
								<a href="gallery-single.html" title="Link"><i class="fa fa-external-link"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-4 col-xs-6 web">
						<div class="content-image-block">
							<img src="images/gallery-6.jpg" alt="gallery">
							<div class="content-block-hover">
								<h5>beach view</h5>
								<p>Victoria.</p>
								<a class="zoom" href="images/gallery-6.jpg" title="Expand"><i class="fa fa-search"></i></a>
								<a href="gallery-single.html" title="Link"><i class="fa fa-external-link"></i></a>
							</div>
						</div>
					</li>
				</ul>
				<nav class="ow-pagination text-center">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</nav>
			</div><!-- Container /- -->
		</div><!-- Gallery Section 1 -->
	</main>
    @endsection