@extends('dashboard.layouts.dashboard-layout')

@push('css')
    
@endpush

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Welcome back, {{ auth()->user()->name }}</h1>
   
</div>


<!-- Illustrations -->
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



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Jonathan De Santos<span
                        class="float-right">20%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Arnoldo Palolan<span
                        class="float-right">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Rika De Guzman<span
                        class="float-right">60%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Jeremaia Santos <span
                        class="float-right">80%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Michael Angelo <span
                        class="float-right">Complete!</span></h4>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>








   <!-- Content Row -->

   <!-- Earnings (Monthly) Card Example -->


    <!-- Earnings (Monthly) Card Example -->

    <!-- Pending Requests Card Example -->

    
    <!-- Content Row -->

    <!-- Area Chart -->

    <!-- Card Body -->


    <!-- Pie Chart -->

    <!-- Card Header - Dropdown -->


    <!-- Card Body -->

    <!-- Content Row -->

    <!-- Content Column -->
        

    <!-- Color System -->
    
    <!-- Illustrations -->

    <!-- Approach -->

    <!-- /.container-fluid -->





<!-- End of Main Content -->

<!-- Footer -->

<!-- End of Footer -->

<!-- End of Content Wrapper -->

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

  

@endsection

@push('script')
   
@endpush
