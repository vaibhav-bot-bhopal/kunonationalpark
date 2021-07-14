@extends('layouts.front')

@section('content')

		<!-- CONTENT -->
			<!-- Intro Section -->
			<div class="page-header parallax">			

				@if( session('locale') == 'en' ) 
			<div class="container">
					<h1 class="title text-center">TOURIST INFORMATION </h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Tourist Information
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								Location
								</li>
							</ol>
						</nav>
					</div>
				</div>			
			@endif
			@if( session('locale') == 'hi' ) 
			<div class="container">
					<h1 class="title text-center"> पर्यटकों के लिए जानकारी </h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">होम</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								पर्यटकों के लिए जानकारी
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								स्थिति
								</li>
							</ol>
						</nav>
					</div>
				</div>
			@endif	

			</div>
			<!-- End Intro Section -->

			<div class="container pt-5">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="heading-box text-center">
							@if( session('locale') == 'en' ) 
								<h2><span></span> Location </h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span></span>स्थिति </h2>
								<span class="b-line l-left mx-auto"></span>
							@endif									
							</div>		
						</div>
					</div>
				</div>		
			<!--End Contact-->

			<!-- Service Section -->
			<div id="services-section" class="pt-5">
				<div class="container">
					<div class="row">
						
					@include('tourist.sidebar')

						<div class="col-lg-8 col-md-7">
							<div class="full-pic">
								<figure>
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (2).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>Introduction</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Kuno National Park is situated almost in the centre of Kuno Wildlife Division of Sheopur district and it is a part of the Central Indian Vindhyan Hills. On the north & west of Kuno Wildlife Division lies the Sheopur Division, in the East lie Sheopur & Shivpuri Division while in South it is flanked by Shivpuri Division.
									</p>
									<ul class="pl-3">
										<li>Latitude 250 30' 50.03'' to 260 05' 23.19" North</li>
										<li>Longitude 760 58' 37.45" to 770 20' 7.98" East</li>
									</ul>
									<p>
								 	<strong>There are three entrance gates for the Kuno National Park which are as follows:</strong>
									</p>
									<hr>
									<h4 class="text-center">Table 1 - Entrance Gate Information</h4>

									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">Entrance Gate</th>
											<th class="text-center">Location of the Gate</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>Tiktoli <br> (easy access from Sasaipura Village)</td>
											<td>Latitude 25 40' 03.68" N <br> Longitude77 10' 43.58" E</td>
										</tr>
										<tr>
											<td>Ahera <br>(easy access from Pohri Village)</td>
											<td>Latitude 25 40' 21.49" N <br>Longitude 77 16' 21.08" E</td>
										</tr>
										<tr>
											<td>Peepal Bawadi <br>(easy access from Aagra Village)</td>
											<td>Latitude 25 51' 47.4" N <br>Longitude77 12' 10.2" E</td>  
										</tr>
										</tbody>
									</table>
								@endif
								@if( session('locale') == 'hi' ) 
								<p>
								कुनो नेशनल पार्क श्योपुर जिले के कुनो वन्यजीव प्रभाग के केंद्र में स्थित है और यह मध्य भारतीय विंध्यन पहाड़ियों का एक हिस्सा है। कूनो वन्यजीव डिवीज़न के उत्तर और पश्चिम में श्योपुर डिवीजन है, पूर्व में श्योपुर और शिवपुरी डिवीजन है जबकि दक्षिण में यह शिवपुरी डिवीजन से घिरा हुआ है |
									</p>
									<p>
									राष्ट्रीय उद्यान की स्तिथि : 
									</p>
									<ul class="pl-3">
										<li>अक्षांश 250 30' 50.03'' से  260 05' 23.19" उत्तर</li>
										<li>देशांतर 760 58' 37.45"  से  770 20' 7.98" पूर्व</li>
									</ul>
									<p>
								 	<strong>कुनो नेशनल पार्क के लिए तीन प्रवेश द्वार हैं जो इस प्रकार हैं:</strong>
									</p>
									<hr>
									<h4 class="text-center">Table 1 - प्रवेश द्वार की जानकारी </h4>

									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">प्रवेश द्वार</th>
											<th class="text-center">स्थिति सूचना</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>टिकटोली द्वार <br> (ससैपुरा गाँव से पहुंचना आसान)</td>
											<td> अक्षांश 250 40' 03.68" उ <br> देशांतर 770 10' 43.58" पू </td>
										</tr>
										<tr>
											<td>अहेरा द्वार <br>(पोहरी गाँव से पहुंचना आसान)</td>
											<td> अक्षांश 250  40' 21.49" उ <br>देशांतर 77 16' 21.08" पू </td>
										</tr>
										<tr>
											<td>पीपल बावड़ी <br>( आगरा गाँव से पहुंचना आसान)</td>
											<td> अक्षांश 250 51' 47.4" उ <br>देशांतर 770 12' 10.2" पू </td>  
										</tr>
										</tbody>
									</table>
								@endif	
																	
								</div>								

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Service Section end -->
			<!--End Contact-->


@endsection