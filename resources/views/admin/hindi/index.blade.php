@extends('admin.layouts.admin')
@section('content')
<style>
.error{
    color:red;
}
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <!-- your code start here  -->
    <div class="row">
        <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
            <div id="myAlert"></div>
            {{-- @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif --}}

            <form action="{{ url('admin/hin_news_create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="n_title">News Title</label>
                <input type="text" class="form-control" id="n_title" name="n_title" value="{{old('n_title')}}" >
                @error('n_title')
                <span class="error">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                <label for="n_data">News Date</label>
                <input type="date" class="form-control" id="n_date" name="n_date" value="{{old('n_date')}}" >
                @error('n_date')
                <span class="error">{{ $message }}</span>
                @enderror
                </div>
            <div class="form-group">
                <label for="n_disc">News Description</label>
                <textarea class="ckeditor form-control" rows="5" id="n_disc" name="n_disc">{{old('n_disc')}}</textarea>
                @error('n_disc')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
            <strong> Main Images </strong>
                <input type="file" class="form-control-file border" name="n_file">
                @error('n_file')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
            <strong> Other Images </strong>
                <input type="file" class="form-control-file border" name="n_file_m[]" multiple>
                <!-- @error('n_file')
                <span class="error">{{ $message }}</span>
                @enderror -->
            </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th class="text-center">SNo.</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Discription</th>
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
                                <img src="{{asset('public/storage/hin_news/'.$data->news_image)}}" width="200" height="150" class="img-responsive rounded" alt="image">
                            </td>
                            <td><a href="{{ url('admin/hin_news_edit') }}/{{$data->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deletePost({{ $data->id }})">Delete</button>
                                <form id="delete-form-{{ $data->id }}" action="{{ route('hin_news_del', $data->id) }}" method="POST" style="display: none;">
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
    <!-- your code end here  -->
</div>
<!-- /.content-header -->

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
                Are you sure, you want to delete this article ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                <button type="button" class="btn btn-danger" id="delPost">Yes, Delete</button>
            </div>
        </div>
    </div>
</div>
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
