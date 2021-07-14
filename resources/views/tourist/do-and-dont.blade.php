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
								Do(s) and Don't(s)
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
								क्या करें क्या ना करें
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
								<h2><span>Do(s) </span> and Don't(s)</h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span>क्या करें  </span> क्या न करें </h2>
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
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (4).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<div class="row">
									<div class="col-md-6" style="border:1px dotted grey;">
										<h4 class="text-center">Do(s)</h4>
										<hr>
									<ul>
										<li>Abide by the Park rules. Non-obedience can lead to legal action.</li>
										<li>Obtain a Valid Permit before entering the Park</li>
										<li>Don’t ask the Driver to drive the vehicle fast Recommended speed inside the park - 20 km/h.</li>
										<li>It is compulsory to take official guide with every vehicle.</li>
										<li>Always obey the Guide. It is for your own safety.</li>
										<li>Animals have the right of the way. Wait if they are crossing the road.</li>
										<li>Always carry drinking water with you.</li>
										<li>Maintain silence and discipline inside the park. It will enhance your experience during the visit.</li>
										<li>Inform any undesirable or suspicious activities seen during excursion to the nearest forest officer/employee.</li>
										<li>Wear light-coloured clothes blended with nature during excursion.</li>
									</ul>
									</div>
									<div class="col-md-6" style="border:1px dotted grey;">
									<h4 class="text-center">Don’t(s)</h4>
									<hr>
									<ul>
										<li>Don't enter the Park with fire arms/explosives.</li>
										<li>Don't carry cigarette or match box.</li>
										<li>Don’t smoke or lit fire, it can cause forest fire.</li>
										<li>Don't carry or play transistor or tape recorder or any other musical gadget.</li>
										<li>Don't blow horn.</li>
										<li>Don't litter with cans, bottles, plastic bags or any garbage inside the park. Dispose off any garbage once you come out.</li>
										<li>Don't get down, unless told by the guide.</li>
										<li>Don't extract/remove any kind forest property.</li>
										<li>Don't chase or tease or feed animals.</li>
										<li>Don't shoot with gun, shoot with camera.</li>
										<li>Don’t make noises.</li>
										<li>Don’t apply strong smelling perfumes or deodorants. Animals are sensitive to smell. A strong fragrance may also attract bees or other insects to you.</li>
									</ul>
									</div>
								</div>	
								@endif
								@if( session('locale') == 'hi' ) 
								<div class="row">
									<div class="col-md-6" style="border:1px dotted grey;">
										<h4 class="text-center">क्या करें </h4>
										<hr>
									<ul>
										<li>पार्क के नियमों का पालन करें। गैर-आज्ञाकारिता कानूनी कार्रवाई का कारण बन सकती है।</li>
										<li>पार्क में प्रवेश करने से पहले एक वैध परमिट प्राप्त करें</li>
										<li>वाहन चालक से पार्क के अंदर वाहन को तेज गति से चलाने की सलाह ना दें – पार्क के अन्दर वहां को 20 किमी / घंटा की गति से चलने जाने का सुझाव दिया जाता है </li>
										<li>हर वाहन के साथ आधिकारिक गाइड लेना </li>
										<li>जानवरों को रास्ते का अधिकार है। अगर वे सड़क पार कर रहे हैं तो उन्हें पहले जाने दें </li>
										<li>हमेशा पीने का पानी अपने साथ रखें</li>
										<li>पार्क के अंदर शांत रहें और अनुशासन बनाए रखें। यह यात्रा के दौरान आपके अनुभव को बढ़ाएगा।</li>
										<li>निकटतम वन अधिकारी / कर्मचारी को भ्रमण के दौरान देखी गई किसी अवांछनीय या संदिग्ध गतिविधियों की सूचना दें </li>
										<li>हल्के रंग के कपड़े पहनें जो प्राकर्तिक रंगों से मेल खाते हों ।</li>										
									</ul>
									</div>
									<div class="col-md-6" style="border:1px dotted grey;">
									<h4 class="text-center">क्या न करें </h4>
									<hr>
									<ul>
										<li>हथियार / विस्फोटक के साथ पार्क में प्रवेश न करें।</li>
										<li>सिगरेट या माचिस न ले जाएँ ।</li>
										<li>धूम्रपान न करें और ना ही आग जलाएं, इससे जंगल में आग लग सकती है।</li>
										<li>ट्रांजिस्टर या टेप रिकॉर्डर या किसी अन्य संगीत गैजेट को न चलाएं।</li>
										<li>हॉर्न न बजाएं।</li>
										<li>डिब्बे, बोतलें, प्लास्टिक की थैलियों या पार्क के अंदर किसी भी कूड़े से कूड़ा न डालें। बाहर किसी भी प्रकार की वन संपदा को न निकालें। </li>
										<li>जानवरों का पीछा या चिढ़ाना या उन्हें तंग न करें।</li>
										<li>शोर न करें।</li>
										<li>बेहतर होगा की इत्र या डियोड्रेंट का उपयोग ना करें | सभी वन्य जीव, चिड़ियाँ और कीड़े किसी भी प्रकार की गंध के प्रति बहुत संवेदनशील होते हैं। इत्र या डियोड्रेंट की खुशबू मधुमक्खियों या अन्य कीड़ों को भी आपकी ओर आकर्षित कर सकती है।</li>										
									</ul>
									</div>
								</div>	
								<div class="row">
								<div class="col-12">
								<h4 class="text-center mt-4">बंदूक नहीं,  कैमरा चलाइए |</h4>
								</div>
								</div>
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