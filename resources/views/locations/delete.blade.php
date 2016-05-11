@extends('layouts.master')

@section('title')
    Delete Location
@stop

@section('content')
    <div class="container">
        <div class="well col-md-6">
            <h2>Delete Game</h2>
            <p>Are you sure you want to delete <em>{{$location->name}}</em></p>
            <p><a href='/location/delete/{{$location->id}}'>Confirm...</a></p>
        </div>
    </div>
@stop
