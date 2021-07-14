<!--loader-->
<div id="preloader">
    @include('layouts.loader')
</div>
<!--loader-->

<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12 anoop_logo" style="">

                <div class="logo">
                    <a href="{{ url('/') }}" style="padding:2px;"> <img src="{{ asset('public/assets/images/kuno_logo1.png') }}" alt="Awesome Logo" height="80px"> </a>
                </div>
                <ul class="navbar-nav ml-auto anoop_nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ 'news-details' == Request::segment(1) ? 'my-nav' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(Session::has('locale'))
                            @if(session('locale') == 'hi')
                            {{ 'Choose Language / भाषा चुनें :- हिंदी' }}
                            @else
                            {{ 'Choose Language / भाषा चुनें :- English' }}
                            @endif
                        @else
                            {{Config::get('app.locale')}}
                        @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('language/en')}}">English</a>
                            <a class="dropdown-item" href="{{url('language/hi')}}">हिंदी</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area">
    <div class="container anoop">
        <div class="mainmenu-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="display:flex; justify-content:center;">
                    <!--Start mainmenu-->
                    <nav class="main-menu navbar-toggleable-md">
                        <div class="navbar-header hidden-lg-up">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>

                            <ul class="navbar-nav ml-auto anoop_nav1">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <a class="nav-link dropdown-toggle {{ 'news-details' == Request::segment(1) ? 'my-nav' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(Session::has('locale'))
                                        @if(session('locale') == 'hi')
                                        {{ 'Choose Language / भाषा चुनें :- हिंदी' }}
                                        @else
                                        {{ 'Choose Language / भाषा चुनें :- English' }}
                                        @endif
                                    @else
                                        {{Config::get('app.locale')}}
                                    @endif
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{url('language/en')}}">English</a>
                                        <a class="dropdown-item" href="{{url('language/hi')}}">हिंदी</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li>
                                    <a href="{{URL::to('/')}}">{{ __('navbar.menu_home') }}</a>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_about_kuno') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('about/introduction') }}">{{ __('navbar.menu_introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('about/history') }}" class="active">{{ __('navbar.menu_park_history') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about/significance') }}">{{ __('navbar.menu_significance') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about/forest-and-vegetation') }}">{{ __('navbar.menu_forest_and_vagetation') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about/biodiversity') }}">{{ __('navbar.menu_viodiersity') }}</a>
                                        </li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_tourist_info') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('tourist/location') }}">{{ __('navbar.menu_location') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/how-to-reach') }}">{{ __('navbar.menu_how_to_reach') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/weather') }}">{{ __('navbar.menu_weather') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/safari-zone') }}">{{ __('navbar.menu_safari_zone') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/excursions-and-charges') }}">{{ __('navbar.menu_excursion_and_charges') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/points-of-interests') }}">{{ __('navbar.menu_poin_of_interest') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/stay') }}">{{ __('navbar.menu_stay') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/do-and-dont') }}" style="">{{ __('navbar.menu_do_and_dont') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/safari-booking') }}">{{ __('navbar.menu_safari_booking') }}</a>
                                        </li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_park_management') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('park/administrative-body') }}">{{ __('navbar.menu_administrative_body') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('park/goals-and-objectives') }}">{{ __('navbar.menu_goals_and_objectives') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('park/other-activities') }}">{{ __('navbar.menu_other_activity') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_news_corner') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('news') }}">{{ __('navbar.menu_latest_news') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ url('gallery') }}">{{ __('navbar.menu_gallery') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('contact') }}">{{ __('navbar.menu_contact') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('https://forest.mponline.gov.in/') }}"> <button class="btn btn-success text-white safari_btn" >{{ __('navbar.menu_safari_booking') }} </button> </a>
                                </li>
                            </ul>


                            <!----- Mobile Nav ----->
                            <ul class="mobile-menu clearfix">
                                <li>
                                    <a href="{{URL::to('/')}}">{{ __('navbar.menu_home') }}</a>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_about_kuno') }}</a><span class="submenu-button"></span>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('about/introduction') }}">{{ __('navbar.menu_introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('about/history') }}" class="active">{{ __('navbar.menu_park_history') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about/significance') }}">{{ __('navbar.menu_significance') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about/forest-and-vegetation') }}">{{ __('navbar.menu_forest_and_vagetation') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about/biodiversity') }}">{{ __('navbar.menu_viodiersity') }}</a>
                                        </li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_tourist_info') }}</a><span class="submenu-button"></span>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('tourist/location') }}">{{ __('navbar.menu_location') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/how-to-reach') }}">{{ __('navbar.menu_how_to_reach') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/weather') }}">{{ __('navbar.menu_weather') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/safari-zone') }}">{{ __('navbar.menu_safari_zone') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/excursions-and-charges') }}">{{ __('navbar.menu_excursion_and_charges') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/points-of-interests') }}">{{ __('navbar.menu_poin_of_interest') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/stay') }}">{{ __('navbar.menu_stay') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/do-and-dont') }}">{{ __('navbar.menu_do_and_dont') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('tourist/safari-booking') }}">{{ __('navbar.menu_safari_booking') }}</a>
                                        </li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_park_management') }}</a><span class="submenu-button"></span>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('park/administrative-body') }}">{{ __('navbar.menu_administrative_body') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('park/goals-and-objectives') }}">{{ __('navbar.menu_goals_and_objectives') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('park/other-activities') }}">{{ __('navbar.menu_other_activity') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('park/rti') }}">{{ __('navbar.menu_RTI') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:avoid(0);">{{ __('navbar.menu_news_corner') }}</a><span class="submenu-button"></span>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ url('news') }}">{{ __('navbar.menu_latest_news') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ url('gallery') }}">{{ __('navbar.menu_gallery') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('contact') }}">{{ __('navbar.menu_contact') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('https://forest.mponline.gov.in/') }}"> <button class="btn btn-success text-white safari_btn">{{ __('navbar.menu_safari_booking') }} </button> </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->
