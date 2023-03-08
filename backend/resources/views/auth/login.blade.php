
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
  <!-- <p class="error"> You are now logged out.<br>
</p> -->
  <form id="loginform" name="loginform" method="POST" >
<p>
<label for="user_login">Username or Email Address</label>
<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
</p>
<p class="user-pass-wrap">
<label for="user_login">Password</label>
<div class="pwd">
<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
</div>
</p>
<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> 
<label for="rememberme">Remember Me</label></p>
<p class="submit">
<input type="submit" name="submit" id="mi-submit" class="button" value="Log In">
<input type="hidden" name="redirect_to" value="index.php">
</p>
  </form>
  <p id="nav">
<a href="lost-password/">Lost your password?</a>
</p>
  </div>  
</body>
</html>