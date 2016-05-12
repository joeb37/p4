@extends('layouts.master')

@section('title')
    Delete Location
@stop

@section('content')
    <div class="container">
        <div class="well col-md-10">
            <h2>Delete Location</h2>
            <p class="delete-msg">Are you sure you want to delete <em>{{$location->name}}</em>?</p>
            <p><a href='/location/delete/{{$location->id}}'>Yes, please delete this location...</a></p>
        </div>
    </div>
@stop
