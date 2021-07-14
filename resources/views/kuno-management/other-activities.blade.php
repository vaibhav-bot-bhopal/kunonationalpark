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
				Other Activities
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
				अन्य गतिविधियाँ
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
								<h2><span>Other </span> Activities</h2>
								<span class="b-line l-left mx-auto"></span>
							@endif
							@if( session('locale') == 'hi' ) 
								<h2><span>अन्य </span> गतिविधियाँ </h2>
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
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (7).webp') }}" alt="">
								</figure>
							</div>
							<div class="text-box mt-40">
								<!-- <div class="box-title mb-20">
									<h2>History</h2>
								</div> -->
								<div class="text-content text-justify">
								@if( session('locale') == 'en' ) 
								<p>
									Park management has identified some other activities to be taken up comprehensively with detailed management plan for each. In essence these activities are supporting activities of the core objectives identified by the management and their plan is prepared as the comprehensive 10 year management plan.
									</p>
									<p>
									These activities have been identified and divided into the 4 zone plans:	
									</p>
									<ul class="pl-3">
										<li>Asiatic Lion Reintroduction Zone</li>
										<li>Eco Tourism Zone</li>
										<li>Relocated Village Area Zone</li>
										<li>Wildlife Habitat Development Zone</li>										
									</ul>
								@endif
								@if( session('locale') == 'hi' ) 
									<p>
									उद्देश्यों की गतिविधियों के समर्थन कर रही हैं और उनकी योजना को व्यापक 10 वर्षीय प्रबंधन योजना के रूप में तैयार किया गया है |
									</p>
									<p>
									इन गतिविधियों को 4 ज़ोन योजनाओं में पहचाना और विभाजित किया गया है:
									</p>
									<ul class="pl-3">
										<li>एशियाई सिंहों की पुनर्स्थापन ज़ोन योजना</li>
										<li>ईको पर्यटन ज़ोन योजना</li>
										<li>विस्थापित गावों के क्षेत्र विक्सित करने हेतु जोन योजना </li>
										<li>वन्यजीव आवास क्षेत्र विक्सित करने हेतु जोन योजना</li>										
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