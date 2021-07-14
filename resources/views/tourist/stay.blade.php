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
					Stay
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
					रहवास
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
								<h2><span>Park </span> Stay</h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span></span> रहवास</h2>
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
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (7).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Since this is currently is a relatively a less popular destination among wildlife lovers in comparison to Tiger Reserves of Madhya Pradesh, there are decent options for accommodation at Kuno.
									</p>
									<h4>Accommodation available with Park management</h4>
									<p>
									There are 4 rest houses at KNP with the department which can be booked through by the office of Kuno which can be reached over the phone numbers mentioned or through mail. Rights of reservation of rest houses remains with the CCF Lion Project and DFO Kuno ,Sheopur.
									</p>
									<h4>Other Accommodation</h4>
									<p>
									Madhya Pradesh tourism resort is situated very near to the park which can be easily booked by tourist contacting to the M.P. Tourism Kuno Resort (Rest House)
									</p>
								@endif
								@if( session('locale') == 'hi' ) 
									<p>
									चूंकि यह वर्तमान में मध्य प्रदेश के टाइगर रिजर्व्स की तुलना में वन्यजीव प्रेमियों के बीच अपेक्षाकृत कम लोकप्रिय गंतव्य है, इसलिए कुनो में रहने के लिए विकल्प कम परन्तु सम्माननीय विकल्प हैं।
									</p>
									<h4>पार्क प्रबंधन के पास उपलब्ध आवास</h4>
									<p>
									विभाग के पास 4 रेस्ट हाउस हैं,  जिन्हें कुनो कार्यालय फोन करके या मेल के माध्यम द्वारा बुक किया जा सकता है । इनके आरक्षण का अधिकार CCF लायन प्रोजेक्ट और DFO कुनो, श्योपुर के पास है।
									</p>
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