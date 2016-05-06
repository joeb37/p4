@extends('layouts.master')

@section('title')
    Register
@stop

@section('content')
    <div class="container">
        <div class="col-md-6 well content-form">

            <p>Already have an account? <a href='/login'>Login here...</a></p>

            <h2>Register</h2>

            @if(count($errors) > 0)
                <ul class='errors'>
                    @foreach ($errors->all() as $error)
                        <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method='POST' action='/register'>

                {!! csrf_field() !!}

                <div class="row">
                    <div class='col-md-9 form-group'>
                        <label for='name'>Name</label>
                        <input type='text' class="form-control" name='name' id='name' value='{{ old('name') }}'>
                    </div>
                </div>

                <div class="row">
                    <div class='col-md-9 form-group'>
                        <label for='email'>Email</label>
                        <input type='text' class="form-control" name='email' id='email' value='{{ old('email') }}'>
                    </div>
                </div>

                <div class="row">
                    <div class='col-md-9 form-group'>
                        <label for='password'>Password</label>
                        <input type='password' class="form-control" name='password' id='password'>
                    </div>
                </div>

                <div class="row">
                    <div class='col-md-9 form-group'>
                        <label for='password_confirmation'>Confirm Password</label>
                        <input type='password' class="form-control" name='password_confirmation' id='password_confirmation'>
                    </div>
                </div>

                <div class="row">
                    <div class='col-md-3 form-group'>
                        <button type='submit' class='btn btn-primary'>Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
