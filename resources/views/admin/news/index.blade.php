@extends('admin.layouts.admin')

@section('content')

    @if (session('locale') == 'en')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add News</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add News</li>
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
                    <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                        <div id="myAlert"></div>
                        <form action="{{ url('admin/newsAdd') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="n_title">News Title</label>
                                <input type="text" class="form-control @error('n_title') is-invalid @enderror" id="n_title" name="n_title" value="{{old('n_title')}}" placeholder="Enter News Title">
                                @error('n_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_date">News Date</label>
                                <input type="date" class="form-control @error('n_date') is-invalid @enderror" id="n_date" name="n_date" value="{{old('n_date')}}" >
                                @error('n_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_disc">News Description</label>
                                <textarea class="ckeditor form-control @error('n_disc') is-invalid @enderror" rows="5" id="n_disc" name="n_disc">{{old('n_disc')}}</textarea>
                                @error('n_disc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> Main Images </label>
                                <input type="file" class="form-control-file border @error('n_file') is-invalid @enderror" name="n_file">
                                @error('n_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> Other Images </label>
                                <input type="file" class="form-control-file border @error('n_file-m.*') is-invalid @enderror" name="n_file_m[]" multiple>
                                @error('n_file_m.*')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center">S.No.</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                @php
                                    $id=1;
                                @endphp

                                @foreach($data as $data)
                                <tr>
                                    <td class="text-center">{{$id}}</td>
                                    <td width="15%" class="text-center">{{$data->news_title}}</td>
                                    <td width="10%" class="text-center">{{ date('d-m-Y', strtotime($data->news_date)) }}</td>
                                    <td class="w-50 text-justify">{!! Str::limit($data->news_discription, 300, '...') !!}</td>
                                    <td>
                                        <img src="{{asset('public/storage/eng_news/'.$data->news_image)}}" width="200" height="150" class="img-responsive rounded" alt="image">
                                    </td>
                                    <td><a href="{{ url('admin/newsEdit') }}/{{$data->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deletePost({{ $data->id }})">Delete</button>
                                        <form id="delete-form-{{ $data->id }}" action="{{ route('knp.newsdelete', $data->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>

                                @php
                                    $id++;
                                @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-content -->

        <!-- Modal -->
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure, you want to delete this news ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-danger" id="delPost">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('locale') == 'hi')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">?????????????????? ??????????????????</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">?????????</a></li>
                            <li class="breadcrumb-item active">?????????????????? ??????????????????</li>
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
                    <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                        <div id="myAlert"></div>
                        <form action="{{ url('admin/newsAdd') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="n_title">?????????????????? ??????????????????</label>
                                <input type="text" class="form-control @error('n_title') is-invalid @enderror" id="n_title" name="n_title" value="{{old('n_title')}}" placeholder="?????????????????? ?????????????????? ???????????? ????????????">
                                @error('n_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_date">?????????????????? ????????????</label>
                                <input type="date" class="form-control @error('n_date') is-invalid @enderror" id="n_date" name="n_date" value="{{old('n_date')}}" >
                                @error('n_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_disc">?????????????????? ???????????????</label>
                                <textarea class="ckeditor form-control @error('n_disc') is-invalid @enderror" rows="5" id="n_disc" name="n_disc">{{old('n_disc')}}</textarea>
                                @error('n_disc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>??????????????? ????????????</label>
                                <input type="file" class="form-control-file border @error('n_file') is-invalid @enderror" name="n_file">
                                @error('n_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>???????????? ????????????</label>
                                <input type="file" class="form-control-file border @error('n_file_m.*') is-invalid @enderror" name="n_file_m[]" multiple>
                                @error('n_file_m.*')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">???????????????</button>
                        </form>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center">?????????.??????.</th>
                                    <th class="text-center">??????????????????</th>
                                    <th class="text-center">??????????????????</th>
                                    <th class="text-center">???????????????</th>
                                    <th class="text-center">????????????</th>
                                    <th>????????????????????? ????????????</th>
                                    <th>???????????????</th>
                                </tr>
                                @php
                                    $id=1;
                                @endphp

                                @foreach($data as $data)
                                <tr>
                                    <td class="text-center">{{$id}}</td>
                                    <td width="15%" class="text-center">{{$data->news_title}}</td>
                                    <td width="10%" class="text-center">{{ date('d-m-Y', strtotime($data->news_date)) }}</td>
                                    <td class="w-50 text-justify">{!! Str::limit($data->news_discription, 300, '...') !!}</td>
                                    <td>
                                        <img src="{{asset('public/storage/hin_news/'.$data->news_image)}}" width="200" height="150" class="img-responsive rounded" alt="image">
                                    </td>
                                    <td><a href="{{ url('admin/newsEdit') }}/{{$data->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deletePost({{ $data->id }})">Delete</button>
                                        <form id="delete-form-{{ $data->id }}" action="{{ route('knp.newsdelete', $data->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>

                                @php
                                    $id++;
                                @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-content -->

        <!-- Modal -->
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">??????????????????????????????</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ???????????? ?????? ??????????????????????????? ?????????, ?????? ?????? ?????????????????? ?????? ??????????????? ??????????????? ????????? ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-danger" id="delPost">?????????, ???????????????</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@push('js')
    <!-- Delete Function -->
    <script>
    function deletePost(id)
    {
        $("#delModal").modal('show');

        document.getElementById("delPost").addEventListener("click", function(){
            event.preventDefault();
            document.getElementById('delete-form-'+id).submit();
        });
    }
    </script>
@endpush
