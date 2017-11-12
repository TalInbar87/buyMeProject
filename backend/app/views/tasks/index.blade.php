@extends('layouts.default')
@section('content')
@if(isset($tasks))
{{$tasks}}
    @else
nothing to display
    @endif

    @stop