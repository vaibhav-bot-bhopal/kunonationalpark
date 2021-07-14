@extends('layouts.front')

@section('content')
<style>
.page-item.active .page-link
{
	background-color: #228b22;
    border-color: #228b22;
}
.pagination-nav ul li a
{
	line-height: 1.25;
}
.pagination
{
	display:flex;
	justify-content:center;
}
</style>
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
		<section class="ptb-80 ptb-xs-40">
				<div class="container">
					<div class="row">
						<!-- Post Item -->
						<div class="col-md-12 col-lg-12">
							<div class="row">

							@foreach ($newsen as $itemsen)
							<div class="col-md-6 blog-post-hr">
									<div class="blog-post mb-30">
									<div class="post-header">
										<h2><a href='{{ url("/news-details/{$itemsen->news_slug}") }}'>{{ substr(" $itemsen->news_title", 0) }}  </a></h2>
									</div>
										<div class="post-media">
											<img src="{{ asset('public/storage/eng_news/'.$itemsen->news_image) }}" alt="">
											<span style="float:right;">
											<strong>
											{{ date('d-m-Y', strtotime($itemsen->news_date)) }}
											</strong>

											</span>
										</div>
										<div class="post-entry text-justify">
											<p>
											{!! substr(" $itemsen->news_discription", 0, 300) !!} ...
											</p>
										</div>
										<div class="post-more-link pull-left">
											<a href='{{ url("/news-details/{$itemsen->news_slug}") }}' class="btn btn-sm">Read More</a>
										</div>
									</div>
									</div>
									<hr />

									@endforeach

							</div>



							<!-- Pagination Nav -->
							<div class="pagination-nav text-left mt-60 mtb-xs-30">
							{{ $newsen->links() }}
							</div>
							<!-- End Pagination Nav -->
						</div>
						<!-- End Post Item -->

					</div>
				</div>
			</section>
			<!-- End Blog Post Section -->
			@endif
			@if( session('locale') == 'hi' )
		<!-- Blog Post Section -->
		<section class="ptb-80 ptb-xs-40">
				<div class="container">
					<div class="row">
						<!-- Post Item -->
						<div class="col-md-12 col-lg-12">
							<div class="row">

							@foreach ($newshi as $itemshi)
							<div class="col-md-6 blog-post-hr">
									<div class="blog-post mb-30">
									<div class="post-header">
											<h2><a href='{{ url("/news-details/{$itemshi->news_slug }") }}'>{{ substr(" $itemshi->news_title", 0, 200) }}  </a></h2>
										</div>
										<div class="post-media">
											<img src="{{ asset('public/storage/hin_news/'.$itemshi->news_image) }}" alt="">
											<span style="float:right;">
											<strong>
											{{ date('d-m-Y', strtotime($itemshi->news_date)) }}
											</strong>

											</span>
										</div>
										<div class="post-entry text-justify">
											<p>
											{!! substr(" $itemshi->news_discription", 0, 900) !!} ...

											</p>
										</div>
										<div class="post-more-link pull-left">
											<a href='{{ url("/news-details/{$itemshi->news_slug }") }}' class="btn btn-sm">Read More</a>
										</div>
									</div>
									</div>
									<hr />

									@endforeach

							</div>



							<!-- Pagination Nav -->
							<div class="pagination-nav text-left mt-60 mtb-xs-30">
							{{ $newsen->links() }}
							</div>
							<!-- End Pagination Nav -->
						</div>
						<!-- End Post Item -->

					</div>
				</div>
			</section>
			<!-- End Blog Post Section -->
			@endif

@endsection
