@extends('layouts.front')

@section('content')

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
								Significance
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
								पार्क का महत्व
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
								<h2><span></span> Significance </h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span>पार्क </span> का महत्व </h2>
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
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (3).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>Significance</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									The area surrounding Kuno river has been rich in biodiversity since ancient times. Its importance can be reflected in the 30,000-year-old cave paintings in nearby Pahargarh depicting multiple wild animals.
									</p>
									<p>
									Government of Madhya Pradesh realising the significance of this place established the Kuno Wildlife Sanctuary of about 345 square km in 1981 within a larger forest area of approximately 3300 square km. To further strengthen the Wildlife conservation and ensure proper management of this area an additional approx. 891 square km was later added as the buffer to establish the Kuno Wildlife Division of 1235 square km in 2002.
									</p>
									<p>
									Biogeographically this area falls under the Kathiawar-Gir dry deciduous forest eco-region and the forest types found in this area include the Northern tropical dry deciduous forest, Southern tropical dry deciduous forest, Dry Savannah forest & grassland, Tropical riverine forest. It is equally rich in the faunal species and thus provide a rare amalgamation of various favourable factors for wildlife. The significance of this area is strengthened by the fact that because of its aptness on various parameters Wildlife Institute of India chose this as the most suitable location for Lion Reintroduction Program in its study.
									</p>
									<p>
									Once the area was identified as the most suitable locations for the reintroduction of Asiatic Lion, the then management started making long term focussed efforts to improve this area as per the requirement beginning with relocating the villages from inside the park to place which is more beneficial to the residents of those villages as well as beneficial to the denizens of the forests. 24 villages were relocated outside the sanctuary from 1998 to 2003 and about 6258 hectare area was made available.
									</p>
									<p>
									With consistent and determined efforts of the management body of the park, relocation of villages resulting in reduced biotic pressure and improvement in the floral, faunal and avifaunal density in the park , Government of Madhya Pradesh revised the status of this area, ameliorating it to become a National Park with 748.761 square km as the core and 557.278 buffer area as the buffer in December 2018. This upgradation of Kuno Sanctuary to Kuno National Park further cements it’s importance in the field of Wildlife Conservation in Central Indian Landscape.
									</p>
								@endif
								@if( session('locale') == 'hi' ) 
									<p>
									कुनो नदी के आसपास का क्षेत्र प्राचीन काल से जैव विविधता से समृद्ध रहा है। इसके महत्व को पास के पहाड़गढ़ में 30,000 साल पुरानी गुफा चित्रों में परिलक्षित किया जा सकता है जिसमें कई जंगली जानवरों को दर्शाया गया है।
									</p>
									<p>
									मध्य प्रदेश सरकार ने इस स्थान के महत्व को महसूस करते हुए 1981 में लगभग 3300 वर्ग किमी के बड़े वन क्षेत्र के अंतर्गत लगभग 345 वर्ग किमी के कुनो वन्यजीव अभयारण्य की स्थापना की। वन्यजीव संरक्षण को और मजबूत करने और इस क्षेत्र के उचित प्रबंधन को सुनिश्चित करने के लिए अतिरिक्त 891 वर्ग किमी क्षेत्र को बफर के रूप में जोड़ा कर 2002 में 1235 वर्ग किमी के कुनो वन्यजीव प्रभाग की स्थापना की गयी |
									</p>
									<p>
									शुष्क घास के मैदान, और उष्णकटिबंधीय नदी वाले वन शामिल हैं। यह पशुओं की विभिन्न प्रजातियों में समान रूप से समृद्ध है और इस प्रकार यह क्षेत्र वन्य जीव के लिए विभिन्न अनुकूल कारकों का एक दुर्लभ समावेश प्रदान करता है। इस क्षेत्र के महत्व को इस तथ्य से ही किया जाता है कि विभिन्न मापदंडों पर इसकी योग्यता के कारण भारतीय वन्यजीव संस्थान ने इसे अपने अध्ययन में लायन रेनिगोडेशन प्रोग्राम के लिए सबसे उपयुक्त स्थान के रूप में चुना।
									</p>
									<p>
									एक बार जब इस क्षेत्र को एशियाई सिंहों के पुनर्वास के लिए सबसे उपयुक्त स्थान के रूप में पहचाना लिया गया, तो तत्कालीन प्रबंधन ने इस क्षेत्र को सुधारने के लिए दीर्घकालिक प्रयास करना शुरू कर दिए | आवश्यकता अनुसार पार्क के अंदर से गांवों को स्थानांतरित करने का कार्य भी सुनियोजित तरीके से शुरू किया गया जिससे इस क्षेत्र को वन्य प्राणियों की लिय और बेहतर बनाया जा सके जो सिंहों के लिए भी अधिक फायदेमंद हो और दीर्घकाल में उन गांवों के निवासियों के लिए भी फायदेमंद रहे । 1998 से 2003 तक 24 गांवों को अभयारण्य के बाहर स्थानांतरित किया गया और लगभग 6258 हेक्टेयर क्षेत्र उपलब्ध कराया गया।
									</p>
									<p>
									पार्क प्रबंधन द्वारा किये गए लगातार प्रयासों और गांवों के स्थानांतरण के बाद से इस क्षेत्र पर जैविक दबाव कम हो गया और पार्क में पेड़ो, वन्य जीवों और पक्षियों के घनत्व में निरंतर सुधार हुआ | मध्य प्रदेश सरकार ने इस क्षेत्र को वाइल्डलाइफ सैंक्चुअरी से एक नेशनल पार्क के रूप में विकसित कर अधिकारिरिक रूप में संशोधित भी किया, जो इस क्षेत्र को वन्य जीवों के लिए अधिक अनुकूल बनाने में कारगार सिद्ध हो रहा है । दिसंबर 2018 में 557.278 वर्ग किलोमीटर क्षेत्र पूरे मध्य प्रदेश और आस-पास के क्षेत्रों में कुनो में वन और वनस्पति का सबसे अनूठा संयोजन है, जिसका अनुभव वहां पहुँच के ही किया जा सकता है । वानिकी की शब्दावली में, (यानी चैंपियन और सेठ के वर्गीकरण अनुसार) कुनो नेशनल पार्क के जंगलों को मोटे तौर पर निम्न प्रकारों में वर्गीकृत किया गया है:
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