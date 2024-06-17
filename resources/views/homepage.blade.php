@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <Screenshot screenshot-route="{{route('screenshot.take')}}"/>
@endsection
