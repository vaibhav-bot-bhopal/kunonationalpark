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
								History
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
								पार्क का इतिहास
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
								<h2><span></span> History</h2>
								<span class="b-line l-left mx-auto"></span>
								@endif
								@if( session('locale') == 'hi' ) 								
								<h2><span>पार्क </span> का इतिहास</h2>
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
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (1).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Kuno National Park / Kuno Wildlife Division and surrounding area has historically been rich with wildlife. This area was known to be a dense forest in ancient times as well. One of the gazette of Gwalior princely state of year 1902, records that the Mughal Emperor Akbar while returning from Malwa region captured a big herd of elephants in the forests near Shivpuri in the year 1564. Abul fazal also mentioned this fact that Lions were found in this region and the last Lion in this region is known to be shot near to city of Guna in the year 1872.
									</p>
									<p>
									Kuno’s history is intricately woven with the history of Lions and various efforts to relocate Lions in some capacity or other from time to time in this area. It is impossible to talk about the history of this place without referring to the Lions and their relocation efforts.
									</p>
									<p>
									In the year 1904 Lord Curzon was invited for hunting by the then His Highness Madhavrao Scindia,the Ist, King of Gwalior. Lord Curzon was so much impressed with the forest of valley of Kuno that he immediately suggested the King to bring Lions from Junaghad, Gir and released in the forest. King Scindia started working on it with the audacity suitable to a Maharaja and tried collaborating on his level, with the Nawab of Junaghad. During those times he built massive enclosures at Dob Kund as the Lion acclimatization enclosures before their release into the forests. However his initial efforts went into vain. Even Lord Curzon tried to help by facilitating talks with Nawab and personally getting involved in relocation but the Nawad kept on delaying the project.
									</p>
									<p>
									Later Lord Curzon even presented the King with a letter addressed to the ruler of Abisinia (Current Ethopia) so that some lions from there could be brought to Kuno. A Persian expert named D.M. Zaal was made in charge of this project by the King and in 1905 , this project was allocated Rs. 1 lakh budget in that year. Mr. Zaal with support of the King was able to bring 10 lions from Africa. However, three of them died by the time they reached Bombay Harbour. Of the 7 surviving lions, 3 were males while remaining 4 were females and they were personally received by the King himself. He named the males as Bunde, Baanke and Majnu and the females as Ramailee, Rampyari, Bijli and Gaindi. These Lions were later released in the Jungles of Shivpuri instead of Kuno. Unfortunately these Lions turned into cattle lifters and man-eaters in between year 1910 to 1912 and due to this unfortunate
turns of the events the project failed. Though the King’s dream of seeing Lions once again prosper in this landscape didn’t come true the way he had envisioned, but his efforts were bold and trailblazing to say the least.
									</p>
								@endif
								@if( session('locale') == 'hi' ) 
								<p>
									कुनो नेशनल पार्क / कुनो वन्यजीव डिवीज़न और आसपास का क्षेत्र ऐतिहासिक रूप से वन्यजीवों से समृद्ध रहा है। यह क्षेत्र प्राचीन काल में भी घने जंगल के रूप में जाना जाता था। ग्वालियर रियासत के वर्ष 1902  के एक राजपत्र में यह व्यक्त किया गया है मुगल सम्राट अकबर ने वर्ष 1564 में मालवा क्षेत्र से वापस आते समय, शिवपुरी के पास के जंगलों में हाथियों के एक बड़े झुंड को बंधक बना लिया था। विख्यात इतिहासकार अबुल फज़ल ने भी इस तथ्य का उल्लेख किया है कि इस क्षेत्र में एशियाई सिंहों पाए जाते थे | इस क्षेत्र में  वर्ष 1872 में गुना शहर के पास एशियाई सिंह के शिकार का अंतिम उल्लेख भी पाया जाता है।
									</p>
									<p>
									कुनो का इतिहास एशियाई सिंहों और इस क्षेत्र में सिंहों के पुनर्वास के लिए समय – समय पे किये गए प्रयासों के साथ गहन रूप से जुड़ा हुआ है और शायद इसीलिए कुनो के इतिहास के बारे में, सिंहों के पुनर्वास के प्रयासों का जिक्र किए बिना, बात करना असंभव है।
									</p>
									<p>
									वर्ष 1904 में ग्वालियर के राजा, तत्कालीन महामहिम माधवराव सिंधिया द्वारा शिकार के लिए लॉर्ड कर्जन को आमंत्रित किया गया था। लॉर्ड कर्जन कुनो की घाटी के जंगल से इतना प्रभावित हुए थे कि उन्होंने तुरंत राजा को जूनागढ़, गिर से शेर लाने और जंगल में छुड़ाने का सुझाव दिया। राजा सिंधिया ने इस पर काम करना शुरू किया और जूनागढ़ के नवाब के साथ अपने स्तर पर बातचीत भी शुरू की। उस दौरान उन्होंने डोब कुंड में बड़े पैमाने पर बाड़ों का निर्माण किया,  जिससे जंगलों में उनकी रिहाई से पहले शेरों को कुनो के परिस्थिति के अनुकूल ढलने में आसानी हो । यहां तक कि लॉर्ड कर्जन ने भी नवाब के साथ बातचीत करके और व्यक्तिगत रूप से स्थानांतरण में शामिल हो कर मदद करने की कोशिश की, लेकिन ऐसा मन जाता है की नवाब परियोजना में देरी करते रहे और यह शुरुआती प्रयास व्यर्थ हो गए।
									</p>
									<p>
									कुछ समय बाद, लॉर्ड कर्जन ने राजा सिंधिया को अबिसिनिया (वर्तमान इथियोपिया) के एक फारसी विशेषज्ञ को राजा द्वारा इस परियोजना का प्रभारी बनाया गया और 1905 में इस परियोजना के लिए उस वर्ष में 1 लाख का बजट भी रखा गया | राजा के समर्थन के साथ श्री ज़ाल अफ्रीका से 10 शेर लाने में सफल भी हो गए थे । हालाँकि, जब तक वे बॉम्बे हार्बर पहुँचे, उनमें से तीन की मृत्यु हो गई। बचे हुए 7 शेरों में से 3 नर थे जबकि शेष 4 मादा थीं और वे स्वयं राजा द्वारा प्राप्त किए गए थे। उन्होंने नर को बुंदे,  बांके और मजनू और मादाओं को रामैली , रामप्यारी,  बिजली और गेंदी नाम दिया परन्तु इन शेरों को बाद में कुनो के बजाय शिवपुरी के जंगलों में छोड़ा गया। दुर्भाग्य से ये सभी सिंह वर्ष 1910 से 1912 के बीच मवेशीखोर और आदमखोरों में बदल गए और इस घटना के दुर्भाग्यपूर्ण मोड़ के कारण परियोजना विफल हो गई। हालांकि राजा की शेरों को इस क्षेत्र में स्वतंत्र घुमते देखने की जिस तरह से उन्होंने कल्पना की थी, वह पूरी नहीं हुई, लेकिन उनके प्रयासों को कुछ लोग सराहनीय और साहसिक जरूर मानते हैं |
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