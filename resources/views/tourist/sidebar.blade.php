 
<div class="col-md-4 col-sx-12">
							<div class="single-sidebar-widget">
								<div class="special-links">
								@if( session('locale') == 'en' ) 
								<ul>
									<li>
										<a href="{{ url('tourist/location') }}" class="{{ 'tourist/location' == request()->path() ? 'active' : '' }}">location</a>
									</li>
									<li>
										<a href="{{ url('tourist/how-to-reach') }}" class="{{ 'tourist/how-to-reach' == request()->path() ? 'active' : '' }}">how to reach</a>
									</li>
									<li>
										<a href="{{ url('tourist/weather') }}" class="{{ 'tourist/weather' == request()->path() ? 'active' : '' }}"> weather </a>
									</li>
									<li>
										<a href="{{ url('tourist/safari-zone') }}" class="{{ 'tourist/safari-zone' == request()->path() ? 'active' : '' }}"> safari zone </a>
									</li>
									<li>
										<a href="{{ url('tourist/excursions-and-charges') }}" class="{{ 'tourist/excursions-and-charges' == request()->path() ? 'active' : '' }}"> excursion and charges </a>
									</li>
									<li>
										<a href="{{ url('tourist/points-of-interests') }}" class="{{ 'tourist/points-of-interests' == request()->path() ? 'active' : '' }}">points of interest</a>
									</li>
									<li>
										<a href="{{ url('tourist/stay') }}" class="{{ 'tourist/stay' == request()->path() ? 'active' : '' }}"> stay</a>
									</li>
									<li>
										<a href="{{ url('tourist/do-and-dont') }}" class="{{ 'tourist/do-and-dont' == request()->path() ? 'active' : '' }}">  Do(s) and Don't(s)  </a>
									</li>
									<li>
										<a href="{{ url('tourist/safari-booking') }}" class="{{ 'tourist/safari-booking' == request()->path() ? 'active' : '' }}"> safari booking </a>
									</li>
								</ul>	
								@endif
								@if( session('locale') == 'hi' ) 
								<ul>
									<li>
										<a href="{{ url('tourist/location') }}" class="{{ 'tourist/location' == request()->path() ? 'active' : '' }}">स्थान</a>
									</li>
									<li>
										<a href="{{ url('tourist/how-to-reach') }}" class="{{ 'tourist/how-to-reach' == request()->path() ? 'active' : '' }}">कैसे पहुंचे </a>
									</li>
									<li>
										<a href="{{ url('tourist/weather') }}" class="{{ 'tourist/weather' == request()->path() ? 'active' : '' }}"> मौसम </a>
									</li>
									<li>
										<a href="{{ url('tourist/safari-zone') }}" class="{{ 'tourist/safari-zone' == request()->path() ? 'active' : '' }}"> सफारी जोन </a>
									</li>
									<li>
										<a href="{{ url('tourist/excursions-and-charges') }}" class="{{ 'tourist/excursions-and-charges' == request()->path() ? 'active' : '' }}"> भ्रमण और शुल्क </a>
									</li>
									<li>
										<a href="{{ url('tourist/points-of-interests') }}" class="{{ 'tourist/points-of-interests' == request()->path() ? 'active' : '' }}">पर्यटन हेतु रुचिकर जगह </a>
									</li>
									<li>
										<a href="{{ url('tourist/stay') }}" class="{{ 'tourist/stay' == request()->path() ? 'active' : '' }}"> पार्क में रहवास </a>
									</li>
									<li>
										<a href="{{ url('tourist/do-and-dont') }}" class="{{ 'tourist/do-and-dont' == request()->path() ? 'active' : '' }}"> क्या करें क्या न करें  </a>
									</li>
									<li>
										<a href="{{ url('tourist/safari-booking') }}" class="{{ 'tourist/safari-booking' == request()->path() ? 'active' : '' }}"> सफारी बुकिंग </a>
									</li>
								</ul>	
								@endif	
																
								</div>
							</div>

						{{--	<div class="single-sidebar-widget">
							@if( session('locale') == 'en' ) 
								<div class="sec-title">
									<h2>Download<span> brochure</span></h2>
									<span>Here is some useful documents</span>
								</div>
							@endif
							@if( session('locale') == 'hi' ) 
								<div class="sec-title">
									<h2>ब्रोशर <span> डाउनलोड करें</span></h2>
									<span>यहाँ कुछ उपयोगी दस्तावेज हैं</span>
								</div>
							@endif	
								
								<ul class="brochure-btns">
									<li>
										<a href="#" class="clearfix"><i class="fa fa-file-pdf-o"></i> <span>Download Brochure</span> </a>
									</li>
									<li>
										<a href="#" class="clearfix"><i class="fa fa-file-pdf-o"></i> <span>Download Brochure</span></a>
									</li>
								</ul>
							</div>  --}}

						</div>
   