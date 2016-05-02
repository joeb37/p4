@extends('layouts.master')

@section('title')
    Game Lineup
@stop

@section('head')
    <!-- <link href='/css/machine/show.css' rel='stylesheet'> -->
@stop

@section('content')
    <h2>Update Game Lineup</h2>
    <h3>{{ $location->name }}</h3>
    <div style="overflow-y: scroll; height: 400px; width: 500px;">
        @foreach($machines as $machine)
            <input type="checkbox"
                   name="machines[]"
                   value="{{$machine->id}}"
                   {{ (in_array($machine->id, $games_at_this_location)) ? 'CHECKED' : '' }}
            > {{$machine->name}} ({{$machine->manufacturer}})<br/>
        @endforeach
    </div>
@stop


@section('body')
    <!-- <script src="/js/book/show.js"></script> -->
@stop
