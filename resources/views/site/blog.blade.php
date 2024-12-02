@extends('site.layout')

@section('content')
	<main>
		<!-- Page Banner -->
		<div class="page-banner blog-banner container-fluid no-padding">
			<div class="banner-content">
				<h3>Blog</h3>
				<ol class="breadcrumb">
					<li><a href="index.html" title="Home">Home</a></li>							
					<li class="active">Blog</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		<!-- Container -->
		<div class="container">
			<!-- Content Area -->
			<div class="content-area blog-section col-md-8 col-sm-8 col-xs-12">
				<article class="type-post">
					<div class="entry-cover">
						<a title="Blog" href="blog-post.html">
							<img alt="blog" src="images/blog-1.jpg" />
						</a>
					</div>
					<div class="blog-content">
						<div class="entry-header">
							<div class="entry-meta">
								<div class="post-admin">By <a href="#" title="20 Comments">Admin</a></div>
								<div class="post-date"><a href="#" title="May 10, 2016">May 10, 2016</a></div>
							</div>
							<h3 class="entry-title"><a title="The mate was a mighty sailin' man the Skipper brave and sure. Five passengers set sail that day " href="blog-post.html">The mate was a mighty sailin' man the Skipper brave and sure. Five passengers set sail that day </a></h3>
						</div>
						<div class="entry-content">
							<p>These are the voyages of the Starship Enterprise. All of them had hair of gold like their mother the youngest one in curls. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Now the world don't move to the beat of just drum. What might be right for you may not be right for some.</p>
						</div>
						<a href="blog-post.html" class="read-more"><i class="fa fa-angle-right"></i></a>
					</div>
				</article>
				
				<article class="type-post">
					<div class="entry-cover">
						<a title="Blog" href="blog-post.html">
							<img alt="blog" src="images/blog-2.jpg" />
						</a>
					</div>
					<div class="blog-content">
						<div class="entry-header">
							<div class="entry-meta">
								<div class="post-admin">By <a href="#" title="20 Comments">Admin</a></div>
								<div class="post-date"><a href="#" title="May 10, 2016">May 10, 2016</a></div>
							</div>
							<h3 class="entry-title"><a title="Would you be mine? Could you be mine? Its a neighborly day in this beautywood a neighborly day for a beauty." href="blog-post.html">Would you be mine? Could you be mine? Its a neighborly day in this beautywood a neighborly day for a beauty. </a></h3>
						</div>
						<div class="entry-content">
							<p>These are the voyages of the Starship Enterprise. All of them had hair of gold like their mother the youngest one in curls. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Now the world don't move to the beat of just drum. What might be right for you may not be right for some.</p>
						</div>
						<a href="blog-post.html" class="read-more"><i class="fa fa-angle-right"></i></a>
					</div>
				</article>
				
				<article class="type-post">
					<div class="entry-cover">
						<a title="Blog" href="blog-post.html">
							<img alt="blog" src="images/blog-3.jpg" />
						</a>
					</div>
					<div class="blog-content">
						<div class="entry-header">
							<div class="entry-meta">
								<div class="post-admin">By <a href="#" title="20 Comments">Admin</a></div>
								<div class="post-date"><a href="#" title="May 10, 2016">May 09, 2016</a></div>
							</div>
							<h3 class="entry-title"><a title="The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless" href="blog-post.html">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless</a></h3>
						</div>
						<div class="entry-content">
							<p>These are the voyages of the Starship Enterprise. All of them had hair of gold like their mother the youngest one in curls. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Now the world don't move to the beat of just drum. What might be right for you may not be right for some.</p>
						</div>
						<a href="blog-post.html" class="read-more"><i class="fa fa-angle-right"></i></a>
					</div>
				</article>
				<nav class="ow-pagination text-center">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</nav>
			</div><!-- Content Area /- -->
			
			<!-- Widget Area -->
			<div class="col-md-4 col-sm-4 col-xs-12 widget-area">
				<!-- Widget Search -->
				<aside class="widget widget_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search Here">
						<span class="input-group-btn">
							<button class="btn btn-search" title="Search" type="button"><i class="icon icon-Search"></i></button>
						</span>
					</div>
				</aside><!-- Widget Search /- -->
				<!-- Widget Categories -->
				<aside class="widget widget_categories">
					<h3 class="widget-title">Categories</h3>
					<ul>
						<li><a href="#" title="Best Destination">Best Destination</a></li>
						<li><a href="#" title="Family Destination">Family Destination</a></li>
						<li><a href="#" title="Costly Destination">Costly Destination</a></li>
						<li><a href="#" title="Office Cleaning">Family Packages</a></li>
						<li><a href="#" title="World Tour">World Tour</a></li>
					</ul>
				</aside><!-- Widget Categories /-  -->
				<!-- Widget Latest Post -->
				<aside class="widget widget_latestposts">
					<h3 class="widget-title">Latest Posts</h3>
					<div class="latest-content">
						<a href="blog-post.html" title="Recent Posts"><i><img alt="thumb" src="images/latest-post-1.jpg"></i></a>
						<h5><a title="Now the world don't move to the beat of just drum" href="blog-post.html">Now the world don't move to the beat of just drum</a></h5>
						<span>May 14, 2016</span>
					</div>
					<div class="latest-content">
						<a href="blog-post.html" title="Recent Posts"><i><img alt="thumb" src="images/latest-post-2.jpg"></i></a>
						<h5><a title="Now the world don't move to the beat of just drum" href="blog-post.html">Now the world don't move to the beat of just drum</a></h5>
						<span>May 14, 2016</span>
					</div>
				</aside><!-- Widget Latest Post /- -->
				<!-- Widget Tags -->
				<aside class="widget widget_tags">
					<h3 class="widget-title">popular tags</h3>
					<a href="#" title="Rooms">Rooms</a>
					<a href="#" title="Packages">Packages</a>
					<a href="#" title="Resorts">Resorts</a>
					<a href="#" title="Travels">Travels</a>
					<a href="#" title="Food">Food</a>
				</aside><!-- Widget Tags /- -->
			</div><!-- Widget Area /- -->
		</div><!-- Container /- -->
	</main>
	@endsection