@extends('layouts.app')

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
                        <p>Apartment Rules<p/>
                            <div class="row">
                                
                        
                           
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Wireless Internet  </span>
                     </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                     <span class="ti-check-box"></span>
                     <span class="custom-control-description">Smoking Allowed  </span>
                   </label> </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Street Parking</span>
                  </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Special</span>
                 </label> </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                  <span class="ti-check-box"></span>
                  <span class="custom-control-description">Accepts Credit cards</span>
                </label>
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
                                <div class="col-md-6">
                                    <label class="custom-checkbox">
                            <span class="ti-check-box"></span>
                            <span class="custom-control-description">Bike Parking</span>
                          </label> </div>
                                <div class="col-md-6">
                                    <label class="custom-checkbox">
                           <span class="ti-check-box"></span>
                           <span class="custom-control-description">Wireless Internet  </span>
                         </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="custom-checkbox">
                         <span class="ti-check-box"></span>
                         <span class="custom-control-description">Smoking Allowed  </span>
                       </label> </div>
                                <div class="col-md-6">
                                    <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Street Parking</span>
                      </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Special</span>
                     </label> </div>
                                <div class="col-md-6`">
                                    <label class="custom-checkbox">
                      <span class="ti-check-box"></span>
                      <span class="custom-control-description">Accepts Credit cards</span>
                    </label>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="{{ asset('storage/home/waiting.jpg') }}" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p> Doyers St<br> New York, NY 10013<br> b/t Division St & St James Pl <br> Chinatown, Civic Center</p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p> +44 20 7336 8898</p>
                        </div>
                        <div class="address">
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