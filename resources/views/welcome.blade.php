@extends('layouts.master')

@section('title')
    New England Pinball Locator
@stop

@section('navigation')
    {{-- Create button only available to logged-in users --}}
    @if(Auth::check())
        <li role="presentation" ><a href="/location/create" class="btn">Create a new location</a></li>
    @endif
@stop

@section('content')
    <div class="container">
        <div class="col-md-9 well content-form">
            <h2>Find Places to Play Pinball!</h2>
            <p class="intro">
                Enter criteria in any of the fields below to find locations with pinball games.
            </p>
            <form method='GET' action='/location/query'>
                <div class="row">
                    <div class="col-md-12">

                        {{ csrf_field() }}

                        <div class='form-group'>
                           <label for="name">Business Name:</label>
                            <input
                                class="form-control"
                                type='text'
                                id='name'
                                name='name'
                                value='{{ old('name','') }}'
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-md-5 form-group'>
                       <label for="city">City:</label>
                       <input
                            class="form-control"
                            type='text'
                            id='city'
                            name='city'
                            value='{{ old('city','') }}'
                       >
                    </div>
                    <div class="col-md-4 form-group" >
                       <label for="state">State:</label>
                       <select name='state' id='state' class="form-control">
                           <option value=''>All States</option>
                           @foreach($states_for_dropdown as $state_abbrev => $state_name)
                               <?php $selected = (old('state', '') == $state_abbrev) ? 'SELECTED' : '' ?>
                               <option value='{{$state_abbrev}}' {{$selected}}>{{$state_name}}</option>
                           @endforeach
                       </select>
                    </div>
                    <div class='col-md-3 form-group'>
                       <label for="zip">Zip:</label>
                       <input
                            class="form-control"
                            type='text'
                            id='zip'
                            name='zip'
                            value='{{ old('zip','') }}'
                       >
                    </div>
                </div>
                <div class="row">
                    <div class='col-md-5 form-group'>
                       <label for="business_type">Type of Business:</label>
                       <select name='business_type' id='business_type' class="form-control">
                           <option value='' >All Types</option>
                           @foreach($business_types_for_dropdown as $key => $value)
                               <?php $selected = (old('business_type', '') == $key) ? 'SELECTED' : '' ?>
                               <option value='{{$key}}' {{$selected}}>{{$value}}</option>
                           @endforeach
                       </select>
                    </div>
                </div>
                <div class="row">
                    <div class='col-md-5 form-group'>
                       <label for="game_name">Game Name:</label>
                       <input
                            class="form-control"
                            type='text'
                            id='game_name'
                            name='game_name'
                            value='{{ old('game_name','') }}'
                       >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <button type="submit" class="btn btn-primary">Find Locations</button>
                        <button type="reset" class="btn">Clear Form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
