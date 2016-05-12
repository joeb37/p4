@extends('layouts.master')

@section('title')
    {{$location->name}}
@stop

@section('navigation')
    @if(Auth::check())
        <li role="presentation"><a href="/location/edit/{{$location->id}}">Edit this location</a></li>
        <li role="presentation"><a href="/location/confirm-delete/{{$location->id}}">Delete this location</a></li>
        <li role="presentation"><a href="/location/{{$location->id}}/game/lineup">Update Game Lineup</a></li>
    @endif
@stop

@section('content')
    <div class="container">
        <div class="col-md-9 well content-form">
            <div class="row">
                <div class="col-md-6">
                    <h2>{{$location->name}}</h2>
                </div>
            </div>
            @if(!$location->real)
                <div class="row">
                    <div class="col-md-12">
                        <p class="note">This location represents program test data.  Not an actual location.</p>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-9">
                    {{$location->street_address}}
                    <br/>
                    {{$location->city}}&nbsp;{{$location->state}}&nbsp;{{$location->zip}}
                    <br/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <em>{{$business_type_list[$location->business_type]}}</em>&nbsp;&nbsp;<em>{{$payment_type_list[$location->payment_type]}}</em>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Game Lineup</h3>
                    <div class="lineup-table">
                        @foreach($games as $game)
                            <div class="row game-row">
                                <div class="col-md-4">
                                    <a href="/machine/show/{{$game->machine_id}}">{{$game->name}}</a>
                                </div>
                                <div class="col-md-3">
                                    {{$game->manufacturer}}
                                </div>
                                <div class="col-md-2">
                                    {{$game->year}}
                                </div>
                                @if(Auth::check())
                                    <div class="col-md-2">
                                        <a class="btn" href="/location/{{$location->id}}/game/edit/{{$game->id}}">Details</a>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
