@extends('layouts.master')

@section('title')
    Game Lineup
@stop

@section('head')
    <!-- <link href='/css/machine/show.css' rel='stylesheet'> -->
@stop

@section('navigation')
    <li role="presentation"><a href="/location/show/{{$location->id}}">Return to {{$location->name}}</a></li>
@stop

@section('content')
    <div class="container">
        <div class="col-md-12 well content-form">
            <h2>Update Game Lineup</h2>
            <h3>{{ $location->name }}</h3>
            <form method='POST' action='/location/{{$location->id}}/game/lineup' >

                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="available">Available</label>
                        <select size="20" id = "available" name="available" class="form-control game-listbox">

                            @foreach($machines as $machine)
                                @if( !in_array($machine->id, $games_at_this_location) )
                                    <option value="{{$machine->id}}" >{{$machine->name}} ({{$machine->manufacturer}})</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <a href="JavaScript:void(0);" id="btn-add" style="margin-top: 100px" class="btn btn-info">Add &gt;&gt;</a><br>
                        <a href="JavaScript:void(0);" id="btn-remove" style="margin-top: 50px" class="btn btn-info">&lt;&lt; Remove</a>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="machines">Selected</label>
                        <select size="20" id="machines" name="machines[]" class="form-control game-listbox" multiple>

                            @foreach($machines as $machine)
                                @if( in_array($machine->id, $games_at_this_location) )
                                    <option SELECTED value="{{$machine->id}}" >{{$machine->name}} ({{$machine->manufacturer}})</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button type="submit" id="btn-update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop


@section('body')
    <script src="/js/game/lineup.js"></script>
@stop
