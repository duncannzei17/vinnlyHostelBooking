<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'vinnly') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="{{url('css/set1.css')}}">
    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="{{url('css/simple-line-icons.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="{{url('css/swiper.min.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
<div id="app">
        <div class="dark-bg sticky-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand pull-left" href="{{ url('/') }}"><img src="{{ asset('storage/home/logo1.png') }}"></a> 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-menu"></span>
                            </button> 
							<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<!-- Left Side Of Navbar 
								ul class="navbar-nav mr-auto">

							</ul>
							-->
							<!-- Right Side Of Navbar -->
							<ul class="navbar-nav ml-auto">
                        <!-- Pages Links -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('/about_us') }}">About us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('/contact')}}">Contact</a>
                            </li>
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}"><span<i class="fa fa-sign-in"></i></span> {{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}"><span><i class="fa fa-user"></i><span> {{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						</ul> 
						</div>	
    				</div>
				</div>
            </div> 
        </div> 	
      
    @include('flashy::message')
     @yield('content')
      
     <!-- footer -->
     <footer class="main-block dark-bg">
            <div class="container text-white">
                <div class="row">
                    <div class="col-sm-5">
                        <h4>Vinnly platform</h4>
                        <p class="text-justify">Vinnly is an online platform where prospective university students seeking accommodation services outside school could sort this information. The first of its kind, the platform aims to digitize and to revolutionize the acquisition of external student accommodation services.</p>
                    </div>              
                    
                    <div class="col-sm-3">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">       
                            <li><a href="{{ url('/about_us') }}">About US</a></li>
                            <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                            <li><a class="text-center">Safaricom +254 722 721 268</a></li>
                            <li><a class="text-center">Airtel  +254 789 208 493</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 subscribe">
                        <h4>Subscription</h4>
                       {!!Form::open(['method'=>'GET','action'=>'SubscribesController@create'])!!}
                       @if (session('subscribe'))
                                <div class="alert alert-success text-center">
                                    {{ session('subscribe') }}
                                </div>
                        @endif
                        <div class="input-group">
                            <input name="email" type="email" class="form-control" placeholder="Enter your email here" required>
                            <span class="input-group-btn">
                            {{Form::submit('Get Notify',['class'=>'btn btn-primary'])}}
                            </span>
                        </div>
                        {!!Form::close()!!}
                        <br>
                        <div class="social text-center">
                        <a href="https://www.facebook.com/Vinnly-Hostel-Bookingcom-VHB-1414070982038513/"><i class="fa fa-facebook-square" data-toggle="tooltip" style="font-size:2.0em;" data-placement="top" data-original-title="facebook"></i></a>
                        <a href="https://www.instagram.com/vinnlyhostelbooking/"><i class="fa fa-instagram"  data-toggle="tooltip" style="font-size:2.0em;" data-placement="top" data-original-title="instragram"></i></a>
                        <a href="https://www.twitter.com/VinnlyHostels/"><i class="fa fa-twitter-square" data-toggle="tooltip" style="font-size:2.0em;" data-placement="top" data-original-title="twitter"></i></a>
                        </div>
                    </div>
                </div> 
                <!--/.row--> 
            </div>
            <!--/.container-->    

        <!--/.footer-bottom--> 
        </footer>

        <div class="text-center copyright light-bg">Powered by Nzei Software Solutions. <a href="{{ url('/terms') }}" >Terms and conditions. </a><a  href="{{ url('/privacy') }}" >Privacy policy</a></div>
 
</div>
<script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}" ></script>
</body>
</html>
