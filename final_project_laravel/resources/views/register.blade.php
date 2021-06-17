<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('dashboards/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('dashboards/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <style>
        .new-bg-register-image {
             background: url("{{asset('dashboards/img/Benedicto.jpg')}}");
             background-position: center;
             background-size: cover;
        }
    </style>

</head>

<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block new-bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>

                                @if (!$register)
                                    <div class="alert alert-danger" role="alert">
                                        Email already exist.
                                    </div>
                                @endif
                            </div>
                            <form class="user" method="POST" action="{{ route('register.register') }}" enctype="multipart/form-data">
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
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{route('login.login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('dashboards/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('dashboards/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('dashboards/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('dashboards/js/sb-admin-2.min.js')}}"></script>

</body>

</html>