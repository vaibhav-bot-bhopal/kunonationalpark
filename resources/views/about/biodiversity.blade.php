@extends('layouts.front')

@section('content')

		<!-- CONTENT -->
			<!-- Intro Section -->
			<div class="page-header parallax">
				<div class="container">
					<h1 class="title text-center">ABOUT KUNO</h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item text-center">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									About Kuno
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Biodiversity
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<!-- End Intro Section -->

			<div class="container pt-5">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="heading-box text-center">
							@if( session('locale') == 'en' ) 
							<h2><span></span> Biodiversity</h2>
								<span class="b-line l-left mx-auto"></span>
								@endif
								@if( session('locale') == 'hi' ) 
								<h2><span>पार्क </span> जैव विविधता</h2>
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
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (4).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Kuno National Park which is mainly dominated by Kardhai, Salai, Khair trees among the mixed forests, supports a vide variety of both floral and faunal species. It has a rich biodiversity having a total of 123 species of trees , 71 species of shrubs , 32 species of climbers & exotic species, 34 species of bamboos and grasses, 33 species of mammals, 206 species of birds, 14 species of fishes, 33 species of reptiles and 10 species of amphibians. Such a high number of both floral and faunal species make it one of the most biodiverse areas of Central Indian Landscape.
									</p>
									<p>									
								<strong>Main Faunal Species of general tourist interest which are found in Kuno National Park are: </strong>
									</p>
									<ul class="pl-3">
										<li>Spotted deer or Chital (Axis axis)</li>
										<li>Sambar (Cervus unicolor)</li>
										<li>Barking deer or Indian Muntjac (Muntiacus muntjak)</li>
										<li>Chousingha or Four-horned antilope (Tetracerus quadricornis)</li>
										<li>Nilgai or Blue bull (Boselaphus tragocamelus)</li>
										<li>Indian Gazelle or Chinkara (Gazella gazella)</li>
										<li>Black buck (Antilope cervicapra)</li>
										<li>Gaur or Indian Bison (Bos gaurus)</li>
										<li>Leopard (Panthera pardus)</li>
										<li>Wild dog or Dhole (Cuonal pinus)</li>
										<li>Striped Hyaena (Hyaena hyaena)</li>
										<li>Indian Wolf (Canis lupus)</li>
										<li>Jackal (Canis aureus)</li>
										<li>Wild boar (Sus scrofa)</li>
										<li>Sloth bear (Melursus ursinus)</li>
										<li>Indian fox (Vulpes bengalensis)</li>
										<li>Jungle cat (Felius chaus)</li>
										<li>Desert cat (Felin sylvestris)</li>
										<li>Common palm civet (Paradoxurus hermaphroditus)</li>
										<li>Small Indian civet (Viverricula indica)</li>
										<li>Grey mongoose (Herpestes edwardsii)</li>
										<li>Small indian mongoose (Herpestes javanicus)</li>
										<li>Ruddy mongoose (Herpestes smithii)</li>
										<li>Indian hare (Lepus nigricollis)</li>
										<li>Indian porcupine (Hystrix indica)</li>
										<li>Indian gerbil (Tatera indica)</li>
										<li>Indian tree shrew (Tupaia belangeri)</li>
										<li>Hanuman langur/Common langur (Presbytis entellus)</li>
										<li>Rhesus monkey (Macaque mulata)</li>
									</ul>
								@endif
								@if( session('locale') == 'hi' ) 
								<p>
								कुनो नेशनल पार्क, जहाँ मुख्य रूप से मिश्रित जंगलों के बीच करधई, सलाई, खैर के पेड़ों का वर्चस्व है, वनस्पतियों और वन्य जीवों दोनों ही की बहुत सारी प्रजातियों का समर्थन करता है। यहाँ वृक्षों की कुल 123 प्रजातियों, झाड़ियों की 71 प्रजातियों, बेलों और विदेशी वनस्पति की 32 प्रजातियाँ, बांस और घास की 34 प्रजातियों, स्तनधारियों की 33 प्रजातियाँ, पक्षियों की 206 प्रजातियाँ, मछलियों की 14 प्रजातियाँ, सरीसृपों की 33 प्रजातियाँ और उभयचरों की 10 प्रजातियाँ पाई जाती हैं | इस प्रकार यहाँ एक समृद्ध जैव विविधता है। वनस्पतियों और वन्य जीवों की प्रजातियों की इतनी अधिक संख्या इसे मध्य भारतीय लैंडस्केप के सबसे जैवविविध क्षेत्रों में से एक बनाती है।
									</p>
									<p>									
								<strong>कुनो राष्ट्रीय उद्यान में पाए जाने वाले मुख्य प्रजातियाँ हैं: </strong>
									</p>
									<ul class="pl-3">
									<li>Spotted deer or Chital (Axis axis)</li>
										<li>Sambar (Cervus unicolor)</li>
										<li>Barking deer or Indian Muntjac (Muntiacus muntjak)</li>
										<li>Chousingha or Four-horned antilope (Tetracerus quadricornis)</li>
										<li>Nilgai or Blue bull (Boselaphus tragocamelus)</li>
										<li>Indian Gazelle or Chinkara (Gazella gazella)</li>
										<li>Black buck (Antilope cervicapra)</li>
										<li>Gaur or Indian Bison (Bos gaurus)</li>
										<li>Leopard (Panthera pardus)</li>
										<li>Wild dog or Dhole (Cuonal pinus)</li>
										<li>Striped Hyaena (Hyaena hyaena)</li>
										<li>Indian Wolf (Canis lupus)</li>
										<li>Jackal (Canis aureus)</li>
										<li>Wild boar (Sus scrofa)</li>
										<li>Sloth bear (Melursus ursinus)</li>
										<li>Indian fox (Vulpes bengalensis)</li>
										<li>Jungle cat (Felius chaus)</li>
										<li>Desert cat (Felin sylvestris)</li>
										<li>Common palm civet (Paradoxurus hermaphroditus)</li>
										<li>Small Indian civet (Viverricula indica)</li>
										<li>Grey mongoose (Herpestes edwardsii)</li>
										<li>Small indian mongoose (Herpestes javanicus)</li>
										<li>Ruddy mongoose (Herpestes smithii)</li>
										<li>Indian hare (Lepus nigricollis)</li>
										<li>Indian porcupine (Hystrix indica)</li>
										<li>Indian gerbil (Tatera indica)</li>
										<li>Indian tree shrew (Tupaia belangeri)</li>
										<li>Hanuman langur/Common langur (Presbytis entellus)</li>
										<li>Rhesus monkey (Macaque mulata)</li>
									</ul>
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