<!DOCTYPE html>
<html>
    <head>
        <!--Viewport for the things -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        
        <title>{{ $title ?? config('app.name') }}</title>
        
        <!--Icon for the lawfirm-->
        <link rel="shortcut icon" href="{{ asset('download.png') }}" type="image/x-icon">
        <!-- Loading third party fonts -->
        <script src="https://kit.fontawesome.com/20be9020c0.js" crossorigin="anonymous"></script>
        

        <!-- Loading main css file -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <style>
            .redtext { color: black; }
        </style>

        @stack('css')
    </head>
    <body>
        <div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="{{ route('home.index') }}" id="branding">
						<img src="{{ asset('images/logo.png') }}" alt="Company Name" class="logo" width="100">
						<div class="branding-copy">
							<h1 class="site-title" style="font-size:60px;">Benedicto Law</h1>
							<small class="site-description">Justice In Words</small>
						</div>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item {{ ($isCurrent == 'Home') ? 'current-menu-item' : '' }}"><a href="{{ route('home.index') }}">Home</a></li>
							<li class="menu-item {{ ($isCurrent == 'Attorney') ? 'current-menu-item' : '' }}"><a href="{{ route('home.attorney') }}">Attorney</a></li>
							<li class="menu-item {{ ($isCurrent == 'Service') ? 'current-menu-item' : '' }}"><a href="{{ route('home.service') }}">Service</a></li>
							<li class="menu-item {{ ($isCurrent == 'Signup') ? 'current-menu-item' : '' }}"><a href="{{ route('login.login') }}">Login</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

            @yield('content')

        </div>

        <footer class="site-footer">
            <div class="container">
                
                <div class="social-links">
                    <a href="https://www.facebook.com/BenedictoRealty/"><i class="fa fa-facebook"></i></a>
                 
                </div>
                <div class="copy">
                    <p>Copyright 2021 Benedicto Law Office</p>
                </div>
            </div>
        </footer> <!-- .site-footer -->

        <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('js/plugins.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>

        @stack('script')
    </body>
</html>
