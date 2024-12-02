@extends('site.layout')
@section('content')
<main>
		<!-- Page Banner -->
		<div class="page-banner blog-banner container-fluid no-padding">
			<div class="banner-content">
				<h3>Blog Single</h3>
				<ol class="breadcrumb">
					<li><a href="index.html" title="Home">Home</a></li>							
					<li><a href="blog.html" title="Gallery">Blog</a></li>							
					<li class="active">Blog Single</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		<!-- Container -->
		<div class="container">
			<!-- Content Area -->
			<div class="content-area blog-section blog-post col-md-8 col-sm-8 col-xs-12">
				<article class="type-post">
					<div class="entry-cover">
						<img alt="blog" src="images/blog-1.jpg" />
					</div>
					<div class="blog-content">
						<div class="entry-header">
							<div class="entry-meta">
								<div class="post-admin">By <a href="#" title="20 Comments">Admin</a></div>
								<div class="post-date"><a href="#" title="May 10, 2016">May 10, 2016</a></div>
							</div>
							<h3 class="entry-title">The mate was a mighty sailin' man the Skipper brave and sure. Five passengers set sail that day </h3>
						</div>
						<div class="entry-content">
							<p>On the most sensational inspirational celebrational Muppetational... This is what we call the Muppet Show." Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars. He's gainin' on you so you better look alive. He busy revin' up his Powerful Mach 5. That this group would somehow form a family that's the way we all became the Brady Bunch. Got kind of tired packin' and unpackin' - town to town and up and down the dial." That this group would somehow form a family that's the way we all became the Brady Bunch. Space. The final frontier. These are the voyages of the Starship Enterprise. The Love Boat soon will be making another run. The Love Boat promises something for everyone. And we'll do it our way yes our way. Make all our dreams come true for me and you. So join us here each week my friends you're sure.</p>
							<blockquote>
								"We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true"
							</blockquote>
							<p>Fleeing from the Cylon tyranny the last Battlestar - Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth. Then one day he was shootin' at some food and up through the ground came a bubblin' crude. Oil that is. Sunday Monday Happy Days. Tuesday Wednesday Happy Days. Thursday Friday Happy Days.Saturday what a day. Groovin' all week with you. The weather started getting rough.</p>
							<p>The tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow would be lost. Then one day he was shootin' at some food and up through the ground came a bubblin' crude. Oil that is. The year is 1987 and NASA launches the last of Americas deep space probes.</p>
						</div>
						<div class="social-share">
							<h5>Share It</h5>
							<ul> 
								<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</article>
				<!-- Comment Section -->
				<div class="comment-section">
					<div class="section-heading">
						<h3>Comments</h3>
					</div>
					<ul class="media-list">
						<li class="media">
							<div class="media-left">
								<a href="#" title="Chris Evans"><img src="images/avtar-1.jpg" alt="comment"></a>								
							</div>
							<div class="media-body">
								<div class="media-content">
									<h4 class="media-heading">Chris Evans</h4>
									<span>18 April, 2016</span>
									<p>Well we're movin' on up to the east side to a deluxe apartment in the sky. So this is the tale of our castaways they're here for a long long time.</p>
									<a href="#" title="Reply">Reply</a>
								</div> 
							</div>
						</li>
						<li class="media media-even">
							<div class="media-left">
								<a href="#" title="Ben Afflick"><img src="images/avtar-2.jpg" alt="comment"></a>
							</div>
							<div class="media-body">
								<div class="media-content">
									<h4 class="media-heading">Ben Afflick</h4>
									<span>17 April, 2016</span>
									<p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest</p>
									<a href="#" title="Reply">Reply</a>
								</div>
							</div>
						</li>
						<li class="media">
							<div class="media-left">
								<a href="#" title="Andrew Garfield"><img src="images/avtar-3.jpg" alt="comment"></a>
							</div>
							<div class="media-body">
								<div class="media-content">
									<h4 class="media-heading">Andrew Garfield</h4>
									<span>17 April, 2016</span>
									<p>It's a beautiful day in this neighborhood a beautiful day for a neighbor. Would you be mine? Could you be mine? Its a neighborly day in this </p>
									<a href="#" title="Reply">Reply</a>
								</div>
							</div>
						</li>
					</ul>
				</div><!-- Comment Section /- -->
				<!-- Comment Form -->
				<div class="comment-form">
					<div class="section-heading">
						<h3>Write Your Comments</h3>
					</div>
					<form class="row">
						<div class="form-group col-md-6">
							<input type="text" required="" placeholder="Name *" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<input type="text" required="" placeholder="EMail" class="form-control">
						</div>												
						<div class="form-group col-md-12">
							<textarea placeholder="Message *" rows="3" class="form-control"></textarea>
						</div>
						<input type="submit" title="post message" value="post message" name="post message">
					</form>
				</div><!-- Comment Form /- -->
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