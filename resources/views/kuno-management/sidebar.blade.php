 
<div class="col-md-4 col-sx-12">
							<div class="single-sidebar-widget">
								<div class="special-links">
								@if( session('locale') == 'en' ) 
								<ul>
									<li>
										<a href="{{ url('park/administrative-body') }}" class="{{ 'park/administrative-body' == request()->path() ? 'active' : '' }}">administrative body</a>
									</li>
									<li>
										<a href="{{ url('park/goals-and-objectives') }}" class="{{ 'park/goals-and-objectives' == request()->path() ? 'active' : '' }}">goals and objectives</a>
									</li>
									<li>
										<a href="{{ url('park/other-activities') }}" class="{{ 'park/other-activities' == request()->path() ? 'active' : '' }}"> other activities</a>
									</li>
								{{--	<li>
										<a href="{{ url('park/rti') }}" class="{{ 'park/rti' == request()->path() ? 'active' : '' }}"> RTI </a>
									</li>  --}}						
								</ul>	
								@endif
								@if( session('locale') == 'hi' ) 
								<ul>
									<li>
										<a href="{{ url('park/administrative-body') }}" class="{{ 'park/administrative-body' == request()->path() ? 'active' : '' }}">प्रशासनिक निकाय</a>
									</li>
									<li>
										<a href="{{ url('park/goals-and-objectives') }}" class="{{ 'park/goals-and-objectives' == request()->path() ? 'active' : '' }}">लक्ष्य और उद्देश्य</a>
									</li>
									<li>
										<a href="{{ url('park/other-activities') }}" class="{{ 'park/other-activities' == request()->path() ? 'active' : '' }}">अन्य गतिविधियाँ </a>
									</li>
								{{--	<li>
										<a href="{{ url('park/rti') }}" class="{{ 'park/rti' == request()->path() ? 'active' : '' }}"> सूचना का अधिकार </a>
									</li>	--}}								
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
   