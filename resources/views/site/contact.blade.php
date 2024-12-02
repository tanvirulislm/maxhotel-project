@extends('site.layout')
@section('content')
<main>
		<!-- Page Banner -->
		<div class="page-banner contact-banner container-fluid no-padding">
			<div class="banner-content">
				<h3>Contatct</h3>
				<ol class="breadcrumb">
					<li><a href="/" title="Home">Home</a></li>							
					<li class="active">Contatct</li>
				</ol>
			</div>
		</div><!-- Page Banner /- -->
		
		<!-- Contact Us -->
		<div class="contact-us container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="col-md-5 col-sm-5 com-xs-5">
					<div class="contact-header">
						<h3>Contact Us</h3>
						<p>Now were up in the big leagues getting' our turn at bat. Boy the way Glen Miller played. Songs that made the hit parade. Guys like us we had it made. </p>
					</div>
					<div class="contact-detail">
						<i class="icon icon-Pointer"></i>
						<h5>Meet us</h5>
						<p>09, Downtown St, Victoria, Australia.</p>
					</div>
					<div class="contact-detail">
						<i class="icon icon-Phone2"></i>
						<h5>Call us</h5>
						<p><a href="tel:(+01)1234567890" title="Phone" class="phone">(+01) 123 456 7890</a></p>
						<p><a href="tel:(+01)1234567898" title="Phone" class="phone">(+01) 123 456 7898</a></p>
					</div>
					<div class="contact-detail contact-mail">
						<i class="icon icon-Mail"></i>
						<h5>Mail us</h5>
						<p><a href="mailto:maxadmin@email.com" title="maxadmin@email.com">maxadmin@email.com</a></p>
						<p><a href="mailto:adminmax@email.com" title="adminmax@email.com">adminmax@email.com</a></p>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 com-xs-7">
					<div class="contact-header">
						<h3>Get in Touch with Us</h3>
					</div>
					<form class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 form-group">
							<input type="text" name="contact-name" class="form-control" id="input_name" placeholder="Name" required/>
						</div>
						<div class="col-md-6 col-sm-6	 col-xs-12 form-group">
							<input type="text" name="contact-email" class="form-control" id="input_email" placeholder="Email" required/>
						</div>
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<textarea placeholder="Message" id="textarea_message" name="contact-message" rows="5" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button title="SEND MESSAGE" type="submit" id="btn_submit" name="post">send message</button>
						</div>
						<div id="alert-msg" class="alert-msg"></div>
					</form>
				</div>
			</div><!-- Container /- -->
			<!-- Map Section -->
			<div class="map container-fluid no-padding">
				<div class="map-canvas" id="map-canvas-contact" data-lat="-36.622024" data-lng="143.257975" data-string="09, Downtown St, Victoria, Australia." data-zoom="10"></div>
			</div><!--  Map Section /- -->
		</div><!-- Contact Us -->
	</main>
	@endsection