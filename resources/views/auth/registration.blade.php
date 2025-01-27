<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp Form</title>
  <link rel="stylesheet" href="{{ asset('/auth/styles.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <div class="auth-links">
    <button class="auth-button"><a href="login">Login</a></button>
    <button class="auth-button active"><a href="signup">Sign Up</a></button>
  </div>
  <div class="container">
    <div class="login-box">
      <h1 class="logo">SPORTIVO</h1>
      <p class="welcome-text">Welcome</p>
      <form action="{{route('register-user')}}" method="POST" class="login-form">
        @if(Session::has('success'))
          <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
          <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        <input type="text" placeholder="Example@gmail.com" class="input-field" name="email" value="{{ old('email') }}">
        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        <input type="text" placeholder="Enter Username" class="input-field" name="name" value="{{ old('name') }}">
        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
        <input type="password" placeholder="Password" class="input-field" name="password">
        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
        <input type="file" name="profile_picture" accept="image/*">
        <div class="form-actions">
          <button type="submit" class="btn-next">Next</button>
          <!-- <a href="#" class="forgot-password">Forgot Password?</a> -->
        </div>
      </form>
    </div>
  </div>
</body>
</html>
