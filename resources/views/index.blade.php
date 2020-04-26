@extends('welcome')

    @section('styles')
        <link rel="stylesheet" href=" {{asset('css/home.css')}} ">
    @endsection

    @section('content')
        @include('includes.header')
        @include('includes.que-es')
@endsection