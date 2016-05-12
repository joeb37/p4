@extends('layouts.master')

@section('title')
    Login
@stop

@section('content')
    <div class="container">
        <div class="col-md-6 well content-form">

            <p>Don't have an account? <a href='/register'>Register here...</a></p>

            <h2>Login</h2>

            <form method='POST' action='/login'>

                {!! csrf_field() !!}

                <div class="row">
                    <div class='col-md-9 form-group'>
                        <label for='email'>Email:</label>
                        <input type='text' class="form-control" name='email' id='email' value='{{ old('email') }}'>
                        <div class='error'>{{ $errors->first('email') }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class='col-md-9 form-group'>
                        <label for='password'>Password:</label>
                        <input type='password' class="form-control" name='password' id='password' value='{{ old('password') }}'>
                        <div class='error'>{{ $errors->first('password') }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class='col-md-9 form-group'>
                        <label for='remember' class='checkboxLabel'>
                            <input type='checkbox'
                                   name='remember'
                                   id='remember'
                            >
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class='col-md-3 form-group'>
                        <button type='submit' class='btn btn-primary'>Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
