@extends('layouts.app_layout')

@section('content')
 
 <!--============================= DETAIL =============================-->  
 <div class="row light-bg">
    <div class="container">
            <div class="row">
                <div class="col-md-12 responsive-wrap">
                    <div class="row light-bg detail-options-wrap">
                        @if(count($listings)>0)
                        @foreach($listings as $listing  )
                            <div class="col-sm-4 col-lg-18 col-xl-4 featured-responsive">
                                <div class="container">
                                    <div class="featured-place-wrap">
                                        <a href="Rooms/{{$listing->Room_id}}">
                                            <img src="storage/rooms/{{$listing->Image1}}" class="img-fluid" alt="#" style="height:280px">
                                            <div class="featured-title-box">
                                                <h6 class = "text-center">{{$listing->Residence_name}}</h6><hr>
                                                <p>Rooms Available </p> <div class="pull-right"><p><b> {{$listing->Rooms_available}}</b></p></div>
                                                <ul>
                                                    <li><span class="icon-wallet"></span>
                                                        <p>Rental Charges</p><div class="pull-right"><p><b>KSH.{{$listing->Rental_per_month}}</b></p></div>
                                                    </li>
                                                    <li><span class="icon-hourglass"></span>
                                                        <p>Payment Terms</p><div class="pull-right"><p><b> {{$listing->Payment_terms}}</b></p></div>
                                                    </li>
                                                    <li><span class="icon-grid"></span>
                                                        <p>Layout</p><div class="pull-right"><p><b> {{$listing->Layout}}</b></p></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            
                        @else
                        <div class = "container"> 
                            <div class="col-lg-12 wowload fadeInUp">
                                <div class="rooms">
                                    <div class="info"><h3 class="text-center">Sorry!</h3><p class="text-center"> We are yet to list a room that meets the specifications.</p></div>
                                    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
                                        <img  class="embed-responsive-item" src="{{ asset('storage/home/waiting_blur.jpg') }}" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div> 
    </div>
<!--//END DETAIL -->

@endsection