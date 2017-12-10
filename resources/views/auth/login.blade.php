@extends('common.basic') @section('content')
<style>
body,
html {
    background-color: #00BFA5;
}

#text-content {
    text-transform: uppercase;
}

#task-text {
    /* Text */
    font-weight: 700;
    font-size: 2em;
    text-transform: uppercase;
}

#welcome-tagline {
    /* Text */
    font-weight: 700;
    display: inline-block;
    border-top: 7px solid #f7941d;
    padding: 5px;
    text-transform: uppercase;
}

#login-jumbotron {
    background-color: #00BFA5;
    padding-top: 20vh;
    color: #fff;
}
</style>
<div class="jumbotron container" id="login-jumbotron">
    <div class="row">
        <div class="col-md-4 text-center">
            <h2 class="wow fadeInLeft" data-wow-delay=".5s" id="text-content" style="margin-top: 50px;">
                <div id="task-text">Task </div>
                    Notification
                </h2>
            <!-- <h3 id="welcome-tagline">DO MORE BY DOING LESS</h3> -->
        </div>
        <div class="col-md-8 m-auto">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span> @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span> @endif
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-primary custom-btn">
                                    Login
                                </button>
                                <a class="btn btn-md btn-default custom-btn" href="{{ url('/password/reset') }}">
                                            Forgot Your Password?
                                        </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection