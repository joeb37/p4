@extends('layouts.master')

@section('title')
    Edit location
@stop

@section('content')
    <div class="container">
        <div class="col-md-9 well content-form">
            <h2>Edit Location</h2>

            <form method='POST' action='/location/edit'>
                {{ csrf_field() }}
                <input type="hidden" name='id' value="{{ $location->id }}" >
                <div class="row">
                    <div class="col-md-10 form-group">
                       <label for="name">Business Name:</label>
                        <input
                            class="form-control"
                            type='text'
                            id='name'
                            name='name'
                            value='{{ $location->name }}'
                        >
                       <div class='error'>{{ $errors->first('name') }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 form-group">
                       <label for="street_address">Address:</label>
                       <input
                            class="form-control"
                            type='text'
                            id='street_address'
                            name='street_address'
                            value='{{ $location->street_address }}'
                       >
                       <div class='error'>{{ $errors->first('street_address') }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 form-group">
                       <label for="city">City:</label>
                       <input
                            class="form-control"
                            type='text'
                            id='city'
                            name='city'
                            value='{{ $location->city }}'
                       >
                       <div class='error'>{{ $errors->first('city') }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="state">State:</label>
                        <select name='state' id='state' class="form-control">
                            <option value=''></option>
                            @foreach($states_for_dropdown as $state_abbrev => $state_name)
                               <?php $selected = $location->state == $state_abbrev ? 'SELECTED' : '' ?>
                               <option value='{{$state_abbrev}}' {{$selected}}>{{$state_name}}</option>
                            @endforeach
                        </select>
                        <div class='error'>{{ $errors->first('state') }}</div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="zip">Zip:</label>
                        <input
                            class="form-control"
                            type='text'
                            id='zip'
                            name='zip'
                            value='{{ $location->zip }}'
                        >
                        <div class='error'>{{ $errors->first('zip') }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="business_type">Type of Business:</label>
                        <select name='business_type' id='business_type' class="form-control">
                            <option value='' ></option>
                            @foreach($business_types_for_dropdown as $key => $value)
                                <?php $selected = $location->business_type == $key ? 'SELECTED' : '' ?>
                                <option value='{{$key}}' {{$selected}}>{{$value}}</option>
                            @endforeach
                        </select>
                        <div class='error'>{{ $errors->first('business_type') }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="payment_type">Payment Method:</label>
                        <select name='payment_type' id='payment_type' class="form-control">
                            <option value=''></option>
                            @foreach($payments_for_dropdown as $key => $value)
                                <?php $selected = $location->payment_type == $key ? 'SELECTED' : '' ?>
                                <option value='{{$key}}' {{$selected}}>{{$value}}</option>
                            @endforeach
                        </select>
                        <div class='error'>{{ $errors->first('payment_type') }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                    <div class="col-md-6 error" style="margin-top: 6px;">
                        @if(count($errors) > 0)
                            Please correct the errors above and try again.
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
