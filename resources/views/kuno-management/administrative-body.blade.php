@extends('layouts.front')

@section('content')

		<!-- CONTENT -->
			<!-- Intro Section -->
			<div class="page-header parallax">			

				@if( session('locale') == 'en' ) 
			<div class="container">
					<h1 class="title text-center">KUNO MANAGEMENT</h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Kuno management
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								Administrative Body 
								</li>
							</ol>
						</nav>
					</div>
				</div>			
			@endif
			@if( session('locale') == 'hi' ) 
			<div class="container">
					<h1 class="title text-center"> कूनो प्रबंधन </h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">होम</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								कूनो प्रबंधन 
								</li>
								<li class="breadcrumb-item active" aria-current="page">
								प्रशासनिक दल
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
								<h2><span>Administrative </span> Body</h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span>प्रशासनिक </span> दल</h2>
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

					@include('kuno-management.sidebar')

						<div class="col-lg-8 col-md-7">
							<div class="full-pic">
								<figure>
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (6).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<div class="box-title mb-20">
								{{--	<h2>History</h2> --}}
								</div>
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									The administrative body of Kuno National Park is headed by the Divisional Forest Officer, a senior forest officer, who is supported by the Sub Divisional Forest Officer.
									</p>
									<p>
									Kuno has the distinction of being an alternate site for getting the Asiatic Lions to be translocated and being a National Park, thus the administrative body has formed in such a way to have all the expertise to cater to all the aspects of management. The look after the health management of animals of the park, a trained veterinary doctor is also available in the park with expertise in Wildlife health care and management.
									</p>
									<p>
									Clerical staff comprising of the posts of Head clerk, lekhapal, Draftsman The field staff has Range Officers, Deputy Rangers, Foresters, Forest Guards along with other ground staff and the office staff to provide support to the management.
									</p>
								@endif
								@if( session('locale') == 'hi' ) 
									<p>
									कूनो राष्ट्रीय उद्यान के प्रशासनिक दल का नेतृत्व डी. ऍफ़ . ओ . करते हैं, जो की  एक वरिष्ठ वन अधिकारी होते हैं,  और इनके सहयोग के लिए उप प्रभागीय वनाधिकारी पदस्थ होते हैं ।
									</p>
									<p>
									कूनो को एशियाई शेरों के पुनर्स्थापन के लिए वैकल्पिक स्थल चयनित होने और नेशनल पार्क होने का गौरव प्राप्त है, इस कारण वन्य जीव प्रबंधन के सभी पहलुओं को पूरा करने की विशेषज्ञता रखे जाने योग्य सम्पूर्ण दल का गठन किया गया है। पार्क के जानवरों के स्वास्थ्य का प्रबंधन देखने, उनकी देखभाल के लिए एक प्रशिक्षित पशु चिकित्सक भी पार्क में उपलब्ध है।
									</p>
									<p>
									लिपिक कर्मचारी जिनमें हेड क्लर्क, लेखपाल, ड्राफ्ट्समैन के पद शामिल हैं, फील्ड स्टाफ में रेंज ऑफिसर, डिप्टी रेंजर्स, फॉरेस्टर, फारेस्ट गार्ड्स के साथ-साथ अन्य ग्राउंड स्टाफ और ऑफिस स्टॉफ हैं, जो प्रबंधन को सहायता प्रदान करते हैं।
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