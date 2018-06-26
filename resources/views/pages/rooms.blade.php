@extends('layouts.app_layout')

@section('content')
 
 <!--============================= DETAIL =============================-->  
 <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 responsive-wrap">
                <div class="row light-bg detail-options-wrap">
            @if(count($rooms)>0)
                @foreach($rooms as $room)
                            <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                                <div class="featured-place-wrap">
                                    <a href="Rooms/{{$room->Room_id}}">
                                        <img src="storage/rooms/{{$room->Image1}}" class="img-fluid" alt="#">
                                        <div class="featured-title-box">
                                            <h6>{{$room->Residence_name}}</h6>
                                            <p>Rooms Available </p> <div class="pull-right"><p><b> {{$room->Rooms_available}}</b></p></div>
                                            <ul>
                                                <li><span class="icon-wallet"></span>
                                                    <p>Rental Charges</p><div class="pull-right"><p><b> {{$room->Rental_per_month}}</b></p></div>
                                                </li>
                                                <li><span class="icon-hourglass"></span>
                                                    <p>Payment Terms</p><div class="pull-right"><p><b> {{$room->Payment_terms}}</b></p></div>
                                                </li>
                                                <li><span class="icon-grid"></span>
                                                    <p>Layout</p><div class="pull-right"><p><b> {{$room->Layout}}</b></p></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                       
                @endforeach
               <div class="container"> {{ $rooms->appends($_GET)->links()}}</div>
            @else
                <div class = "container"> No room </div>
            
            <div class="col-md-5">
                <img  class="img-responsive" src="{{ asset('storage/home/rooms.jpg') }}" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
            </div>
            @endif
        </div>
    </div>
        </div>
    </div>
<!--//END DETAIL -->

@endsection