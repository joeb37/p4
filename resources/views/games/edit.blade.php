@extends('layouts.master')

@section('title')
    Game Notes
@stop

@section('navigation')
    <li role="presentation"><a href="/location/show/{{$location->id}}">Return to {{$location->name}}</a></li>
    <li role="presentation"><a href="/location/{{$location->id}}/game/confirm-delete/{{$game->id}}">Delete this game</a></li>
@stop

@section('content')
    <div class="container">
        <div class="col-md-9 well content-form">
            <h2>Game Notes</h2>
            <h3>{{$machine->name}} at {{ $location->name }}</h3>
            <form method='POST' action='/location/{{$location->id}}/game/edit' >
                {{ csrf_field() }}
                <input type="hidden" name="id" value='{{$game->id}}'>
                <input type="hidden" name="name" value='{{$machine->name}}'>

                <div class="row">
                    <div class="col-md-10 form-group">
                       <label for="pricing">Pricing:</label>
                        <input
                            class="form-control"
                            type='text'
                            id='pricing'
                            name='pricing'
                            value='{{ $game->pricing }}'
                        >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 form-group">
                        <label for="condition">Condition:</label>
                        <textarea
                            class="form-control condition"
                            rows='4'
                            maxlength='255'
                            id='condition'
                            name='condition'
                       >{{ $game->condition }}</textarea>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
