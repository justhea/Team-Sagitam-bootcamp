@extends('dashboard.layouts.dashboard-layout')
@push('css')



@endpush



@section('content')


                            <form class="user" method="POST" action="{{ route('dashboard.profile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control form-control-user" id="name"
                                            placeholder="Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control form-control-user" id="email"
                                            placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="form-group">
                                    
                                        <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="contact_no" class="form-label">Contact Number</label>
                                        <input type="number" min="10" max="11" class="form-control form-control-user" id="contact_no"
                                            placeholder="Contact Number" name="contact_no" required>
                                    </div>
                                  
                                    <div class="form-group">
                                  <label for="profile_image" class="form-label">Upload profile picture</label>
                                <input type="file" class="form-control-file form-control-user" id="profile_image" name="profile_image">
                            </div>
                           
                                    <div class="form-group">
                                    
                                        <label for="bdate" class="form-label">Birthdate</label>
                                            <input type="date" class="form-control form-control-user"
                                                id="bdate" placeholder="Birthdate" name="bdate" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                </div>
                                <hr>
                            </form>
@endsection


@push('script')

@endpush