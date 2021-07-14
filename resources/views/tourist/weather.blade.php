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
				Weather
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
				मौसम
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
								<h2><span></span> Weather</h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span></span> मौसम</h2>
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
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (5).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Kuno National Park comes under the Tropical regions and so does its climate. The mean temperature and precipitation of this park is 24.7 degree Celcius amd 764 mm respectively. This park is situated at 180 meters at its lowest and 500 meters above mean sea level at its highest point.
									</p>
									<p>
									Mid June to September are considered as the Monsoon season when almost 90% of its total rainfall occurs. The maximum rainfall recorded in Kuno was 1318.2 mm in 1956 and minimum rainfall recorded was 227.5 mm in the year 1971. August is the wettest month which receives 30.4 cm of rainfall on an average.
									</p>
									<p>
									October to mid March are considered as the winter season. December and January months are specifically chilly with average minimum temperatue of 7.27 & 6.3 degree celcius respectively.
									</p>
									<p>
									Mid March to Mid June are typically hot summer months with max. average temperature recorded of 42.3 degree celcius. Entire area is very hot during the month of May till mid June in general with few days even experience dry dusty strong winds as well.
									</p>
									<p>
									Best Time to Visit: Mid November to Mid March.
									</p>
								@endif
								@if( session('locale') == 'hi' ) 
									<p>
									कूनो नेशनल पार्क उष्णकटिबंधीय क्षेत्रों (Tropical region) के अंतर्गत आता है और इसलिए इसकी जलवायु भी उष्णकटिबंधीय (Tropical) ही है। इस पार्क का औसत तापमान और वर्षा क्रमश: 24.7 डिग्री सेल्युकस और  764 मिमी है। यह पार्क समुद्र तल से 180 मीटर न्यूनतम से 500 मीटर अधिकतम स्थित है।
									</p>
									<p>
									जून से सितंबर के मध्य तक मानसून के मौसम के रूप में माना जाता है और इस दौरान कुनो अक्टूबर से मध्य मार्च को सर्दियों का मौसम माना जाता है। दिसंबर और जनवरी महीने में  विशेष रूप बहुत सर्दी होती है और इन दोनों महिनोए में क्रमशः 7.27 और 6.3 ६.६ डिग्री सेल्सियस का औसत न्यूनतम रहता है | 
									</p>
									<p>
									मार्च से मध्य जून तक आम तौर पर गर्मी के महीने होते हैं। औसत तापमान 42.3 डिग्री सेल्सियस रहता हे  मई  और  पूरे जून महीने में मध्य क्षेत्र बहुत गर्म होता है, साथ ही कुछ दिनों तक शुष्क धूल भरी तेज हवाओं का भी अनुभव होता है।
									</p>
									<p>
									पर्यटन हेतु उपयुक्त समय : मध्य नवेम्बर से मध्य मार्च 
									</p>
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