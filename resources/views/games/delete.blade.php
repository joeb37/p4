@extends('layouts.master')

@section('title')
    Delete Game
@stop

@section('content')
    <div class="container">
        <div class="well col-md-6">
            <h2>Delete Game</h2>
            <p>Are you sure you want to delete <em>{{$game->machine->name}}</em> from the lineup at {{$game->location->name}}</p>
            <p><a href="/location/{{$game->location_id}}/game/delete/{{$game->id}}">Confirm...</a></p>
        </div>
    </div>
@stop
