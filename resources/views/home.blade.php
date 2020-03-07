@php
    // Create a new cookie with api_token
    setcookie("api_token", auth()->user()->api_token, time()+3600);
@endphp

@extends('layouts.app')

@section('content')
    <App :user="{{ auth()->user() }}"></App>
@endsection
