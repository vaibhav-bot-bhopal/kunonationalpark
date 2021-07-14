@extends('layouts.front')

@section('content')

    <!-- Intro Section -->
    <div class="page-header parallax">

        @if( session('locale') == 'en' )
            <div class="container">
                <h1 class="title text-center">KUNO GALLERY</h1>
            </div>

            <div class="breadcrumb-box">
                <div class="container" style="display: flex; justify-content: center;">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Gallery
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        @endif

        @if( session('locale') == 'hi' )
            <div class="container">
                <h1 class="title text-center"> कूनो गैलरी</h1>
            </div>

            <div class="breadcrumb-box">
                <div class="container" style="display: flex; justify-content: center;">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">होम</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                            गैलरी
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        @endif

    </div>
    <!-- End Intro Section -->

    <!-- Work Section -->
    <section id="work" class="padding ptb-xs-60">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    @if( session('locale') == 'en' )
                        <h2><span></span> Gallery</h2>
                        <span class="b-line"></span>
                    @endif
                    @if( session('locale') == 'hi' )
                        <h2><span></span> गैलरी</h2>
                        <span class="b-line"></span>
                    @endif
                </div>
            </div>

            <div class="row container-masonry nf-col-3">
                @foreach($images as $images)
                    <div class="nf-item grid-sizer photo spacing">
                        <div class="item-box">
                            <a> <img alt="1" src="{{ asset('public/assets/images/kuno_gallery').'/'.$images }}" class="item-container"> </a>
                            <div class="link-zoom">
                                <a href="{{ asset('public/assets/images/kuno_gallery').'/'.$images }}" class="fancylight" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="display:flex; justify-content:center; margin-top:20px;">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item {{ 'gallery' == request()->path() ? 'active' : '' }}"><a class="page-link" href="{{ url('gallery') }}">1</a></li>
                        <li class="page-item {{ 'gallery/2' == request()->path() ? 'active' : '' }}"><a class="page-link" href="{{ url('gallery/2') }}">2</a></li>
                        <li class="page-item {{ 'gallery/3' == request()->path() ? 'active' : '' }}"><a class="page-link" href="{{ url('gallery/3') }}">3</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </section>
    <!-- End Work Section -->

@endsection
