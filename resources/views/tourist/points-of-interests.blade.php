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
				Points of Interest
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
				पर्यटन हेतु रुचिकर जगह
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
								<h2><span>Points </span> of Interest</h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span>पर्यटन हेतु </span> रुचिकर जगह </h2>
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
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (8).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>Introduction</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									With its rich political history dating back to Kings of the area and conservation history as old as its political one, Kuno National Park boasts of various places of tourist interests.
									</p>
									<p>
									 <strong>The Forts: </strong>After Independence of India slowly the Kings of different princely state chose to become the part of republic of India, and most of their land holdings specially the Forest areas were handed over to Government. However most of the magnificent fortresses they had built were also left behind which have been slowly reclaimed by the jungles.
									</p>
									<p>
									<strong> Palpur Fort or Garhi: </strong>Keeping five hundred years of secrets within its walls, Palpur Garhi, located on the banks of Kuno river once served as sanctuary to Chandravanshi Raja Bal Bahadur Singh, who assumed the throne in 1666. Looking at this imposing structure from across the flowing river at sunset is a sight to behold.
									</p>
									<p>
									<strong> Amet Fort: </strong>Even though now almost completely engulfed in shrubs, this was also a part of Chandravanshi Raja Bal Bahadur Singh’s kingdom.
									</p>
									<p>
									<strong> Maitoni Fort: </strong>The first fortress when the royal family came here from Karauli. With its massive arches and rickety walls, Maitoni is a sight to behold.
									</p>
									<p>
									<strong> Kair-Khoh & Gravity Pipeline: </strong>The River Kuno is the main source of water in the forest and it would be fair to call it a life-line of the forest. But most of the other streams are not perennial and do not retain water in the summers. Thus the upper reaches on both sides of the Kuno River suffer from water scarcity during the summer.
									</p>
									<p>
									At Kair Khoh, water from a natural spring which could not be taken into any productive use, is now carried to various water holes with the help of a pipeline, using just gravity. In an area replete with possibilities, this maintenance-free technique has ensured water to all wildlife throughout the year. The pipeline goes more than 18 kilometers to fill up several saucers and ponds.
									</p>
									<p>
									<strong>In addition to the above places; other points of interest for the tourists are:</strong>
									</p>
									<ul class="pl-3">
										<li>Dev Kho</li>
										<li>Aamjhir</li>
										<li>Bhanwar Kho</li>
										<li>Maratha Kho</li>
										<li>Daulatpura</li>
										<li>Dev Kund</li>
										<li>Jain Mandir</li>
										<li>Natni Kho</li>
										<li>Ransinh baba Temple</li>
										<li>Dhoret Temple</li>
									</ul>
								@endif
								@if( session('locale') == 'hi' ) 
									<p>
									अपने समृद्ध और प्राचीन राजनैतिक इतिहास के साथ साथ इस क्षेत्र का संरक्षण इतिहास भी काफी पुराना है | इसी वजह से  कूनो नेशनल पार्क पर्यटकों की रुचि के विभिन्न स्थानों हैं 
									</p>
									<p>
									<strong>कुनो के किले : </strong>भारत की स्वतंत्रता के बाद धीरे-धीरे विभिन्न रियासतों के राजाओं ने भारत के गणतंत्र का हिस्सा बनना चुना और उनकी अधिकांश भूमि विशेष रूप से वन क्षेत्रों को सरकार को सौंप दिया गया। हालाँकि उनके द्वारा बनाए गए अधिकांश भव्य किले भी अब धीरे-धीरे जंगलों के आगोश में समा गए हैं ।
									</p>
									<p>
									<strong>पालपुर किला या  पालपुर गढ़ी: </strong> अपनी दीवारों के भीतर पांच सौ साल के रहस्य छुपाए हुए, कुनो नदी के तट पर स्थित यह किला जो पालपुर गढ़ी के नाम से प्रसिद्ध है, चंद्रवंशी राजा बल बहादुर सिंह के समय का है, जिन्होंने 1666 में सिंहासन ग्रहण किया था। इस किले से सूर्यास्त के समय बहती हुई नदी को निहारना एक जबरदस्त अनुभव है।
									</p>
									<p>
									<strong>अमेट का किला: </strong>हालाँकि अब यह लगभग पूरी तरह से पेड़ो और झाड़ियों में घिरा हुआ है, लेकिन यह चंद्रवंशी राजा बाल बहादुर सिंह के राज्य का एक प्रमुख हिस्सा भी था।
									</p>
									<p>
									<strong>मैटोनी का किला: </strong>जब शाही परिवार करौली से यहां आया था तो उन्होंने जिस किले का सर्वप्रथम निर्माण किया वह मैटोनी का किला ही था । इसकी विशाल मेहराब और दुर्लभ दीवारों देखते ही बनती हैं |
									</p>
									<p>
									<strong>कैर-खो और ग्रेविटी पाइपलाइन: </strong> कूनो नदी जंगल में पानी का मुख्य स्रोत है और इसे जंगल की जीवन रेखा कहा जाना उचित होगा। लेकिन यहाँ मिलने वाली अधिकांश अन्य धाराएं बारहमासी नहीं परन्तु कैर खो नामक जगह पर, एक प्राकृतिक झरने का पानी को केवल गुरुत्वाकर्षण की मदद से पाइप लाइन द्वारा से विभिन्न छोटे जल कुण्ड को भरने के उपयोग में लाया जाता है। इस रखरखाव-मुक्त तकनीक ने पूरे वर्ष सभी वन्यजीवों को पानी मिलना सुनिश्चित किया है। कई सॉसर और तालाबों को भरने के लिए पाइपलाइन 18 किलोमीटर से अधिक जाती है।
									</p>
									<p>
									<strong>उपरोक्त स्थानों के अलावा; पर्यटकों की रूचि के अन्य जगहें हैं:</strong>
									</p>
									<ul class="pl-3">
										<li>देव खो</li>
										<li>आमझिर</li>
										<li>भंवर खो</li>
										<li>मराठा खो</li>
										<li>दौलतपुरा</li>
										<li>देव कुंड</li>
										<li>जैन मंदिर</li>
										<li>नटनी खो</li>
										<li>रणसिंह बाबा मंदिर</li>
										<li>धोराट बाबा मंदिर</li>
									</ul>
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