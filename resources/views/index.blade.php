@extends('layouts.index_layout')

@section('content')
    
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
                                            <option value="Moi">MOI UNIVERSITY</option>
                                            <option value="Mut">MURANG'A UNIVERSITY</option>
                                            <option value="Mach">MACHAKOS UNIVERSITY</option>                               
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
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="{{ asset('storage/home/image2.jpg') }}" class="img-fluid" alt="#">
                            <div class="featured-title-box">
                                <h6>Apartment Name</h6>
                                        <p>Rooms Available </p> <span>• </span>
                                        <p>Value</p> 
                                        <ul>
                                            <li><span class="icon-wallet"></span>
                                                <p>Rental Charges</p>
                                            </li>
                                            <li><span class="icon-hourglass"></span>
                                                <p>Payment Modes</p>
                                            </li>
                                            <li><span class="icon-grid"></span>
                                                <p>Layout</p>
                                            </li>
                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="text-right">MORE DETAILS</div>
                                        </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="{{ asset('storage/home/image2.jpg') }}" class="img-fluid" alt="#">
                            <div class="featured-title-box">
                                <h6>Apartment Name</h6>
                                        <p>Rooms Available </p> <span>• </span>
                                        <p>Value</p> 
                                        <ul>
                                            <li><span class="icon-wallet"></span>
                                                <p>Rental Charges</p>
                                            </li>
                                            <li><span class="icon-hourglass"></span>
                                                <p>Payment Modes</p>
                                            </li>
                                            <li><span class="icon-grid"></span>
                                                <p>Layout</p>
                                            </li>
                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="text-right">MORE DETAILS</div>
                                        </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="{{ asset('storage/home/image2.jpg') }}" class="img-fluid" alt="#">
                            <div class="featured-title-box">
                               <h6>Apartment Name</h6>
                                        <p >Rooms Available </p> <span>• </span>
                                        <p>Value</p> 
                                        <ul>
                                            <li><span class="icon-wallet"></span>
                                                <p>Rental Charges</p>
                                            </li>
                                            <li><span class="icon-hourglass"></span>
                                                <p>Payment Modes</p>
                                            </li>
                                            <li><span class="icon-grid"></span>
                                                <p>Layout</p>
                                            </li>
                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="text-right">MORE DETAILS</div>
                                        </div>
                            </div>
                        </a>
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
                                <h5>Low listing and advertising rates</h5>
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
    
    @endsection