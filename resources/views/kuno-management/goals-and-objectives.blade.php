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
				Goals and Objectives
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
				लक्ष्य और उद्देश्य
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
								<h2><span>Goals </span> and Objectives</h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span>लक्ष्य </span> और उद्देश्य</h2>
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
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (6).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<h4>Long Term Vision</h4>
									<p>
									In the first phase of implementation of Asiatic Lion Reintroduction plan, with self-motivated and dedicated efforts of the park management, 1545 families of 24 villages which were located inside the park were successfully relocated outside the park. Long term vision of the park management is to develop this park capable of being a home to Asiatic Lion, Royal Bengal Tiger, Leopard, Caracal and possibly the Asiatic Cheetah and eventually become the only such protected area in the world.
									</p>
									<h4>Goals and Objectives</h4>
									<p>
									Even thought the park management is done in reference to the Asiatic Lion Reintroduction plan, however it was realised that the expectation from local communities and all other stake holders including non-government agencies, public representatives, joint forest management communities , government employees, current and previous park officials should be included in finalizing the Management Objectives.
									</p>
									<p>
									After considering all the aspects of forest management, expectations and experiences of all stake holders along with local communities following objectives have been identified as the park management objectives:
									</p>
									<ul class="pl-3">
										<li>To further develop the entire forest of Kuno National Park inline with the requirements of Lions under Asiatic Lion Reintroduction program.</li>
										<li>To control, manage the forest fires and prohibit cattle grazing inside the park to reduce the biotic pressure on the forest.</li>
										<li>To provide proper protection to forests of Kuno National Park so as to balance and maintain bio-diversity of the area for the long term.</li>
										<li>To manage all the water catchment area of the artificial sources, natural source of water and Kuno river ensure availability of water to animals all areas during water scarce months as well.</li>
										<li>To develop the 5767 plus hectare reclaimed from relocation of 24 villages as grasslands for the wild animals to enrich and supplement their food supply.</li>
										<li>To develop eco-tourism in the park so as to facilitate jobs creation for local communities and provide benefit for them</li>
										<li>To involve local village communities into forest conservation through successful Joint Forest Management.</li>
										<li>To control the numbers of feral cattle inside the Kuno National Park.</li>
										<li>To improve the reproduction of Salai trees in the Kuno Wildlife Division and to utilize it to provide constant financial support to local Saharia Tribes</li>
										<li>To identify the areas of high soil erosion and improve them so as to protect the water sources and soil of the national park.</li>
									</ul>
								@endif
								@if( session('locale') == 'hi' ) 
								<h4>दीर्घ कालिक दृष्टि </h4>
									<p>
									पार्क प्रबंधन के स्व-प्रेरित और समर्पित प्रयासों के कारण, एशियाई सिंहों के पुनर्स्थापन योजना के कार्यान्वयन के पहले चरण में ही ,पार्क के अंदर स्थित 24 गांवों के 1545 परिवारों को पार्क के बाहर सफलतापूर्वक स्थानांतरित किया गया था। पार्क प्रबंधन की दीर्घकालिक दृष्टि इस पार्क को एशियाटिक लॉयन, रॉयल बंगाल टाइगर, तेंदुआ, कैराकल और संभवतः एशियाई चीता के लिए एक घर के रूप में विकसित करने की है | अंततः यह दुनिया में एकमात्र ऐसा संरक्षित क्षेत्र बने जहाँ यह सभी बड़ी बिल्लियाँ और छोटी बिल्लियाँ अन्य शाकाहारी प्राणियों के साथ फल फूल रही हों |
									</p>
									<h4>लक्ष्य और उद्देश्य</h4>
									<p>
									हालाँकि पार्क की मुख्य प्रबंधन योजना एशियाई सिंहों के पुनर्स्थापन योजना के संदर्भ में बनायीं जाने थी, फिर भी यह महसूस किया गया कि इस योजना को अंतिम रूप देने से पहले स्थानीय समुदायों, अन्य गैर-सरकारी एजेंसियों, जन प्रतिनिधियों, संयुक्त वन प्रबंधन समुदायों, सरकारी कर्मचारियों,  एवं अन्य सभी हितधारकों की उम्मीदों को भी से अच्छी तरह से समझ लेना चाहिए जिससे की कुनो का सही विकास संभव हो |
									</p>
									<p>
									अंतः सभी पहलुओं पर पूर्ण विचार करने, स्थानीय समुदायों के साथ सभी हितधारकों की अपेक्षाओं और अनुभवों को ध्यान में रखते हुए निम्न उद्देश्यों को पार्क प्रबंधन उद्देश्यों के रूप में पहचाना गया है :
									</p>
									<ul class="pl-3">
										<li>एशियाई सिंहों के पुनर्स्थापन योजना के तहत उनकी आवश्यकताओं के साथ कुनो के पूरे जंगल को और विकसित करना।</li>
										<li>जंगल पर जैविक दबाव को कम करना,  जंगल में आग लगने की घटनाओं को नियंत्रित करना और पार्क के अंदर मवेशी चराने पर प्रतिबंध लगाना ।</li>
										<li>लंबी अवधि के लिए क्षेत्र की जैव विविधता को संतुलित करने और बनाए रखने के लिए कुनो नेशनल पार्क के जंगलों को उचित संरक्षण प्रदान करना।</li>
										<li>कृत्रिम स्रोतों के सभी जलग्रहण क्षेत्र का प्रबंधन करना, पानी और कुनो नदी के प्राकृतिक स्रोत को दुर्लभ महीनों के साथ-साथ सभी क्षेत्रों में जानवरों को पानी की उपलब्धता सुनिश्चित करना।</li>
										<li>जंगली जानवरों को समृद्ध करने और उनके भोजन की आपूर्ति के पूरक के लिए 24 गांवों के पुनर्वास से प्राप्त 5767 प्लस हेक्टेयर को विकसित करना।</li>
										<li>पार्क में इको-टूरिज्म विकसित करना ताकि स्थानीय समुदायों के लिए रोजगार सृजन की सुविधा प्रदान की जा सके और उनके लिए लाभ प्रदान किया जा सके</li>
										<li>सफल संयुक्त वन प्रबंधन के माध्यम से वन संरक्षण में स्थानीय ग्राम समुदायों को शामिल करना।</li>
										<li>कूनो नेशनल पार्क के अंदर आवारा पशुओं की संख्या को नियंत्रित करना ।</li>
										<li>कूनो वन्यजीव प्रभाग में सलाई पेड़ों के प्रजनन में सुधार करना और स्थानीय सहरिया जनजातियों को निरंतर वित्तीय सहायता प्रदान करने के लिए इन पेड़ो का सदुपयोग  करना।</li>
										<li>मिट्टी के कटाव के क्षेत्रों की पहचान करना और उन्हें सुधारना ताकि राष्ट्रीय उद्यान के जल स्रोतों और मिट्टी की रक्षा हो सके। </li>
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