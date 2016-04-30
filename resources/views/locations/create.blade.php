@extends('layouts.master')

@section('title')
    Add a new location
@stop

@section('content')

    <h1>Add a new location</h1>

    <form method='POST' action='/location/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>Business Name:</label>
            <input
                type='text'
                id='name'
                name='name'
                value='{{ old('name','') }}'
            >
           <div class='error'>{{ $errors->first('name') }}</div>
        </div>

        <div class='form-group'>
           <label>Address:</label>
           <input
               type='text'
               id='street_address'
               name='street_address'
               value='{{ old('street_address','') }}'
           >
           <div class='error'>{{ $errors->first('street_address') }}</div>
        </div>

        <div class='form-group'>
           <label>City:</label>
           <input
               type='text'
               id='city'
               name='city'
               value='{{ old('city','') }}'
           >
           <div class='error'>{{ $errors->first('city') }}</div>
        </div>

        <div class='form-group'>
           <label>State:</label>
           <select name='state' id='state'>
               <option value=''></option>
               @foreach($states_for_dropdown as $state_abbrev => $state_name)
                   <?php $selected = (old('state', '') == $state_abbrev) ? 'SELECTED' : '' ?>
                   <option value='{{$state_abbrev}}' {{$selected}}>{{$state_name}}</option>
               @endforeach
           </select>
           <div class='error'>{{ $errors->first('state') }}</div>
        </div>

        <div class='form-group'>
           <label>Zip:</label>
           <input
               type='text'
               id='zip'
               name='zip'
               value='{{ old('zip','') }}'
           >
           <div class='error'>{{ $errors->first('zip') }}</div>
        </div>

        <div class='form-group'>
           <label>Type of Business:</label>
           <select name='business_type' id='business_type'>
               <option value='' ></option>
               @foreach($business_types_for_dropdown as $key => $value)
                   <?php $selected = (old('business_type', '') == $key) ? 'SELECTED' : '' ?>
                   <option value='{{$key}}' {{$selected}}>{{$value}}</option>
               @endforeach
           </select>
           <div class='error'>{{ $errors->first('business_type') }}</div>
        </div>

        <div class='form-group'>
           <label>Payment Method:</label>
           <select name='payment_type' id='payment_type'>
               <option value=''></option>
               @foreach($payments_for_dropdown as $key => $value)
                   <?php $selected = (old('payment_type', '') == $key) ? 'SELECTED' : '' ?>
                   <option value='{{$key}}' {{$selected}}>{{$value}}</option>
               @endforeach
           </select>
           <div class='error'>{{ $errors->first('payment_type') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Add Location</button>

        {{--
        <ul class=''>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        --}}

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>


@stop
