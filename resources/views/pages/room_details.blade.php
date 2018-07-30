@extends('layouts.app_layout')

@section('content')

    <!--============================= BOOKING =============================-->
    <div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image4 }}" class="grid image-link" >
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image4 }}" class="img-fluid" alt="#" style="height: auto">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image2 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image2 }}" class="img-fluid" alt="#"  style="height: auto">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image3 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image3 }}" class="img-fluid" alt="#"  style="height: auto">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image1 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image1 }}" class="img-fluid" alt="#"  style="height: auto">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image5 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image5 }}" class="img-fluid" alt="#"  style="height: auto">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image3 }}" class="grid image-link">
                        <img src="{{ URL::to('/') }}/storage/rooms/{{ $specific->Image1 }}" class="img-fluid" alt="#"  style="height: auto">
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
                    <h4><strong>{{$specific->Residence_name}}</strong></h4>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="{{action('ReservationsController@index')}}" class="btn btn-danger">RESERVE A ROOM</a>
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
                            <p class="text-justify">{{$specific->Description}}</p>
                            <hr>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                        <p><strong>AMENITIES</strong><p/>
                                    @foreach($features as $feature)
                                        <label class="custom-checkbox">
                                            <span class="ti-check-box"></span>
                                            <span class="custom-control-description">{{$feature->Feature}}  </span>
                                        </label><br>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                        <p><strong>RULES</strong><p/>
                                    @foreach($regulations as $regulation)
                                        <label class="custom-checkbox">
                                            <span class="ti-check-box"></span>
                                            <span class="custom-control-description">{{$regulation->Regulation}}  </span>
                                        </label><br>
                                    @endforeach
                                </div>
                            </div> 
                        <hr>
                        <p><strong>RENTAL CHARGES</strong><p/>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Rent payable monthly :<strong> KSH.{{$specific->Rental_per_month}}</strong></span>
                      </label> </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Advance rental deposit :<strong> KSH.{{$specific->Advance_deposit}}</strong></span>
                     </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                     <span class="ti-check-box"></span>
                     <span class="custom-control-description">Electricity deposit :<strong> KSH.{{$specific->Electricity_deposit}}</strong></span>
                   </label> </div>
                            <div class="col-md-6">
                                <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Water deposit :<strong> KSH.{{$specific->Water_deposit}} </strong></span>
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
                  <span class="custom-control-description">Total Rent :<strong> KSH.{{$specific->Total_rent}}</strong></span>
                </label>
                            </div>
                        </div><hr>
                        <p><strong>NEARBY INSTITUTIONS</strong><p/>
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
                        <img src="{{ asset('storage/home/enquiry-form.jpg') }}" class="img-fluid" alt="#">
                        <div class="container"><br>
                        <h5 class="text-center"><strong>Talk to our team</strong></h5><hr>
                        <div class="alert alert-success" style="display:none"></div>
                        {{ Form::open(array('method'=>'POST','url' => '/room_details/post')) }}
                        <div class="row">
                                <div class="col">
                                  <input required type="text" class="form-control" id="firstName" placeholder="First name">
                                </div>
                                <div class="col">
                                  <input required type="text" class="form-control" id="lastName" placeholder="Last name">
                                </div>
                        </div>
                        <div class="form-group">
                            <br><input required type="text" class="form-control"  id="email" placeholder="Email">
                            <br><input required type="text" class="form-control"  id="mobile" placeholder="Mobile Number">
                            <br><textarea class="form-control" id="Message" cols="50" >I would like to enquire about this room,{{$specific->Layout}} {{$specific->Residence_name}} . Please get back to me as soon as possible.
                                </textarea>
                        </div>
                        
                        <div class="featured-btn-wrap">
                                <button href="#" id="ajaxSubmit" class="btn btn-primary btn-block" onclick="function()">ENQUIRE</button> 
                        </div>
                        
                        {{ Form::close() }}
                        
                        </div>
                    </div>
                </div>
         
            </div>
        </div>
    </section>
@endsection