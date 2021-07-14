@extends('layouts.front')

@section('content')

		<style>
			.parallax {
					position: relative;
					background: url({{ asset('public/assets/images/banner/banner_img1.webp') }}) no-repeat;
					background-size: cover;
					width: 100%;
					background-attachment: fixed;
					background-position: center center;
				}
		</style>
		
		<!-- CONTENT -->	
			<!-- Intro Section -->
			<div class="page-header parallax">
			
			@if( session('locale') == 'en' ) 
			<div class="container">
					<h1 class="title text-center">ABOUT KUNO</h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									About Kuno
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Introduction
								</li>
							</ol>
						</nav>
					</div>
				</div>			
			@endif
			@if( session('locale') == 'hi' ) 
			<div class="container">
					<h1 class="title text-center"> कूनो के बारे में</h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">होम</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								कूनो के बारे में
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								परिचय
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
								<h2><span></span> Introduction </h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span>पार्क </span>  का परिचय </h2>
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

					@include('about.sidebar')

						<div class="col-lg-8 col-md-7">
							<div class="full-pic">
								<figure>
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (1).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>Introduction</h2>
								</div> -->				

								<div class="text-content text-justify">

								@if( session('locale') == 'en' ) 
								<p>
									Kuno National Park of Madhya Pradesh is one the most unique destination for all wildlife lovers
and enthusiasts. As soon as one ventures inside this park they experience the exclusive forest of
Kardhai, Khair and Salai and one can see wildlife by the dozens foraging across vast meadows. Some
grasslands here are bigger than most at Kanha or Bandhavgarh Tiger Reserve.

									</p>
									<p>
									It is widely believed that Kardhai tree, which is found in abundance here, turns green even with just
presence of humidity in atmosphere, even before the arrival of first monsoon showers. In many
ways it represents the true spirit of Kuno’s – its never say die attitude and the ability to survive and
ultimately grow despite many challenges this forest has overcome. 
									</p>
									<p>
									This area which has become a National Park today started out as a sanctuary of about 350 sq. kms.
And was in shape of a leaf with Kuno river forming the main centre spine. This river not only helps in
keeping a constant water supply in the area and irrigating the forest from inside out but also gave
this protected area its name. Since the project of reintroduction of Asiatic Lions has been on going
for a while and one of the preconditions as raised by concerned authorities about the status of this
protected area as Sanctuary not being worthy of hosting the lions, was upgraded to National Park
while adding another about 400 sq kms to it and it is now 748 sq km of pristine forest area. The park
lies within the larger Kuno Wildlife Division which has a total area of 1235 sq. km.
									</p>
								@endif
								@if( session('locale') == 'hi' ) 
									<p>
									मध्य प्रदेश का कुनो राष्ट्रीय अभ्यारण सभी वन्यजीव प्रेमियों और उत्साही लोगों के लिए सबसे अनूठा गंतव्य है। कुनो मैं प्रवेश करते ही करधई, खैर और सलाई की बहुतायत वाले अनूठे जंगल का अनुभव करते हैं और विशाल घास के मैदानों में दर्जनों की संख्या में घास चरते हुए वन्यजीव देख सकते हैं। यहां के कुछ घास के मैदान तो कान्हा या बांधवगढ़ टाइगर रिजर्व में पाए जाने वाले मैदानों से भी बड़े हैं।
									</p>
									<p>
									यह व्यापक रूप से माना जाता है कि करधई के पेड़, जो यहां बहुतायत में पाए जाते हैं, मानसून वर्षा के आगमन से पहले ही वातावरण में नमी की उपस्थिति से ही हरा हो जाते हैं। कई मायनों में यह कुनो की सच्ची भावना का प्रतिनिधित्व भी करता है - कभी भी हार नहीं मानने का रवैया और कठिनाई में भी जीवित रहने की क्षमता और अंततः कई चुनौतियों के बावजूद बढ़ने की क्षमता - जो इस जंगल की असल कहानी को दोहराता है।
									</p>
									<p>
									यह क्षेत्र जो आज एक राष्ट्रीय उद्यान बन गया है, लगभग 350 वर्ग किलोमीटर के अभयारण्य के रूप में शुरू हुआ था और एक पत्ती के आकार का था जिसके बीचों - बीच में एक रीढ़ की हड्डी की तरह कुनो नदी | यह नदी न केवल जंगल में एक निरंतर पानी की आपूर्ति रखने और जंगल की सिंचाई करने में मदद करती है, बल्कि इस संरक्षित क्षेत्र को अपना नाम भी दिया है। जब एशियाई सिंहों के पुनर्वास का प्रोजेक्ट शुरू किया गया तो एक इस संरक्षित क्षेत्र की स्थिति के बारे में संशय था की केवल अभयारण्य होने की वजह से यह क्षेत्र सिंहों की मेजबानी करने के योग्य नहीं है | अब इस क्षेत्र मैं 400 वर्ग किलोमीटर का भाग जोड़ कर  इसे कुल 748 वर्ग किलोमीटर का राष्ट्रीय उद्यान का दर्जा दे दिया गया है।
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