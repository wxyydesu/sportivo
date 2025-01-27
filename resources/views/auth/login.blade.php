<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('/auth/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="auth-links">
        <button class="auth-button active"><a href="login">Login</a></button>
        <button class="auth-button"><a href="signup">Sign Up</a></button>
    </div>
    <div class="container">
        <div class="login-box">
        <h1 class="logo">SPORTIVO</h1>
        <p class="welcome-text">Welcome Back</p>
        <form action="{{route('login-user')}}" method="POST" class="login-form">
            @if(Session::has('success'))
              <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('fail'))
              <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
          @csrf
          <input type="text" placeholder="Example@gmail.com" class="input-field" name="email" value="{{ old('email') }}">
          <span class="text-danger">@error('email') {{ $message }} @enderror</span>
          <input type="password" placeholder="Password" class="input-field" name="password">
          <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            <div class="form-actions">
            <button type="submit" class="btn-next">Login</button>
            <a href="signup" class="forgot-password">forgot password</a>
            </div>
        </form>
    </div>
  </div>
</body>
</html>