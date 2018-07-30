@extends('layouts.app_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>CONFIRM BOOKING DETAILS</strong></div>

                <div class="card-body">
                   
                    <div class="row">
                        <div class="col-md-6">
                                <hr><hr><img src="{{ URL::to('/') }}/storage/rooms/{{$values["image"]}}" style="height: auto" class="img-fluid" alt="#"><hr><hr>
                        </div>
                        <div class="col-md-6">
                            <br><input type="text" class="form-control" id="name" placeholder="NAME : {{$values["user"]}}">
                            <br><input type="text" class="form-control" id="residence" placeholder="RESIDENCE : {{$values["residence"]}}">
                            <br><input type="text" class="form-control" id="layout" placeholder="LAYOUT : {{$values["layout"]}}">
                            <br><input type="text" class="form-control"  id="phone" placeholder="PHONE : +254{{$values["phone"]}}"><br>
                            @if (session('result'))
                                <div class="alert alert-success text-center">
                                    {{ session('result') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger text-center">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <br><a type="button" href="{{action('ReservationsController@create')}}" class="btn btn-primary btn-block" 
                                name="Book"><span><i class="fa fa-user"></i></span>&nbsp;Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
