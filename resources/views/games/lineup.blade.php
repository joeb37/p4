@extends('layouts.master')

@section('title')
    Game Lineup
@stop

@section('head')
    <!-- <link href='/css/machine/show.css' rel='stylesheet'> -->
@stop

@section('content')
    <div class="container">
        <div class="col-md-9 well content-form">
            <h2>Update Game Lineup</h2>
            <h3>{{ $location->name }}</h3>
            <form method='POST' action='/location/{{$location->id}}/game/lineup' >

                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-9 form-group">
                        <div style="overflow-y: scroll; height: 400px; width: 500px;">
                            @foreach($machines as $machine)
                                <label>
                                <input type="checkbox"
                                       name="machines[]"
                                       value="{{$machine->id}}"
                                       {{ (in_array($machine->id, $games_at_this_location)) ? 'CHECKED' : '' }}
                                > {{$machine->name}} ({{$machine->manufacturer}})
                                </label>
                                <br/>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop


@section('body')
    <!-- <script src="/js/book/show.js"></script> -->
@stop
