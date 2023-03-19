@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <h1>Welcome to your {{ auth()->user()->name }}!</h1>
        @if (auth()->check())
   
@endif
        <!-- Your dashboard content goes here... -->
    </div>
@endsection