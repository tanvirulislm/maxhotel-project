@extends('site.layout')

@section('content')
<main>
		<!-- Page Banner -->
		<div class="page-banner gallery-banner container-fluid no-padding">
			<div class="banner-content">
				<h3>404</h3>
				<ol class="breadcrumb">
					<li><a href="index.html" title="Home">Home</a></li>							
					<li class="active">404</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<!-- Error Page -->
		<div class="error-page container-fluid">
			<!-- Container -->
			<div class="container">
				<div class="error-code">
					<h3>#404</h3>
				</div>
				<div class="error-content">
					<p>Oops! Page Not Found!</p> 
					<p>Try to Search for the Best Match or Visit our Home Page</p>
					<a href="/"><i class="icon icon-House"></i>Go to Home</a>
				</div>
			</div><!-- Container /- -->
		</div><!-- Error Page /- -->
	</main>

@endsection