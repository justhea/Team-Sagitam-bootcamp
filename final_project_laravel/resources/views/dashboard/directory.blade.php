@extends('dashboard.layouts.dashboard-layout')

@push('css')
      <!-- Custom styles for this page -->
      <link href="{{asset('dashboards/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@section('content')

        

                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employee Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th> Picture </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>User type</th>
                                            <th>Birthdate</th>
                                            <th>Contact number</th>
                                            <th>Created time</th>
                                        </tr>
                                        @foreach($users as $user)
                                        <tr>
                                           <td><img width="100px" height="70px"class="img-profile rounded-circle"
                                    src="http://localhost:8000/storage/{{ $user->profile_image }}"></td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->user_type }}</td>
                                            <td>{{ $user->bdate }}</td>
                                            <td>{{ $user->contact_no}}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                    <tfoot>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
</div>
            <a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
@endsection


@push('script')

    <!-- Page level plugins 
    <script src="{{asset('dashboards/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboards/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
 
    <script type="text/javascript" charset="utf8" src="{{asset('dashboards/datatables.js')}}">
    
    $(document).ready( function () {
    $('users').DataTable();
} );

</script>

    Page level custom scripts 
    <script src="{{asset('dashboards/js/demo/datatables-demo.js')}}"></script>-->

@endpush