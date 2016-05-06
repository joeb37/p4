@extends('layouts.master')

@section('title')
    {{ $machine->name }}
@stop

@section('head')
    <!-- <link href='/css/machine/show.css' rel='stylesheet'> -->
@stop

@section('content')
    @if(isset($machine->name))
        <div class="container">
            <div class="col-md-9 well content-form">
                <h2>{{ $machine->name }}</h2>
                <h3>Manufactured by {{ $machine->manufacturer }} in {{ $machine->year }}</h3>
                <h3>{{ $machine->players }} players</h3>
            </div>
        </div>
    @else
        <h2>Machine not found</h2>
    @endif
@stop


@section('body')
    <!-- <script src="/js/book/show.js"></script> -->
@stop
