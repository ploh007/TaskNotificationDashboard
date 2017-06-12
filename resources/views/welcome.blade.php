@extends('common.basic') 
@section('content')
<link href="{!! asset('css/welcome.css') !!}" rel="stylesheet">

<script>
    new WOW().init();
</script>

<div class="jumbotron wow fadeInDown" id="welcome-jumbotron">
    <div class="container">
        <div class="center-block text-center wow">
            <h1 class="wow fadeInUp" data-wow-delay=".5s" id="text-content">
                <div id="task-text"> <img src="{!! asset('img/list.svg') !!}" width="100px"> Task</div>
                NOTIFICATION<br>
            </h1>
            <div class="btn-group wow fadeIn" data-wow-delay=".5s">
                <a class="btn btn-default btn-lg custom-btn" href="{{ url( '/login') }}">Login
                </a>
                <a class="btn btn-default btn-lg custom-btn" href="{{ url( '/register') }}">Register
                </a>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron wow fadeInUp" id="information-jumbotron">
    <div class="container"> 
        <h1><strong>What's it all about? </strong><span class="text-muted">What's different.</span></h1>
        <hr></hr>
        <div class="col-md-4 wow fadeInLeft" data-wow-delay=".5s">
            <div class="img-responsive center-block">
                <img src="{!! asset('img/list.svg') !!}" class="center-block" width="100px">
            </div>
            <h3 class="text-center"><strong>Managing.</strong></h3>
            <p>
                Keep track of your daily tasks on your devices and get notified wherever and whenever.
            </p>
        </div>
        <div class="col-md-4  wow fadeInUp" data-wow-delay=".5s">
            <div class="img-responsive">
                <img src="{!! asset('img/calendar.svg') !!}" class="center-block" width="100px">
            </div>
            <h3 class="text-center"><strong>Organizing.</strong></h3>
            <p>
                Keep track of your tasks easily using color codes, custom alert messages and Intelli Grouping.
            </p>
        </div>
        <div class="col-md-4 wow fadeInRight" data-wow-delay=".5s">
            <div class="img-responsive center-block">
                <img src="{!! asset('img/presentation.svg') !!}" class="center-block" width="100px">
            </div>
            <h3 class="text-center"><strong>Doing.</strong></h3>
            <p>
                Let's you focus on doing your tasks and getting to what really matters.
            </p>
        </div>
    </div>
</div>
<div class="jumbotron wow fadeInUp" id="features-jumbotron">
    <div class="container">
        <h1 class="text-center"><strong>Features</strong></h1>
        <hr class="featurette-heading"></hr>
        <div class="row wow fadeIn" data-wow-delay=".5s">
            <div class="col-md-8 col-md-push-4">
                <p>
                    Convential task management systems, involve continuous collection of unnecessary personal information and storage. Thus, I decided to create my own task management system. App free, hassle free. A simple web app that requires me to login and pushes me notifications as long as I keep it open.
                </p>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <div class="img-responsive center-block">
                    <img src="{!! asset('img/locked.svg') !!}" class="center-block" width="100px">
                </div>
            </div>
        </div>
        <hr class="featurette-heading"></hr>
        <div class="row wow fadeIn" data-wow-delay=".75s">
            <div class="col-md-4 col-md-push-8">
                <div class="img-responsive center-block">
                    <img src="{!! asset('img/list-2.svg') !!}" class="center-block" width="100px">
                </div>
            </div>
            <div class="col-md-8 col-md-pull-4">
                <p>
                    Easy creation of my task, and alerts should be given to me on demand and in a manner which informs me of information in a legible and easy manner. To use modern buzzwords "data visualization ".
                </p>
            </div>
        </div>
        <hr class="featurette-heading"></hr>
        <div class="row wow fadeIn" data-wow-delay="1s">
            <div class="col-md-8 col-md-push-4">
                <p>
                    It’s free, quick and easy! 3 essentials for any task management system! For even more portability, you can carry around your own task management system by hosting it on a microcontroller, encrypt it and have a portable personal mini task management with you!
                </p>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <div class="img-responsive center-block">
                    <img src="{!! asset('img/presentation.svg') !!}" class="center-block" width="100px">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron" id="slogan-jumbotron">
    <div class="container">
        <div class="row text-center">
            <h2>Get down. Start using it. Get stuff done.</h2>
        </div>
    </div>
</div>
@endsection
