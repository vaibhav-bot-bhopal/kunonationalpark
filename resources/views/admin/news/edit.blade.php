@extends('admin.layouts.admin')

@section('content')

    @if (session('locale') == 'en')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit News</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit News</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-md-2">
                        <form action="{{ url('admin/newsUpdate/'.$data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="n_title">News Title</label>
                                <input type="text" class="form-control @error('n_title') is-invalid @enderror" id="n_title" name="n_title" value="{{$data->news_title}}" placeholder="Enter News Title">
                                @error('n_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_date">News Date</label>
                                <input type="date" class="form-control @error('n_date') is-invalid @enderror" id="n_date" name="n_date" value="{{$data->news_date}}" >
                                @error('n_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_disc">News Description</label>
                                <textarea class="ckeditor form-control @error('n_disc') is-invalid @enderror" rows="5" id="n_disc" name="n_disc">{{$data->news_discription}}</textarea>
                                @error('n_disc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <input type="hidden" name="h_file" value="{{$data->news_image}}">

                            <div class="form-group">
                                <label for="file">Main Image</label>
                                <input type="file" class="form-control-file border @error('n_file') is-invalid @enderror" name="n_file">
                                @error('n_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    @endif

    @if (session('locale') == 'hi')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">समाचार संपादित करें</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">होम</a></li>
                            <li class="breadcrumb-item active">समाचार संपादित करें</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-md-2">
                        <form action="{{ url('admin/newsUpdate/'.$data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="n_title">समाचार शीर्षक</label>
                                <input type="text" class="form-control @error('n_title') is-invalid @enderror" id="n_title" name="n_title" value="{{$data->news_title}}" placeholder="समाचार शीर्षक दर्ज करें">
                                @error('n_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_date">समाचार तिथि</label>
                                <input type="date" class="form-control @error('n_date') is-invalid @enderror" id="n_date" name="n_date" value="{{$data->news_date}}" >
                                @error('n_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_disc">समाचार विवरण</label>
                                <textarea class="ckeditor form-control @error('n_disc') is-invalid @enderror" rows="5" id="n_disc" name="n_disc">{{$data->news_discription}}</textarea>
                                @error('n_disc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <input type="hidden" name="h_file" value="{{$data->news_image}}">

                            <div class="form-group">
                                <label for="file">मुख्य इमेज</label>
                                <input type="file" class="form-control-file border @error('n_file') is-invalid @enderror" name="n_file">
                                @error('n_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mb-4">सबमिट</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    @endif

@endsection
