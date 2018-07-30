<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'vinnly') }}</title>
    <!--<link rel="icon" href="{{ asset('storage/home/title.jpg') }}" type="image/jpg">-->

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
            <div class="container-fluid fixed">
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
    </div> 
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="{{ asset('storage/home/slider.jpg') }}" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Discover residences within your campus.</h1>
                                    <h5>Let's uncover the best accomodations for you.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12">                     
                                {!! Form::open(['method' => 'GET' , 'action' => 'RoomsController@index']) !!}
                                    <div class="btn-group" role="group">
                                       <select required class="btn-group1" name="Campus" placeholder="Select Campus">
                                            <option value="" selected hidden >Select Your Campus</option>
                                            <!-- <option value="Moi">MOI UNIVERSITY</option> -->
                                            <option value="MUT">MURANG'A UNIVERSITY</option>
                                            <option value="UON">UNIVERSITY OF NAIROBI</option>
                                            <option value="KU">KENYATTA UNIVERSITY</option>
                                            <option value="PAC">PAN AFRICAN CHRISTIAN UNIVERSITY</option>
                                            <!-- <option value="JKUAT">JKUAT</option> -->
                                            <!-- <option value="Mach">MACHAKOS UNIVERSITY</option> -->
                                            <option value="USIU">USIU</option>                               
                                        </select>
                                        <select required class="btn-group1" name="Range" placeholder="Select Campus" >
                                           <option value="" selected hidden>Rent Range Per Month</option>
                                                <option value="query1">Less than Ksh5000(Ksh20000 per semester)</option>
                                                <option value="query2">Ksh5000 to Ksh7500(Ksh20000 to Ksh30000)</option>
                                                <option value="query3">Ksh7500 and above(Ksh30000 per semester)</option>                                
                                        </select>
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->

    <!--============================= FEATURED PLACES =============================-->
      
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Featured Residences</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Pass controller with campus parameter-->
                <div class="col-md-3 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href= "{{action('FeaturedController@index',['Campus'=>'mut'])}}">
                            <img src="{{ asset('storage/home/MURANGA.jpg') }}" class="img-fluid" alt="Murang'a" style="height:180px">
                        </a>
						<div class="container">
                                <p class="text-right rounded"><i>View more >></i></p>
                            </div>
                    </div>
                </div>
           
                <div class="col-md-3 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href= "{{action('FeaturedController@index',['Campus'=>'zet'])}}">
                            <img src="{{ asset('storage/home/ZETECH.jpg') }}" class="img-fluid" alt="Zetech" style="height:180px">
                        </a>
						<div class="container">
                                <p class="text-right rounded"><i>View more >></i></p>
                            </div>
                    </div>
                </div>

                <div class="col-md-3 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href= "{{action('FeaturedController@index',['Campus'=>'ku'])}}">
                            <img src="{{ asset('storage/home/KENYATTA.jpg') }}" class="img-fluid" alt="Kenyatta" style="height:180px">
                        </a>
						<div class="container">
                                <p class="text-right rounded"><i>View more >></i></p>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href= "{{action('FeaturedController@index',['Campus'=>'usiu'])}}">
                                <img src="{{ asset('storage/home/USIU.jpg') }}" class="img-fluid" alt="USIU" style="height:180px">
                            </a>
							<div class="container">
                                <p class="text-right rounded"><i>View more >></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href= "{{action('FeaturedController@index',['Campus'=>'mach'])}}">
                                    <img src="{{ asset('storage/home/MACHAKOS.jpg') }}" class="img-fluid" alt="Machakos" style="height:180px">
                                </a>
								<div class="container">
									<p class="text-right rounded"><i>View more >></i></p>
								</div>
                            </div>
                    </div>
                    
                    <div class="col-md-3 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href= "{{action('FeaturedController@index',['Campus'=>'uon'])}}">
                                    <img src="{{ asset('storage/home/NAIROBI.jpg') }}" class="img-fluid" alt="UON" style="height:180px">
                                </a>
								<div class="container">
									<p class="text-right rounded"><i>View more >></i></p>
								</div>
                            </div>
                    </div>

                    <div class="col-md-3 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href= "{{action('FeaturedController@index',['Campus'=>'jkuat'])}}">
                                    <img src="{{ asset('storage/home/JKUAT.jpg') }}" class="img-fluid" alt="JKUAT" style="height:180px">
                                </a>
								<div class="container">
									<p class="text-right rounded"><i>View more >></i></p>
								</div>
                            </div>
                    </div>

                    <div class="col-md-3 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href= "{{action('FeaturedController@index',['Campus'=>'pac'])}}">
                                    <img src="{{ asset('storage/home/PAC.jpeg') }}" class="img-fluid" alt="PAC" style="height:180px">
                                </a>
								<div class="container">
									<p class="text-right rounded"><i>View more >></i></p>
								</div>
                            </div>
                    </div>
            </div>
        </div>
    </section><br>
    <!--//END FEATURED PLACES -->
        <!--============================= FIND PLACES =============================-->
       
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="styled-heading">
                                <h3>Why VHB</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3 text-center">
                              <div class="service-item">
                                <i class="fa fa-yelp fa-3x"></i>
                                <h5>Incredible choices</h5>
                                <p>Whether you want to live in bedsitter, single room or a bed roomed house all are available at VHB website for one to choose. </p>
                              </div>
                            </div>
                            <div class="col-md-3 text-center">
                              <div class="service-item">
                              <i class="fa fa-money fa-3x"></i>
                                <h5>Low listing and advertisement rates</h5>
                                <p>Property owners and landlords are offered a platform to market and reach out clients at low rates.</p>
							  <br></div>
                            </div>
                            <div class="col-md-3 text-center category-responsive">
                              <div class="service-item">
                                <i class="fa fa-key fa-3x"></i>
                                <h5>Fast and Secure booking</h5>
                                <p>We connect students directly to property owners and landlords with assurance of efficient accommodation.</p>
                              </div>
                            </div>
							<div class="col-md-3 text-center">
                              <div class="service-item">
                                <i class="fa fa-clock-o fa-3x"></i>
                                <h5>24/7 support</h5>
                                <p>Immediately after booking, we confirm your booking and facilitate your matching to your landlord who assures your booking.</p>
                            </div>
                        </div>
                    </div>
                </div><br><br>
            
            <!--//END FIND PLACES -->
    <!--============================= CATEGORIES =============================-->
        <div class="row light-bg detail-options-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="styled-heading">
                            <br><h3>Our Partners</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 category-responsive">
                        <a href="http://www.mut.ac.ke" class="category-wrap">
                            <div class="category-block">
                                <img src="{{ url('storage/home/muranga.jpg') }}"     >
                                    <h6>Murang'a University</h6>
                            </div>
                        </a>
                    </div>
                    <!--
                    <div class="col-md-3 category-responsive">
                        <a href="#" class="category-wrap">
                            <div class="category-block">
            
                                <h6>Beauty & Spa</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 category-responsive">
                        <a href="#" class="category-wrap">
                            <div class="category-block">

                                <h6>Hotel</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 category-responsive">
                        <a href="#" class="category-wrap">
                            <div class="category-block">
        
                                <h6>Restaurant</h6>
                            </div>
                        </a>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
<!--//END CATEGORIES -->
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

<!--//END BOOKING DETAILS -->
<script type="text/javascript" src=" {{ url('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src=" {{ url('js/popper.min.js') }}" ></script>
<script type="text/javascript" src=" {{ url('js/bootstrap.min.js') }}" ></script>
<!-- Magnific popup JS -->
<script type="text/javascript" src="{{ url('js/jquery.magnific-popup.js') }}" ></script>
<!-- Swipper Slider JS -->
<script type="text/javascript" src=" {{ url('js/swiper.min.js') }}" ></script>
<script>
jQuery(document).ready(function(){
   jQuery('#ajaxSubmit').click(function(e){
      e.preventDefault();
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
      jQuery.ajax({
         url: "{{ url('room_details/post') }}",
         method: 'POST',
         dataType: 'json',
         data: {
            firstName: jQuery('#firstName').val(),
            lastName: jQuery('#lastName').val(),
            email: jQuery('#email').val(),
            phone: jQuery('#mobile').val(),
            Message: jQuery('#Message').val()
         },
         success: function(result){
            console.log(result);
         }});
      });
   });
</script>
<script>
$(window).scroll(function() {
// 100 = The point you would like to fade the nav in.

if ($(window).scrollTop() > 700) {

    $('.fixed').addClass('is-sticky');

} else {

    $('.fixed').removeClass('is-sticky');

    };
});
</script>
<script>
var swiper = new Swiper('.swiper-container', {
slidesPerView: 3,
slidesPerGroup: 3,
loop: true,
loopFillGroupWithBlank: true,
pagination: {
    el: '.swiper-pagination',
    clickable: true,
},
navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
});
</script>
<script>
if ($('.image-link').length) {
$('.image-link').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
}
if ($('.image-link2').length) {
$('.image-link2').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
}
</script>
</div>
</body>
</html>
