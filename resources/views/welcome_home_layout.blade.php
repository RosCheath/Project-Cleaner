<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ config('app.name', 'Home Page') }}</title>
      <link rel="shortcut icon" href="vacuum-w.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/home/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/home/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/home/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/home/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/home/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/style.css')}}">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#"><img src="vacuum-w.png" width="36" height="36">  {{ config('app.name', 'LOGO') }}</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="/" class="nav-link">Home</a>
                </li>
	        	<li class="nav-item {{ (request()->is('services')) ? 'active' : '' }}">
                    <a href="services" class="nav-link">Services</a>
                </li>
{{--	        	<li class="nav-item {{ (request()->is('gallery')) ? 'active' : '' }}">--}}
{{--                    <a href="gallery" class="nav-link">Gallery</a>--}}
{{--                </li>--}}
	        	<li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                    <a href="about" class="nav-link">About</a>
                </li>
	        	<li class="nav-item {{ (request()->is('booking*')) ? 'active' : '' }}">
                    <a href="{{route('booking.index')}}" class="nav-link notification">My Cart
                        @if($bookingCount>0)
                        <span class="badge">{{$bookingCount}}</span>
                        @endif
                    </a>
                </li>
	          <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                  <a href="contact" class="nav-link">Contact & Blog</a>
              </li>
                @if(Auth::user())
                    @can('user-feature')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('v_profile')}}">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endcan
                    @can('admin-feature')
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link">Dashborad</a>
                    </li>
                    @endcan
                @else
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link">Sign Up</a>
                    </li>
                @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->



    @yield('content')



    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo">{{ config('app.name', 'Text LOGO') }}</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                <li><a href="#" class="py-2 d-block">Privacy</a></li>
                <li><a href="#" class="py-2 d-block">Terms Condition</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Work</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('assets/home/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/home/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/home/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/home/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/home/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/home/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/home/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/home/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/home/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/home/js/aos.js')}}"></script>
  <script src="{{asset('assets/home/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/home/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assets/home/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assets/home/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assets/home/js/google-map.js')}}"></script>
  <script src="{{asset('assets/home/js/main.js')}}"></script>

  </body>
</html>
<style>
    .notification {
        color: white;
        text-decoration: none;
        position: relative;
        display: inline-block;
        border-radius: 2px;
    }


    .notification .badge {
        position: absolute;
        border-radius: 50%;
        background: red;
        color: white;
    }
</style>
