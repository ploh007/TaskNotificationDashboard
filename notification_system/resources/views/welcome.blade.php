@extends('common.basic') 
@section('content')
<div class="flex-center position-ref full-height">
<div class="content">
    <div class="title m-b-md">
        Task Notification System
    </div>
    <div class="links">
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
<!--         <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a> -->
    </div>
</div>
</div>
@endsection
