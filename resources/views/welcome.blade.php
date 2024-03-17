@extends('layouts.app')
@section('title','Home Page')
@section('content')

    @auth
    {{auth()->user()->email}}
    @endauth

@endsection