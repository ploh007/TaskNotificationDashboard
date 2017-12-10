@extends('common.basic') @section('content')
<link href="{!! asset('css/welcome.css') !!}" rel="stylesheet">

<div class="jumbotron wow fadeInDown" id="welcome-jumbotron">
    <div class="container">
        <div class="center-block text-center wow">
            <h2 class="wow fadeInUp" data-wow-delay=".5s" id="text-content">
                <div id="task-text">Task </div>
                Notification
            </h2>
            <h3 id="welcome-tagline">DO MORE BY DOING LESS</h3>
        </div>
    </div>
</div>
<div class="jumbotron wow fadeInUp" id="information-jumbotron" data-wow-offset="200">
    <div class="row no-gutters">
        <div class="col-md-4 wow fadeInLeft text-center tile" data-wow-delay=".5s" data-wow-offset="200">
            <div class="img-responsive center-block">
                <img src="{!! asset('img/phone-desk-web.jpg') !!}" class="center-block" width="100%">
            </div>
            <h3 class="feature-heading">MANAGING.</h3>
            <p>
                Get notified wherever and whenever.
            </p>
        </div>
        <div class="col-md-4 wow fadeInUp text-center tile" data-wow-delay=".5s" data-wow-offset="200">
            <div class="img-responsive">
                <img src="{!! asset('img/calendar-web.jpg') !!}" class="center-block" width="100%">
            </div>
            <h3 class="feature-heading">ORGANIZING.</h3>
            <p>
                Easily organize using Intelli Grouping.
            </p>
        </div>
        <div class="col-md-4 wow fadeInRight text-center tile" data-wow-delay=".5s" data-wow-offset="200">
            <div class="img-responsive center-block">
                <img src="{!! asset('img/working-couch-web.jpg') !!}" class="center-block" width="100%">
            </div>
            <h3 class="feature-heading">DOING.</h3>
            <p>
                Doing what really matters.
            </p>
        </div>
    </div>
</div>
<div class="jumbotron wow fadeInUp" id="features-jumbotron" data-wow-offset="200">
    <div class="container">
        <div class="row center-block">
            <h2 class="outline-header text-center m-auto">
            FEATURES
        </h2>
        </div>
        <div class="row justify-content-md-center text-center">
            <div class="col-md-6 feature-tile">
                <img src="{!! asset('img/secure.svg') !!}" class="center-block" width="50px">
                <h2>SECURE</h2>
                <p>
                    Keep your personal information secure. No collection of unnecessary personal information.
                </p>
            </div>
            <div class="col-md-6 feature-tile">
                <img src="{!! asset('img/security.svg') !!}" class="center-block" width="50px">
                <h2>RELIABLE</h2>
                <p>
                    Keep your personal information secure. No collection of unnecessary personal information.
                </p>
            </div>
            <div class="col-md-6 feature-tile">
                <img src="{!! asset('img/lightbulb.svg') !!}" class="center-block" width="50px">
                <h2>INTUITIVE</h2>
                <p>
                    Keep your personal information secure. No collection of unnecessary personal information.
                </p>
            </div>
            <div class="col-md-6 feature-tile">
                <img src="{!! asset('img/list-feature.svg') !!}" class="center-block" width="50px">
                <h2>ESSENTIAL</h2>
                <p>
                    Keep your personal information secure. No collection of unnecessary personal information.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron" id="slogan-jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>Get down. Start using it. Get stuff done.</h5>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron" id="sitemap-jumbotron">
    <div class="container">
        <div class="row">   
            <div class="col-md-2 wow fadeInUp">
                <img src="{!! asset('img/lightbulb.svg') !!}" class="center-block" width="100px">
            </div>
            <div class="col-md-2 wow fadeInRight" data-wow-delay=".5s">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Why</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-2 wow fadeInRight" data-wow-delay="1s">
                <ul>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
            <div class="col-md-2 wow fadeInRight" data-wow-delay="1.25s">
                <ul>
                    <li><a href="#">Developer</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Data Model</a></li>
                </ul>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-delay="1.5s">
                
            </div>
        </div>
    </div>
</div>
@endsection