
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body class="login">
<div id="login">
<h1><a href="/">Powered by {{ env('APP_NAME') }}</a></h1>

  <form id="loginform" name="loginform" method="POST" action="{{ route('login') }}" >
  @csrf
<p>
<label for="user_login">Email Address</label>
<input type="text" name="email" id="email" class="input" value="" size="20" autocapitalize="off" />
@error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
</p>
<p class="user-pass-wrap">
<label for="user_login">Password</label>
<div class="pwd">
<input type="password" name="password" id="user_pass" class="input password-input" value="" size="20" />
@error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
</div>
</p>
<p class="forgetmenot">
<input class="form-check-input" type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }}>

<label for="rememberme">Remember Me</label></p>
<p class="submit">
<input type="submit" name="submit" id="mi-submit" class="button" value="{{ __('Login') }}
">
</p>
  </form>
  @if (Route::has('password.request'))
  <p id="nav">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
</p>
                                    @endif
  </div>  
</body>
</html>