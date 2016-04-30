@extends('layouts.master')

@section('title')
    Show machine {{ $machine->name }}
@stop

@section('head')
    <!-- <link href='/css/machine/show.css' rel='stylesheet'> -->
@stop

@section('content')
    @if(isset($machine->name))
        <h2>{{ $machine->name }}</h2>
        <h3>Manufactured by {{ $machine->manufacturer }} in {{ $machine->year }}</h3>
        <h3>{{ $machine->players }} players</h3>
    @else
        <h1>Machine not found</h1>
    @endif
@stop


@section('body')
    <!-- <script src="/js/book/show.js"></script> -->
@stop
