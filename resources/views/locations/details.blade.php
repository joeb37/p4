@extends('layouts.master')

@section('title')
    {{$location->name}}
@stop

@section('content')
    <div class="container">
        <div class="col-md-9 well content-form">
            <div class="row">
                <div class="col-md-3">
                    <h2>{{$location->name}}</h2>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-default" href="/location/edit/{{$location->id}}">Edit this location</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-default" href="/location/delete/{{$location->id}}">Delete this location</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-default" href="/location/{{$location->id}}/game/lineup">Update Game Lineup</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    {{$business_type_list[$location->business_type]}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    {{$location->street_address}}
                    <br/>
                    {{$location->city}}&nbsp;{{$location->state}}&nbsp;{{$location->zip}}
                    <br/>
                    {{$payment_type_list[$location->payment_type]}}
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <h3>Game Lineup</h3>
                    <div class="lineup-table">
                        @foreach($games as $game)
                            <div class="row game-row">
                                <div class="col-md-6">
                                    <a href="/machine/show/{{$game->machine_id}}">{{$game->name}}</a>
                                </div>
                                <div class="col-md-4">
                                    {{$game->manufacturer}}
                                </div>
                                <div class="col-md-2">
                                    <a class="btn" href="/location/{{$location->id}}/game/edit/{{$game->id}}">Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
