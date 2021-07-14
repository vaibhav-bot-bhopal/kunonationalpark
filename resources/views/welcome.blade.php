@extends('layouts.front')

@section('content')
<style>
.text_news_title {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 1; /* number of lines to show */
		-webkit-box-orient: vertical;
		line-height: 2;
		}
.text_news {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 3; /* number of lines to show */
		-webkit-box-orient: vertical;
		}
</style>
		<!-- Maine-Banner -->

		<div class="main-banner banner_up">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-129"  >
							<!-- MAIN IMAGE -->
						<img src="{{ asset('public/assets/images/banner/banner_img1.webp') }}"  alt=""  class="rev-slidebg" >
							<!-- LAYERS -->
							<div class="tp-caption Newspaper-Title tp-resizeme "
							id="slide-129-layer-1"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['600','600','600','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on" >
								<div class="banner-text text-center">
								@if( session('locale') == 'en' )
								<h2>Welcome to <br> <span> Kuno National Park </span></h2>
								<p style="font-size: 16px; font-weight: 600;">Kuno National Park Official Website</p>
								<p>	Celebrating 25 years plus of focused conservation of its unique diversity of flora and fauna </p>
								<a class="btn-text green-bg" href="#about"> Learn More </a>
								@endif
								@if( session('locale') == 'hi' )
								<h2>कूनो नेशनल पार्क<br> <span> में आपका स्वागत है </span></h2>
                                <p style="font-size: 16px; font-weight: 600;">कुनो राष्ट्रीय उद्यान की आधिकारिक वेबसाइट</p>
								<p>	वनों और वन्यजीवों की अनूठी विविधता के संरक्षण के गौरवपूर्ण 25 वर्ष </p>
								<a class="btn-text green-bg" href="#about"> अधिक जानें </a>
								@endif
								</div>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-130" data-title="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('public/assets/images/banner/banner_img2.webp') }}"  alt=""  class="rev-slidebg" >
							<!-- LAYERS -->
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-130-layer-1"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['600','600','600','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">

								<div class="banner-text text-center">
								@if( session('locale') == 'en' )
								<h2>Welcome to <br> <span> Kuno National Park </span></h2>
                                <p style="font-size: 16px; font-weight: 600;">Kuno National Park Official Website</p>
								<p>	Celebrating 25 years plus of focused conservation of its unique diversity of flora and fauna </p>
								<a class="btn-text green-bg" href="#about"> Learn More </a>
								@endif
								@if( session('locale') == 'hi' )
								<h2>कूनो नेशनल पार्क<br> <span> में आपका स्वागत है </span></h2>
                                <p style="font-size: 16px; font-weight: 600;">कुनो राष्ट्रीय उद्यान की आधिकारिक वेबसाइट</p>
								<p>	वनों और वन्यजीवों की अनूठी विविधता के संरक्षण के गौरवपूर्ण 25 वर्ष </p>
								<a class="btn-text green-bg" href="#about"> अधिक जानें </a>
								@endif
								</div>

							</div>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-131">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('public/assets/images/banner/banner_img3.webp') }}"  alt=""  class="rev-slidebg" >
							<!-- LAYERS -->
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-131-layer-1"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['600','600','600','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on">

								<div class="banner-text text-center">
								@if( session('locale') == 'en' )
								<h2>Welcome to <br> <span> Kuno National Park </span></h2>
                                <p style="font-size: 16px; font-weight: 600;">Kuno National Park Official Website</p>
								<p>	Celebrating 25 years plus of focused conservation of its unique diversity of flora and fauna </p>
								<a class="btn-text green-bg" href="#about"> Learn More </a>
								@endif
								@if( session('locale') == 'hi' )
								<h2>कूनो नेशनल पार्क<br> <span> में आपका स्वागत है </span></h2>
                                <p style="font-size: 16px; font-weight: 600;">कुनो राष्ट्रीय उद्यान की आधिकारिक वेबसाइट</p>
								<p>	वनों और वन्यजीवों की अनूठी विविधता के संरक्षण के गौरवपूर्ण 25 वर्ष </p>
								<a class="btn-text green-bg" href="#about"> अधिक जानें </a>
								@endif
								</div>

							</div>
						</li>
						<!-- SLIDE  -->
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		<!--Our Services End-->

		<div id="about"></div>
		<section id="about_us" class="padding ptb-xs-40 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-6 about-left text-justify">
					@if( session('locale') == 'en' )
					<h4 class="italic">About the</h4>
						<h2> Kuno <span style="color:#40461f;">National Park</span></h2>
						<p style="text-transform:none;">
						Kuno National Park, is like an ornament in the Vindhyan Hills of Central India. It is a rare jungle, an	oasis nestled between an otherwise rocky and unforgiving landscape. The stories and the legends from the land of Kuno, are as old as time itself and the denizens of this land can narrate endless tales of sacrifice and longing. The place is full of ancient forts and structures which have now been reclaimed by the forest, lush green vegetation dominated by the “Kardhai”, “Khair” and “Salai” trees, an amazing world having rich diversity and very high density of winged creatures, freely roaming	ungulates and carnivores and in the midst of all this flows the famous Kuno river, from which this park derives its name; which is the silent spectator to the national park’s rich history and testimony to its revitalization, re-emergence and revival from the verge of being completely wiped out to what it is today.
						</p>

						<a href="{{ url('about/introduction') }}" class="btn btn-sm btn-primary text-white" style="background: #228b22; margin-left: 50%; transform: translateX(-50%);"> Read More </a>

					@endif
					@if( session('locale') == 'hi' )
					<h4 class="italic">बारे में</h4>
						<h2> कूनो <span style="color:#40461f;">राष्ट्रीय उद्यान</span></h2>
						<p>
						कुनो राष्ट्रीय उद्यान, मध्य भारत की विंध्यांचल पर्वत श्रृंखला को शुशोभित करता है । यह एक दुर्लभ किस्म का जंगल है जिसे एक चट्टानों से भरे भू दृश्य के बीच स्तिथ जंगली जानवरों और पेड़ पौधों का स्वर्ग कहना गलत नहीं होगा । इस जगह से जुडी कहानियां और किवदंतियां समय जितनी ही पुरानी लगती हैं और यहाँ के निवासी जानवर और पेड़-पौधे आपको अनगिनत बेमिसाल किस्से सुना सकते हें । यह जगह प्राचीन किलों, मंदिरों और संरचनाओं से भरी हुई है, जिनहे अब जंगल ने  अपने आगोश मे समा लिया है । लहलहाते हरे भरे पेड़ों, जिसमे करधई , खैर और सलाई के पेड़ों की अधिकता है, और अनगिनत शाकाहरी जानवरों, चहचहाते पक्षियों के बीच बहती कुनो नदी और अन्य जानवरों से भरा यह अद्भुत संसार किसी को भी मंत्र मुग्ध कर सकता है ।
						</p>
						<p>
						यह राष्ट्रिय उद्यान, यहाँ बहने वाली कुनो नदी से ही अपना नाम प्राप्त करता है जो अपने आप मे इस जगह के सालों पुराने इतिहास की साक्षी है और यहाँ के पुनर्जीवन जंगलों के पुनर्जीवन और उत्थान की कहानी की गवाह भी है |
						</p>
							<a href="{{ url('about/introduction') }}" class="btn btn-sm btn-primary text-white" style="background: #228b22; margin-left: 50%; transform: translateX(-50%);"> अधिक पढ़ेंं </a>

					@endif


					</div>

					<div class="col-md-12 col-lg-6">
						<div class="row">
							<div class="col-md-12 pic-show mt-xs-30" style="margin-top:110px;">
                                <div class="embed-responsive embed-responsive-16by9">
                                    @if( session('locale') == 'en')
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/6TEO0BFqQR0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    @endif
                                    @if( session('locale') == 'hi')
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/sGwZwJcxaEM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    @endif
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Services Section -->




		<!-- Want to learn -->
		<div class="padding ptb-xs-40 different-sec">
			<div class="container">
				<div class="row pb-30 text-center ">
					<div class="col-sm-12 mb-20">
					@if( session('locale') == 'en')
					<h2><span>What Makes</span> Kuno an Unique National Park</h2>
					@endif
					@if( session('locale') == 'hi')
					<h2><span>कूनो नेशनल पार्क</span> की विशेषताएँ</h2>
				<p>

				</p>
					@endif
						<span class="b-line"></span>
					</div>
				</div>
				<div class="row light-color">


				<div class="col-lg-4 col-md-6 process mb-40">
						<div class="icon-lf float-left">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<div class="right-txt float-right">
						@if( session('locale') == 'en')
							<h3>Vegetation</h3>
							<p>
							Unique Vegetation dominated by “Kardhai”, “Salai” and “Khair”
							</p>
						@endif
						@if( session('locale') == 'hi')
							<h3>Vegetation</h3>
							<p>
							करधई , सलई और खैर के अधिकता वाले जंगल
							</p>
						@endif
						</div>
					</div>

					<div class="col-lg-4 col-md-6 process mb-40">
						<div class="icon-lf float-left">
							<i class="fa fa-user-plus" aria-hidden="true"></i>
						</div>
						<div class="right-txt float-right">
						@if( session('locale') == 'en')
							<h3>Biodiversity</h3>
							<p>
							Rich Diversity and Density of Avian Faun
							</p>
						@endif
						@if( session('locale') == 'hi')
							<h3>जैव विविधता</h3>
							<p>
							अद्वितीय जैव विविधता एवं सघनता
							</p>
						@endif
						</div>
					</div>

					<div class="col-lg-4 col-md-6 process mb-40">
						<div class="icon-lf float-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="right-txt float-right">
						@if( session('locale') == 'en')
							<h3>Lion reintroduction site</h3>
							<p>
							Identified as the reintroduction site for Asiatic lion by WII
							</p>
						@endif
						@if( session('locale') == 'hi')
							<h3>सिंह पुनर्स्थापना स्थल</h3>
							<p>
							एशियाई सिंह प्रजाति की पुनर्स्थापना के लिए चयनित जंगल
							</p>
						@endif
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- Want to learn End-->


		<!-- Service Section -->
		<section class="our-services gray-bg" id="our-service">
			<div class="container">
				<div class="row pb-30 text-center">
					<div class="col-sm-12 mb-20">
					@if( session('locale') == 'en' )
						<h2><span>Quick </span>Info</h2>
					@endif
					@if( session('locale') == 'hi' )
						<h2><span>त्वरित</span> जानकारी</h2>
					@endif
						<span class="b-line"></span>
					</div>
				</div>
				<div class="row">

					@if( session('locale') == 'en' )
					@foreach ($data as $data)
					<div class="col-lg-6 col-md-6 process mb-40">
					<!-- <div class="col-lg-4 col-md-6 process mb-40"> -->
						<div class="icon-lf1 float-left" style="min-width:18%;">
							{{-- <!-- <i class="{{ $data->image }}"></i> --> --}}
							<i class="{{ $data->image }}" aria-hidden="true"></i>

						</div>
						<div class="right-txt float-right text-justify" style="width:80%;">
							<h3>{{ $data->title }}</h3>
							<p style="">
							{{ $data->description }}
							</p>
						</div>
					</div>
					@endforeach
					@endif

					@if( session('locale') == 'hi' )
					@foreach ($data2 as $data2)
					<div class="col-lg-6 col-md-6 process mb-40">
					<!-- <div class="col-lg-4 col-md-6 process mb-40"> -->
						<div class="icon-lf1 float-left" style="min-width:18%;">
							<i class="{{ $data2->image }}"></i>
						</div>
						<div class="right-txt float-right text-justify" style="width:80%;">
							<h3>{{ $data2->title }}</h3>
							<p>
							{{ $data2->description }}
							</p>
						</div>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</section>
		<!-- End Service Section -->


<!--Availablity Section start-->
<section class="available_wrap__block">
			<div class="available_content__block text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						@if( session('locale') == 'en' )
							<h2 class="mb-30" style="line-height: 51px;">Visit Kuno National Park, witness its rich history, exquisite wilderness, lush vegetation, bountiful avifauna and animals to get mesmerized by its serenity.  </h2>
						@endif
						@if( session('locale') == 'hi')
							<h2 class="mb-30" style="line-height: 55px;">कूनो नेशनल पार्क आयें, इसके समृद्ध इतिहास, उत्तम जंगल, हरे-भरे पेड़ों, चाह्चाते पक्षियों और उन्मुक्त जानवरों को निहारें और कुनो की सुंदरता से मंत्रमुग्ध हो जाएं।</h2>
						@endif

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Availablity Section end-->


		<!-- Team Section -->
		<section id="team" class="fadeIn ptb ptb-sm-80 text-center">
			<div class="container">
				<div class="row text-center pb-30">
					<div class="col-sm-12">
						<div class="heading-box ">
						@if( session('locale') == 'en' )
							<h2><span></span> Gallery</h2>
						@endif
						@if( session('locale') == 'hi' )
						<h2><span></span> गैलरी</h2>
						@endif
							<span class="b-line"></span>
						</div>
					</div>
				</div>

				<!--Team Carousel -->
				<div class="row mt-10">
					<div id="team-carousel" class="owl-carousel team-carousel nf-carousel-theme">

						<div class="item dental">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (1).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

						<div class="item gynaecological">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (2).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

						<div class="item pediatric">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (1).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

						<div class="item pediatric">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (3).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

						<div class="item pediatric">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (5).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

						<div class="item dental">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (6).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

						<div class="item gynaecological">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/sanjay/sanjay (7).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

						<div class="item pediatric">
							<div class="team-item ">
								<div class="team-item-img">
									<img src="{{ asset('public/assets/images/banner/devendra/devendra (6).webp') }}" alt="" />
									<div class="team-item-detail">
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--End Team Carousel -->
			</div>
		</section>
		<!-- End Team Section -->



		<!-- Blog Section -->
	<section id="blog" class="wow fadeIn ptb-80 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-xs-12 mb-xs-30 mb-sm-60">
						<div class="row pb-30">
					<div class="col-sm-12 mb-20">
						@if( session('locale') == 'en' )
						<h2 class="text-center"><span>Latest</span> News</h2>
						@endif
						@if( session('locale') == 'hi' )
						<h2 class="text-center"><span>नवीनतम</span> समाचार</h2>
						@endif
						<span class="b-line l-left mx-auto"></span>
					</div>
				</div>

						<div class="row">
						@if( session('locale') == 'en' )
						@foreach ($dataen as $dataen)

							<div class="col-md-4 col-lg-4 mb-xs-30">
								<div class="blog-post">
									<div class="post-media" style="max-height:200px;">
									<img src="{{ asset('public/storage/eng_news/'.$dataen->news_image) }}" alt="">
									</div>
									<div class="post-header">
										<h4><a href="{{ url('news') }}" class="text_news_title">{{ $dataen->news_title }}</a></h4>
									</div>
									<div class="post-entry">
										<div class="text_news">
										{!! substr(" $dataen->news_discription", 0) !!}
										</div>
									</div>
									<div class="post-more-link pull-left">
										<a href="{{ url('news') }}" class="btn btn-md btn-color-line ">Read More</a>
									</div>
								</div>
							</div>
							@endforeach
							@endif
						@if( session('locale') == 'hi' )
						@foreach ($datahi as $datahi)

							<div class="col-md-4 col-lg-4 mb-xs-30">
								<div class="blog-post">
									<div class="post-media" style="max-height:200px;">
									<img src="{{ asset('public/storage/hin_news/'.$datahi->news_image) }}" alt="">
									</div>
									<div class="post-header">
										<h4><a href="{{ url('news') }}" class="text_news_title">{{ $datahi->news_title }}</a></h4>
									</div>
									<div class="post-entry">

										<div class="text_news">
										{!! substr(" $datahi->news_discription", 0) !!}
										</div>


									</div>
									<div class="post-more-link pull-left">
										<a href="{{ url('news') }}" class="btn btn-md btn-color-line ">Read More</a>
									</div>
								</div>
							</div>
							@endforeach
							@endif

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Blog Section -->


@endsection
