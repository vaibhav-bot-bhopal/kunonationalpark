 
<div class="col-md-4 col-sx-12">
							<div class="single-sidebar-widget">
								<div class="special-links">
								@if( session('locale') == 'en' ) 
								<ul>
									<li>
										<a href="{{ url('about/introduction') }}" class="{{ 'about/introduction' == request()->path() ? 'active' : '' }}">Introduction</a>
									</li>
									<li>
										<a href="{{ url('about/history') }}" class="{{ 'about/history' == request()->path() ? 'active' : '' }}">History</a>
									</li>
									<li>
										<a href="{{ url('about/significance') }}" class="{{ 'about/significance' == request()->path() ? 'active' : '' }}"> Significance </a>
									</li>
									<li>
										<a href="{{ url('about/forest-and-vegetation') }}" class="{{ 'about/forest-and-vegetation' == request()->path() ? 'active' : '' }}"> Forest and Vegetation </a>
									</li>
									<li>
										<a href="{{ url('about/biodiversity') }}" class="{{ 'about/biodiversity' == request()->path() ? 'active' : '' }}"> Biodiversity </a>
									</li>
								</ul>	
								@endif
								@if( session('locale') == 'hi' ) 
								<ul>
									<li>
										<a href="{{ url('about/introduction') }}" class="{{ 'about/introduction' == request()->path() ? 'active' : '' }}">परिचय</a>
									</li>
									<li>
										<a href="{{ url('about/history') }}" class="{{ 'about/history' == request()->path() ? 'active' : '' }}">पार्क का इतिहास</a>
									</li>
									<li>
										<a href="{{ url('about/significance') }}" class="{{ 'about/significance' == request()->path() ? 'active' : '' }}"> महत्व </a>
									</li>
									<li>
										<a href="{{ url('about/forest-and-vegetation') }}" class="{{ 'about/forest-and-vegetation' == request()->path() ? 'active' : '' }}"> वन और वनस्पति </a>
									</li>
									<li>
										<a href="{{ url('about/biodiversity') }}" class="{{ 'about/biodiversity' == request()->path() ? 'active' : '' }}"> जैव विविधता </a>
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
   