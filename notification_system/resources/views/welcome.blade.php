@extends('common.basic') @section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="col-xs-6 col-md-3">
            <div class="thumbnail" style="background-color:#fff;border:none;">
                <img src="./img/list.svg">
            </div>
        </div>
        <div class="title m-b-md">
            Task Notification System
        </div>
        <div class="btn-group">
            <a class="btn btn-default btn-lg" href="{{ url('/login') }}">Login
            </a>
        </div>
        <div class="btn-group">
            <a class="btn btn-default btn-lg" href="{{ url('/register') }}">Register
            </a>
        </div>
    </div>
</div>
<div class="jumbotron" style="border-top:5px solid #00BFA5;border-bottom:5px solid #00BFA5;background-color:#E0F2F1;margin-top:none;margin-bottom:none;padding:none;">
    <div class="container">
        <h1><strong>What's it all about? </strong><span class="text-muted">What's different.</span></h1>
        <hr></hr>
        <div class="col-md-4">
            <div class="img-responsive center-block">
                <img src="./img/list.svg" class="center-block" width="100px">
            </div>
            <h2 class="text-center"><strong>Managing.</strong></h2>
            <p>
                Keep track of your daily tasks on your devices and get notified wherever and whenever.
            </p>
        </div>
        <div class="col-md-4">
            <div class="img-responsive">
                <img src="./img/calendar.svg" class="center-block" width="100px">
            </div>
            <h2 class="text-center"><strong>Organizing.</strong></h2>
            <p>
                Keep track of your tasks easily using color codes, custom alert messages and Intelli Grouping.
            </p>
        </div>
        <div class="col-md-4">
            <div class="img-responsive center-block">
                <img src="./img/presentation.svg" class="center-block" width="100px">
            </div>
            <h2 class="text-center"><strong>Doing.</strong></h2>
            <p>
                Let's you focus on the tasks that really matter while providing you with notifications on demand.
            </p>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <h1 class="text-center">Features</h1>
        <div class="row featurette">
            <div class="col-md-8">
                <p>
                    Convential task management systems, involve continuous collection of unnecessary personal information and storage and thus, I decided to create my own task management system. App free, hassle free. A simple web app that requires me to login and pushes me notifications as long as I keep it open.
                </p>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row featurette">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <p>
                    Easy creation of my task, and alerts should be given to me on demand and in a manner which informs me of information in a legible and easy manner. To use modern buzzwords "data visualization".
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
