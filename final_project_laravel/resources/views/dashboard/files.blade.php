@extends('dashboard.layouts.dashboard-layout')
@push('css')



@endpush



@section('content')


 <div class="d-flex vw-100 vh-100 justify-content-center align-items-center">
        <form method="POST" enctype="multipart/form-data" action="{{route('fileupload.files')}}">
            @csrf
                <div class="form-group">
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" class="form-control-file" name="uploadedfile" id="exampleFormControlFile1">
                </div>
                <div class="form-group"><button class="btn btn-success">Upload the file</button></div>
              </form>
        </div>

@endsection

@push('script')

@endpush