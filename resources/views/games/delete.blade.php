@extends('layouts.master')

@section('title')
    Delete Game
@stop

@section('content')
    <div class="container">
        <div class="well col-md-10">
            <h2>Delete Game</h2>
            <p class="delete-msg">Are you sure you want to delete <em>{{$game->machine->name}}</em> from the lineup at {{$game->location->name}}?</p>
            <p><a href="/location/{{$game->location_id}}/game/delete/{{$game->id}}">Yes, please delete this game...</a></p>
        </div>
    </div>
@stop
