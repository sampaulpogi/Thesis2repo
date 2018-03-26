<?php
//use Illuminate\Support\Facades\Auth;
session_start();
// Start the session
//$user = Auth::user()->name;
//$_SESSION["name"] = $user;
$_SESSION['time'] = time();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HRIS Log in</title>
 <link href="{{ URL::asset('/logssets/css/login.css') }}" id="theme" rel="stylesheet">
  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
                
                <img src="{{ URL::asset('/logssets/img/download.png') }}">
			</div>

			<div class="login-form">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}" >
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
      
</body>
  
  
</body>
</html>
