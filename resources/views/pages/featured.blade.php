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
                                            <img src="storage/rooms/{{$listing->Image1}}" class="img-fluid" alt="#">
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
                            <div class = "container"> No room </div>
                        @endif
                    </div>
                </div>
            </div>
        </div> 
    </div>
<!--//END DETAIL -->

@endsection