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
				Forest and Vegetation 
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
				वन और वनस्पति
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
							<h2><span>Forest </span> and Vegetation</h2>
								<span class="b-line l-left mx-auto"></span>
								@endif
								@if( session('locale') == 'hi' ) 
								<h2><span>वन </span> और वनस्पति</h2>
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
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (2).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Kuno has one of the most unique combination of forest and vegetation in entire Madhya Pradesh and adjoining areas which can only be seen to be believed. In Forestry terminology (i.e. Champion & Seth Classification terms), the forests of Kuno National Park are broadly classified into the following types:
									</p>
				
								<ul class="pl-3 myul">
									<li> <strong> “Southern Tropical Dry Deciduous Forest”</strong>
										<ul>
											<li>Southern Tropical Very Dry Teak Forest</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3 myul">
									<li> <strong>Northern Tropical Dry Deciduous Forest </strong>
										<ul>
											<li>Northern Dry Mixed Deciduous Forest</li>
											<li>Northern Tropical Dry Deciduous Scrub</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li> <strong>Edaphic Climax</strong>
										<ul>
											<li>Anogeissus pendula Forest – “Kardhai”</li>
											<li>Anogeissus pendula Scrub – “Kardhai Scrub”</li>
											<li>Boswellia Forest – “Salai”</li>
											<li>Butea Forest – “Palash”</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li> <strong>Degradation Stages</strong>
										<ul>
											<li>Dry Savannah Forest</li>
											<li>Dry Grass Land</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li><strong>Primary Seral Types</strong>
										<ul>
											<li>Tropical Riverine Forest</li>											
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li><strong>Northern Tropical Thorn Forest</strong>
										<ul>
											<li>Ravine Thorn Forest</li>											
											<li>Zizyphus Scrub</li>											
										</ul>
									</li>
								</ul>
									<p>
									Thus Kuno National Park’s forest area is mainly dominated by Kardhai, Salai, Khair trees among mostly mixed forests, this also helps it in having a variety of species of flora and fauna. In all, a total of 123 species of trees , 71 species of shrubs , 32 species of climbers and exotic species and 34 species of bamboos and grasses are found in Kuno National Park.
									</p>
								@endif
								@if( session('locale') == 'hi' ) 
								<p>
									Kuno has one of the most unique combination of forest and vegetation in entire Madhya Pradesh and adjoining areas which can only be seen to be believed. In Forestry terminology (i.e. Champion & Seth Classification terms), the forests of Kuno National Park are broadly classified into the following types:
									</p>
				
								<ul class="pl-3 myul">
									<li> <strong> "दक्षिणी उष्णकटिबंधीय शुष्क पर्णपाती वन"</strong>
										<ul>
											<li>दक्षिणी उष्णकटिबंधीय बहुत शुष्क सागौन वन</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3 myul">
									<li> <strong> उत्तरी उष्णकटिबंधीय शुष्क पर्णपाती वन </strong>
										<ul>
											<li>उत्तरी शुष्क मिश्रित पर्णपाती वन</li>
											<li>उत्तरी उष्णकटिबंधीय शुष्क पर्णपाती स्क्रब</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li> <strong>एडैफिक क्लाइमैक्स</strong>
										<ul>
											<li>ओएनोजेइसस पेंडुला वन - "करधई"</li>
											<li>ओएनोजिसस पेंडुला स्क्रब - "करधई स्क्रब"</li>
											<li>ओबोसवेलिया वन - "सलाई"</li>
											<li>ओबटिया वन - "पलाश"</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li> <strong>ओ शुष्क सावन वन</strong>
										<ul>
											<li>ओ शुष्क सावन वन</li>
											<li>सूखा घास भूमि</li>
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li><strong>प्राथमिक सर्ल प्रकार</strong>
										<ul>
											<li>उष्णकटिबंधीय नदी वन</li>											
										</ul>
									</li>
								</ul>
								<ul class="pl-3">
									<li><strong>उत्तरी उष्णकटिबंधीय कांटेदार वन</strong>
										<ul>
											<li>रविन कांटा वन</li>											
											<li>ज़िज़िफ़स स्क्रब</li>											
										</ul>
									</li>
								</ul>
									<p>
									इस प्रकार कूनो नेशनल पार्क के वन क्षेत्र में मुख्य रूप से करधई, सलाई, खैर के पेड़ों का वर्चस्व है, जो ज्यादातर मिश्रित जंगलों के बीच हैं | इससे वनस्पतियों और जीवों की विभिन्न प्रकार की प्रजातियाँ होने में भी मदद मिलती है। कुल मिलाकर, 123 प्रजातियों के पेड़, झाड़ियों की  71 प्रजातियाँ,  बेलों और विदेशी वनस्पति की 32 प्रजातियाँ, बाँस और घास की 34 प्रजातियाँ कूनो नेशनल पार्क में पाई जाती हैं।
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