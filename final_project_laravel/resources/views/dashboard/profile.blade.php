@extends('dashboard.layouts.dashboard-layout')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


@endpush



@section('content')
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User details</h1>
   
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile Information</h6>
    </div>
    <div class="card-body" >
        <div class="profile-card">
            <div class="image-container">
                <img src="http://ec2-13-212-173-174.ap-southeast-1.compute.amazonaws.com:8000/storage/{{ auth()->user()->profile_image }}">
                <div class="title-name">
                <h2 class="user-profile">{{ auth()->user()->name }}</h2>
                </div>
            </div>
            <div class="user-container">
                <p><i class="fas fa-envelope"> Email: {{ auth()->user()->email }}</i><p>
                <p><i class="fas fa-phone-square-alt"> Contact Number: {{ auth()->user()->contact_no }}</i></p>
                <p><i class="fas fa-birthday-cake"> Birthdate: {{ auth()->user()->bdate }}</i></p>
                <p><i class="fas fa-calendar-plus"> Account created at: {{ auth()->user()->created_at }}</i></p>
                
                <hr>
                <p>Account Completion</p>
                <div style="background-color: #97D0E3; border-radius: 16px;">
                    <div class="status-progress" style="width: 100%;  padding: 0.1em 16px; border-radius: 16px; text-align: center; color: #fff; background-color: #1090FF;">
                        100%
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Files</h6>
    </div>
    <div class="card-body" >
        <div class="profile-card">
            <ul>
                @foreach($fileuploads as $fileupload)
                    <li><a href="http://ec2-13-212-173-174.ap-southeast-1.compute.amazonaws.com:8000/storage/docs/{{ $fileupload->filename }}" download>{{ $fileupload->filename }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


        <div class="col-lg-6">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Account Management</h6>
    </div>
    <div class="card-body">
       <a href="#" class="btn btn-danger" data-toggle="modal"
        data-target="#deleteAccount">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete Account</span>
        </a>
        <a href="{{ route('dashboard.editProfile') }}" class="btn btn-info">
            <span class="icon text-white-50">
            </span>
                <i class="fas fa-user-edit"></i>
            
            <span class="text">Edit Account</span>
          
        </a>
        <div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete your account?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select the delete button to continue</div>
   <div class="modal-footer">
      <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
      <form action="{{ route('dashboard.delete') }}" method="POST">
    @csrf
         <button class="btn btn-secondary" type="submit">Delete</a>
      </form>
   </div>
</div>
        </div>
    </div>
      
</div>

</div>

@endsection


@push('script')

@endpush