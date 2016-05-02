@extends('layouts.master')

@section('title')
    Location Search Results
@stop

@section('content')

    <h1>Matching Locations</h1>

    @foreach($locations as $location)
        <div>
            <a href="/location/show/{{$location->id}}" >{{$location->name}}</a>&nbsp;<span>{{$business_type_list[$location->business_type]}}
            <br/>
            {{$location->street_address}}
            <br/>
            {{$location->city}}&nbsp;{{$location->state}}&nbsp;{{$location->zip}}
            <br/>
            {{$payment_type_list[$location->payment_type]}}
            <br/><a href="/location/edit/{{$location->id}}">Edit this location</a>&nbsp;<a href="/location/delete/{{$location->id}}">Delete this location</a>
        </div>
    @endforeach

@stop
