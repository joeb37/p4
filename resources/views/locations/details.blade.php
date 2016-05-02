@extends('layouts.master')

@section('title')
    Location Search Results
@stop

@section('content')

    <h2>{{$location->name}}</h2>
    {{$business_type_list[$location->business_type]}}
    <br/>
    <h3>{{$location->street_address}}</h3>
    <h3>{{$location->city}}&nbsp;{{$location->state}}&nbsp;{{$location->zip}}</h3>
    {{$payment_type_list[$location->payment_type]}}
    <br/>
    <a href="/location/edit/{{$location->id}}">Edit this location</a>&nbsp;<a href="/location/delete/{{$location->id}}">Delete this location</a>


    <div>
        @foreach($games as $game)
            {{$game->manufacturer}}&nbsp;{{$game->name}}
            <br/>
        @endforeach
    </div>

    <a href="/location/{{$location->id}}/game/create">Update Game Lineup</a>

@stop
