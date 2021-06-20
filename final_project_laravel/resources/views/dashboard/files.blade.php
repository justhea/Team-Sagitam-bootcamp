@extends('dashboard.layouts.dashboard-layout')
@push('css')



@endpush



@section('content')

<div class="card-body" >
        <div class="profile-card">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Uploads</h6>
    </div>
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
        </div>
        </div>


        <div class="card-body" >
        <div class="profile-card">
        Note: All files can be accessed in the <a href="{{route('dashboard.profile')}}"> Profile </a> page
        </div>
        </div>

@endsection

@push('script')

@endpush