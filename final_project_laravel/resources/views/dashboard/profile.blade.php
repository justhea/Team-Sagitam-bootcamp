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
                <h6 class="m-0 font-weight-bold text-primary">In Progress</h6>
            </div>
            <div class="card-body" >
                <div class="profile-card">
                    <div class="image-container">
                        <img src="http://localhost:8000/storage/{{ auth()->user()->profile_image }}">
                        <div class="title-name">
                        <h2 class="user-profile">{{ auth()->user()->name }}</h2>
                        </div>
                    </div>
                    <div class="user-container">
                        <p><i class="fas fa-envelope"> Email: {{ auth()->user()->email }}</i><p>
                        <p><i class="fas fa-suitcase"> Case: Criminal Case</i></p>
                        <p><i class="fas fa-phone-square-alt"> Number: {{ auth()->user()->contact_no }}</i></p>
                        <hr>
                        <p>Case Status</p>
                        <div style="background-color: #97D0E3; border-radius: 16px;">
                            <div class="status-progress" style="width: 80%;  padding: 0.1em 16px; border-radius: 16px; text-align: center; color: #fff; background-color: #1090FF;">
                                80%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection


@push('script')

@endpush