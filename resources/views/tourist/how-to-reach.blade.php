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
				How to Reach
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
				कैसे पहुंचे
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
							<h2><span>How </span> to Reach</h2>
								<span class="b-line l-left mx-auto"></span>
								@endif
								@if( session('locale') == 'hi' ) 
								<h2><span>कैसे </span> पहुंचे </h2>
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
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (3).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Tourists can take a flight to Gwalior which is the nearest Airport to any of the three entrance gates of the Park – Tiktoli, Ahera, Peepal Bawadi. Gwalior, Kota and Jaipur cities have airports among which Jaipur has the best connectivity by flights to various parts of India. Similarly Gwalior, Sawai Madhopur, Kota, Jaipur and Jhansi are the nearest stations which provide rail connectivity to Kuno National park.
									</p>
									<p>
								 	<strong>Tiktoli Gate: </strong>Major Road distances(approximately) of Tiktoli gate from various cities as mentioned below: 
									</p>
									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">City</th>
											<th class="text-center">Distance</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>Shivpuri</td>
											<td>73 kms</td>
										</tr>
										<tr>
											<td>Sawai Madhopur</td>
											<td>133 kms</td>
										</tr>
										<tr>
											<td>Gwalior</td>
											<td>165 kms</td>  
										</tr>
										<tr>
											<td>Jhansi</td>
											<td>169 kms</td>  
										</tr>
										<tr>
											<td>Kota</td>
											<td>214 kms</td>  
										</tr>
										<tr>
											<td>Jaipur</td>
											<td>325 Kms</td>  
										</tr>										
										</tbody>
									</table>
									<p>
									<strong> Ahera Gate: </strong> Major road distances(approximately) of Ahera gate from various cities as mentioned below:
									</p>
									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">City</th>
											<th class="text-center">Distance</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>Shivpuri</td>
											<td>62 kms</td>
										</tr>
										<tr>
											<td>Sawai Madhopur</td>
											<td>145 kms</td>
										</tr>
										<tr>
											<td>Gwalior</td>
											<td>158 kms</td>  
										</tr>
										<tr>
											<td>Jhansi</td>
											<td>169 kms</td>  
										</tr>
										<tr>
											<td>Kota</td>
											<td>231 kms</td>  
										</tr>
										<tr>
											<td>Jaipur</td>
											<td>337 Kms</td>  
										</tr>										
										</tbody>
									</table>

									<p>
									<strong>Peepal Bawadi Gate: </strong> Major Road distances(approximately) of Peepal Bawadi gate from various cities as mentioned below:
									</p>
									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">City</th>
											<th class="text-center">Distance</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>Shivpuri</td>
											<td>73 kms</td>
										</tr>
										<tr>
											<td>Sawai Madhopur</td>
											<td>133 kms</td>
										</tr>
										<tr>
											<td>Gwalior</td>
											<td>158 kms</td>  
										</tr>
										<tr>
											<td>Jhansi</td>
											<td>169 kms</td>  
										</tr>
										<tr>
											<td>Kota</td>
											<td>292 kms</td>  
										</tr>
										<tr>
											<td>Jaipur</td>
											<td>378 Kms</td>  
										</tr>										
										</tbody>
									</table>
								@endif
								@if( session('locale') == 'hi' ) 
								<p>
								पर्यटक ग्वालियर तक हवाई यात्रा करके पहुँच सकते हैं जो पार्क के तीन प्रवेश द्वारों , टिकटोली, अहिरा, पीपल बावड़ी, से निकटतम हवाई अड्डा है | इसके अतिरिक्त  कोटा और जयपुर शहरों में 
									</p>
									<p>
								 	<strong>टिक्टोली गेट:  </strong>विभिन्न शहरों से टिकोली गेट की मुख्य सड़क दूरी (लगभग) नीचे बताए अनुसार:
									</p>
									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">शहर</th>
											<th class="text-center">दूरी</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>शिवपुरी</td>
											<td>73 kms</td>
										</tr>
										<tr>
											<td>सवाई माधोपुर</td>
											<td>133 kms</td>
										</tr>
										<tr>
											<td>ग्वालियर</td>
											<td>165 kms</td>  
										</tr>
										<tr>
											<td>झाँसी</td>
											<td>169 kms</td>  
										</tr>
										<tr>
											<td>कोटा</td>
											<td>214 kms</td>  
										</tr>
										<tr>
											<td>जयपुर</td>
											<td>325 Kms</td>  
										</tr>										
										</tbody>
									</table>
									<p>
									<strong> अहेरा गेट: </strong> विभिन्न शहरों से अहेरा गेट की मुख्य सड़क दूरी (लगभग) नीचे बताए अनुसार:
									</p>
									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">शहर</th>
											<th class="text-center">दूरी</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>शिवपुरी</td>
											<td>62 kms</td>
										</tr>
										<tr>
											<td>सवाई माधोपुर</td>
											<td>145 kms</td>
										</tr>
										<tr>
											<td>ग्वालियर</td>
											<td>158 kms</td>  
										</tr>
										<tr>
											<td>झाँसी</td>
											<td>169 kms</td>  
										</tr>
										<tr>
											<td>कोटा</td>
											<td>231 kms</td>  
										</tr>
										<tr>
											<td>जयपुर</td>
											<td>337 Kms</td>  
										</tr>										
										</tbody>
									</table>

									<p>
									<strong>पीपल बावड़ी गेट: </strong> विभिन्न शहरों से पीपल बावड़ी गेट की मुख्य सड़क दूरी (लगभग) नीचे बताए अनुसार:
									</p>
									<table class="table table-striped table-hover text-center ">
										<thead>
										<tr>
											<th class="text-center">शहर</th>
											<th class="text-center">दूरी</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>शिवपुरी</td>
											<td>73 kms</td>
										</tr>
										<tr>
											<td>सवाई माधोपुर</td>
											<td>133 kms</td>
										</tr>
										<tr>
											<td>ग्वालियर</td>
											<td>158 kms</td>  
										</tr>
										<tr>
											<td>झाँसी</td>
											<td>169 kms</td>  
										</tr>
										<tr>
											<td>कोटा</td>
											<td>292 kms</td>  
										</tr>
										<tr>
											<td>जयपुर</td>
											<td>378 Kms</td>  
										</tr>										
										</tbody>
									</table>
								@endif	
								</div>
								<!-- <div class="row mt-45 clearfix">
									<div class="col-md-12 col-lg-5">
									<img src="{{ asset('public/assets/images/about-intro/DJI_0472.JPG') }}" alt="">
									</div>
									<div class="col-md-12 col-lg-7 text-box">
										<div class="box-title mb-20 mt-sm-30 mt-xs-30">
											<h3>Aenean suscipit eget mi act</h3>
										</div>
										<div class="text-content">
											<p>
												Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
												Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
												Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget..
											</p>
										</div>
									</div>
								</div> -->

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Service Section end -->
			<!--End Contact-->


@endsection