@extends('layouts.master')

@section('title')
    Location Search Results
@stop

@section('content')
    <div class="container">
        <div class="col-md-9 well content-form">
            <h2>Location Search Results</h2>
            @foreach($locations as $location)
                <div class="row result-row">
                    <div class="col-md-5 result-col">
                        <a class="location-title" href="/location/show/{{$location->id}}" >{{$location->name}}</a>
                        <br/>
                        {{$location->street_address}}
                        <br/>
                        {{$location->city}}&nbsp;{{$location->state}}&nbsp;{{$location->zip}}
                    </div>
                    <div class="col-md-4 result-col">
                        {{$business_type_list[$location->business_type]}}<br>
                        {{$payment_type_list[$location->payment_type]}}
                    </div>
                    <div class="col-md-3 result-col" >
                        {{$location->game_total}} games available
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
