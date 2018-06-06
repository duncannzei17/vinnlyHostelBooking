@extends('layouts.app')

@section('content')
 
 <!--============================= DETAIL =============================-->
    <div class="container-fluid">
        <div class="row">
            @if(count($rooms)>0)
                @foreach($rooms as $room)
                    <div class="col-md-7 responsive-wrap">
                        <div class="row light-bg detail-options-wrap">
                            <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                                <div class="featured-place-wrap">
                                    <a href="Rooms/{{$room->id}}">
                                        <img src="storage/rooms/{{$room->Image1}}" class="img-fluid" alt="#">
                                        <div class="featured-title-box">
                                            <h6>{{$room->Residence_name}}</h6>
                                            <p>Rooms Available </p> <div class="pull-right"><p><b> {{$room->Rooms_available}}</b></p></div>
                                            <ul>
                                                <li><span class="icon-location-pin"></span>
                                                    <p>Rental Charges</p><div class="pull-right"><p><b> {{$room->Rental_per_month}}</b></p></div>
                                                </li>
                                                <li><span class="icon-screen-smartphone"></span>
                                                    <p>Payment Terms</p><div class="pull-right"><p><b> {{$room->Payment_terms}}</b></p></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $rooms->appends($_GET)->links()}}
            @else
                <div class = "container"> No room </div>
            
            <div class="col-md-5 responsive-wrap map-wrap">
                <div class="map-fix">
                    <!-- data-toggle="affix" -->
                    <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                    <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
                </div>
            </div>
            @endif
        </div>
    </div>
<!--//END DETAIL -->

@endsection