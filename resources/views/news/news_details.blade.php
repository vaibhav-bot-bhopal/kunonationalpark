@extends('layouts.front')

@section('content')

	<!-- CONTENT -->
			<!-- Intro Section -->
			<div class="page-header parallax">
				<div class="container">
					<h1 class="title text-center">NEWS CORNER</h1>
				</div>
				<div class="breadcrumb-box">
					<div class="container" style="display: flex; justify-content: center;">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item text-center">
									<a href="#">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									News Corner
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Latest News
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<!-- End Intro Section -->

	@if( session('locale') == 'en' )
            	<!-- Blog Post Section -->
			<section class="padding ptb-xs-60">
				<div class="container">
					<div class="row">
						<!-- Post Bar -->
						<div class="col-md-10 col-lg-10 offset-md-1 offset-lg-1 blog-post-hr post-section">
							<div class="blog-post mb-30">
								<div class="post-header">
									<h2>{{ $detailen->news_title }}</h2>
								</div>
								<div class="post-media">
									<img src="{{ asset('public/storage/eng_news/'.$detailen->news_image) }}" alt="">
								</div>
								<div class="post-entry">
									<p>
									{!! $detailen->news_discription !!}
									</p>
								</div>
								<div class="post-tag pull-left">
									<i class="fa fa-tag"></i><span><a>Date</a>,</span><span><a>{{ date('d-m-Y', strtotime($detailen->news_date)) }}</a></span>
								</div>
							</div>

									<div class="container">
									<div class="row">
									@foreach(explode(',', $detailen->m_news_image) as $info)
									<div class="col-lg-6 col-md-6 mb-4">
									<img src="{{ asset('public/storage/m_eng_news/'.$info) }}" alt="">
									</div>
									@endforeach
									</div>
									</div>

							<hr />
						{{--	<div class="post-author">
								<div class="post-author-img pull-left">
									<img alt="author" src="{{ asset('public/assets/images/banner/banner_img2.webp') }}">
								</div>
								<div class="post-author-details post-author-blog width-75per">
									<h6>Andu john</h6>
									<p>
										Nulla viverra ultrices magna. Aenean et diam. Nam semper ipsum et purus sed quam. Ut scelerisque prtium dolor. Sed tincidunt scelerisque sem. Sed et erat nulla facilisi. Sed urna erat vehicula scele risque gravida et scelerisque in metus.
									</p>
								</div>

							</div> --}}
							<hr />
							<div class="clearfix"></div>

						</div>
						<!-- End Post Bar -->

					</div>
				</div>
			</section>
			<!-- End Blog Post Section -->
	@endif
	@if( session('locale') == 'hi' )
            	<!-- Blog Post Section -->
			<section class="padding ptb-xs-60">
				<div class="container">
					<div class="row">
						<!-- Post Bar -->
						<div class="col-md-10 col-lg-10 offset-md-1 offset-lg-1 blog-post-hr post-section">
							<div class="blog-post mb-30">
								<div class="post-header">
									<h2>{{ $detailhi->news_title }}</h2>
								</div>
								<div class="post-media">
									<img src="{{ asset('public/storage/hin_news/'.$detailhi->news_image) }}" alt="">
								</div>
								<div class="post-entry">
									<p>
									{!! $detailhi->news_discription !!}
									</p>
								</div>
								<div class="post-tag pull-left">
									<i class="fa fa-tag"></i><span><a>Date</a>,</span><span><a>{{ date('d-m-Y', strtotime($detailhi->news_date)) }}</a></span>
								</div>
							</div>
							<div class="container">
									<div class="row">
									@foreach(explode(',', $detailhi->m_news_image) as $info)
									<div class="col-lg-6 col-md-6">
									<img src="{{ asset('public/storage/m_hin_news/'.$info) }}" alt="">
									</div>
									@endforeach
									</div>
									</div>
							<hr />
						{{--	<div class="post-author">
								<div class="post-author-img pull-left">
									<img alt="author" src="{{ asset('public/assets/images/banner/banner_img2.webp') }}">
								</div>
								<div class="post-author-details post-author-blog width-75per">
									<h6>Andu john</h6>
									<p>
										Nulla viverra ultrices magna. Aenean et diam. Nam semper ipsum et purus sed quam. Ut scelerisque prtium dolor. Sed tincidunt scelerisque sem. Sed et erat nulla facilisi. Sed urna erat vehicula scele risque gravida et scelerisque in metus.
									</p>
								</div>

							</div> --}}
							<hr />
							<div class="clearfix"></div>

						</div>
						<!-- End Post Bar -->

					</div>
				</div>
			</section>
			<!-- End Blog Post Section -->
	@endif

@endsection
