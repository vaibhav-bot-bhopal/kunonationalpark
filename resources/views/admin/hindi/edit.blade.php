@extends('admin.layouts.admin')
@section('content')
<style>
.error{
    color:red;
}
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-primary text-uppercase">Kuno National Park</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- your code start here  -->
    <div class="row">
        <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
            <form action="{{ url('admin/hin_news_update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="n_title">News Title</label>
                <input type="text" class="form-control" id="n_title" name="n_title" value="{{$data->news_title}}" >
                @error('n_title')
                <span class="error">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                <label for="n_data">News Date</label>
                <input type="date" class="form-control" id="n_date" name="n_date" value="{{$data->news_date}}" >
                @error('n_date')
                <span class="error">{{ $message }}</span>
                @enderror
                </div>
            <div class="form-group">
                <label for="n_disc">News Description</label>
                <textarea class="ckeditor form-control" rows="5" id="n_disc" name="n_disc">{{$data->news_discription}}</textarea>
                @error('n_disc')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
                <input type="hidden" name="h_file" value="{{$data->news_image}}">
            <div class="form-group">
                <input type="file" class="form-control-file border" name="n_file">
                @error('n_file')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- your code end here  -->
</div>
<!-- /.content-header -->
@endsection
