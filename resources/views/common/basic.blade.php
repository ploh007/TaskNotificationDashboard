<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Task Notification Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="{!! asset('css/third-party/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/third-party/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/basic.css') !!}" rel="stylesheet">
    <script type="text/javascript" src="{!! asset('js/jquery-3.2.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/popper.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/wow.js') !!}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-inverse fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url( '/') }} ">Task Notification System</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url( '/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url( '/why') }}">Why</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url( '/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url( '/help') }}">Help</a>
                </li>
                @if (!Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url( '/dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret "></span>
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url( '/logout') }}" onclick="event.preventDefault(); document.getElementById( 'logout-form').submit(); ">
                                Logout
                            </a>
                        <form id="logout-form" action="{{ url( '/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url( '/login') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
<!--=====================================
=            Loading Spinner            =
======================================-->
<div id="loading"></div>
<!--====  End of Loading Spinner  ====-->
<script>
new WOW().init();
</script>
</html>