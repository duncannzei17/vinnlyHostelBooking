@extends('layouts.app_layout')

@section('content')

    <!--============================= BOOKING =============================-->
    <div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image1 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image1 }}" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image2 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image2 }}" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image3 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image3 }}" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image4 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image4 }}" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image5 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image5 }}" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image3 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image1 }}" class="img-fluid" alt="#">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>{{$specific->Residence_name}}</h4>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="#" class="btn btn-danger">RESERVE A ROOM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p>{{$specific->Description}}</p>
                            <hr>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                        <p>Amenities<p/>
                                    @foreach($features as $feature)
                                        <label class="custom-checkbox">
                                            <span class="ti-check-box"></span>
                                            <span class="custom-control-description">{{$feature->Feature}}  </span>
                                        </label>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                        <p>Rules<p/>
                                    @foreach($regulations as $regulation)
                                        <label class="custom-checkbox">
                                            <span class="ti-check-box"></span>
                                            <span class="custom-control-description">{{$regulation->Regulation}}  </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div> 
                        <hr>
                        <p>Rental charges<p/>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Rent payable monthly :<strong> Ksh.{{$specific->Rental_per_month}}</strong></span>
                      </label> </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Advance rental deposit :<strong> Ksh.{{$specific->Advance_deposit}}</strong></span>
                     </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                     <span class="ti-check-box"></span>
                     <span class="custom-control-description">Electricity deposit :<strong> Ksh.{{$specific->Electricity_deposit}}</strong></span>
                   </label> </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Water deposit :<strong> Ksh.{{$specific->Water_deposit}} </strong></span>
                  </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Payment terms :<strong>{{$specific->Payment_terms}}</strong></span>
                 </label> </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                  <span class="ti-check-box"></span>
                  <span class="custom-control-description">Total Rent :<strong> Ksh.{{$specific->Total_rent}}</strong></span>
                </label>
                            </div>
                        </div><hr>
                        <p>Nearby Institutions<p/>
                    <div class="row">
                           <div class="col-md-12">
                                @foreach($institutions as $institution)
                                   <label class="custom-checkbox">
                                        <span class="ti-check-box"></span>
                                        <span class="custom-control-description">{{$institution->Institution}}  </span>
                                    </label><br>
                                @endforeach
                            </div><hr>
                        </div>
                    </div>                
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="{{ asset('storage/home/waiting.jpg') }}" class="img-fluid" alt="#">
                        <div class="container"><br>
                        <h5 class="text-center"><strong>Talk to our team</strong></h5><hr>
                        <p text="center">Full Name</p><br>
                        <div class="form-group">
                            <input class="col-md-4" type="text" name="firstname" placeholder="First Name">
                        
                            <input class="col-md-4" type="text" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <span class="icon-screen-smartphone"></span>
                            <p> +44 20 7336 8898</p>
                        </div>
                        <div class="form">
                            <span class="icon-link"></span>
                            <p>https://burgerandlobster.com</p>
                        </div>
                        <div class="address">
                            <span class="icon-clock"></span>
                            <p>Mon - Sun 09:30 am - 05:30 pm <br>
                                <span class="open-now">OPEN NOW</span></p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->
    <script type="text/javascript" src=" {{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src=" {{ url('js/popper.min.js') }}" ></script>
    <script type="text/javascript" src=" {{ url('js/bootstrap.min.js') }}" ></script>
    <!-- Magnific popup JS -->
    <script type="text/javascript" src="{{ url('js/jquery.magnific-popup.js') }}" ></script>
    <!-- Swipper Slider JS -->
    <script type="text/javascript" src=" {{ url('js/swiper.min.js') }}" ></script>
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

@endsection