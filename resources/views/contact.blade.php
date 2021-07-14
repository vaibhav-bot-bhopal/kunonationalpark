@extends('layouts.front')

@section('content')

	<!-- CONTENT -->
						<!-- Intro Section -->
						<div class="page-header parallax">			

@if( session('locale') == 'en' ) 
<div class="container">
	<h1 class="title text-center">CONTACT US</h1>
</div>
<div class="breadcrumb-box">
	<div class="container" style="display: flex; justify-content: center;">
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					Contact Us
				</li>	
			</ol>
		</nav>
	</div>
</div>			
@endif
@if( session('locale') == 'hi' ) 
<div class="container">
	<h1 class="title text-center"> संपर्क करें </h1>
</div>
<div class="breadcrumb-box">
	<div class="container" style="display: flex; justify-content: center;">
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#">होम</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
				संपर्क करें
				</li>		
			</ol>
		</nav>
	</div>
</div>
@endif	

</div>
<!-- End Intro Section -->
			
			<!-- Contact Section -->
				<section class="padding ptb-xs-60">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-8 offset-md-2 text-center">
							<div class="heading-box pb-30">
							@if( session('locale') == 'en' ) 
							<h2 class="text-center"><span>Kuno</span> National Park</h2>
								<span class="b-line"></span>
							@endif
							@if( session('locale') == 'hi' ) 
							<h2 class="text-center"><span>कूनो </span> नेशनल पार्क</h2>
								<span class="b-line"></span>
							@endif
							</div>
							<p class="lead">
								
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 contact pb-60 pt-30">
							<div class="row text-center">
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">07530 – 220004 , <br> 9424791938, 8871187201</a>
								</div>
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-ios-location icon-circle pos-s"></i>
									<p  class="mt-15">
									Office of DFO Kuno Wildlife Division 
										<br />
										Sheopur MP - 476337
									</p>
								</div>
								<div class="col-sm-4 pb-xs-30">
									<i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:dfokunowls@mp.gov.in"  class="mt-15 i-block">dfokunowls@mp.gov.in</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Map Section -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.1534351509895!2d77.43063691501564!3d25.49992888375629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3970ecd302182c79%3A0xff66def2b198a6f4!2sKuno%20Wildlife%20Sanctuary!5e0!3m2!1sen!2sin!4v1596711821804!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
				<!-- Map Section -->				
			</section>
			<div class="container">				
					<div class="row">
						<div class="col-sm-12">
							<div class="headeing pb-20 text-center">
							@if( session('locale') == 'en' ) 
								<h2>Contact Us</h2>
								<span class="b-line"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2>संपर्क करें</h2>
								<span class="b-line"></span>
							@endif								
							</div>
							<p class="text-center">
								
							</p>
							<!-- Contact FORM -->
							<form class="contact-form mt-45" id="contact">
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong> for using our template. Your message has been sent.
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-md-12 col-lg-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
										</div>
									</div>
									<div class="col-md-12 col-lg-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message" ></textarea>
										</div>
									</div>
									<div class="col-sm-12 mt-30 text-center">
										<button class="btn-text" type="button" id="submit" name="button">
										@if( session('locale') == 'en' ) 	
											Send Message
										@endif
										@if( session('locale') == 'hi' ) 											
											संदेश भेजें
										@endif
										</button>							

									</div>
								</div>
							</form>
							<!-- END Contact FORM -->
						</div>
					</div>
				
			</div>
			<!-- Contact Section -->


@endsection