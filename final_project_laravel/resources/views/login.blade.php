<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$loginTitle ?? config(app.name)}}</title>

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

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <img src="{{asset('dashboards/img/Benedicto.jpg')}}" class="col-lg-6 d-none d-lg-block new-bg-login-image"> 
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Employee Administrator</h1>
                                    </div>
                                    <form class="user" action="{{ route('login.auth') }}" method="post">
                                    @csrf
                                        <div class="form-group">
                                        <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                                        </div>
                                        <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
                                    </div>
                                </div>
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