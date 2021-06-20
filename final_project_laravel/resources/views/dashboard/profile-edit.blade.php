@extends('dashboard.layouts.dashboard-layout')
@push('css')



@endpush



@section('content')
<div class="container-fluid">
<div class="card-body" >
        <div class="profile-card">

                            <form class="user" method="POST" action="{{ route('dashboard.updateProfile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control form-control-user" id="name"
                                            placeholder="Name" name="name" value="{{ $user->name }}" required>
                                    </div>
                                    <div class="form-group">
                                    
                                        <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                    <label for="contact_no" class="form-label">Contact Number</label>
                                        <input type="number" class="form-control form-control-user" id="contact_no"
                                            placeholder="Contact Number" name="contact_no" value="{{ $user->contact_no }}" required>
                                    </div>
                                  
                                    <div class="form-group">
                                  <label for="profile_image" class="form-label">Upload profile picture</label>
                                    <br>
                                    <img src="http://localhost:8000/storage/{{ $user->profile_image }}" style="width:100px; border-radius: 50%; margin: 20px;" />

                                    <input type="file" class="form-control-file form-control-user" id="profile_image" name="profile_image">
                            </div>
                           
                                    <div class="form-group">
                                    
                                        <label for="bdate" class="form-label">Birthdate</label>
                                            <input type="date" class="form-control form-control-user"
                                                id="bdate" placeholder="Birthdate" name="bdate" value="{{ $user->bdate }}" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">Save</button>
                                </div>
                                <hr>
                            </form>

                            </div>
                            </div>
                            </div>
@endsection


@push('script')

@endpush