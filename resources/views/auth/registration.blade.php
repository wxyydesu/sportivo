<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp Form</title>
  <link rel="stylesheet" href="{{asset('/auth/styles.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
</head>
<body>
  <div class="auth-links">
    <button class="auth-button ">login</button>
    <button class="auth-button active">signup</button>
  </div>
  <div class="container">
    <div class="login-box">
      <h1 class="logo">SPORTIVO</h1>
      <p class="welcome-text">Welcome</p>
      <form action="{{route('register-user')}}" method="POST" class="login-form">
          @if(session::has('success'))
          <div class="alert alert-success">{{session::get('success')}}</div>
          @endif
          @if(session::has('fail'))
          <div class="alert alert-danger">{{session::get('fail')}}</div>
          @endif
        @csrf
        <input type="text" placeholder="Enter Username" class="input-field" name="name" value="{{old('name')}}" required>
        <!-- <span class="text-danger">@error('name') {{$message}} @enderror</span> -->
        <input type="email" placeholder="you@yourmail.com" class="input-field" name="email" value="{{old('email')}}"required>
        <!-- <span class="text-danger">@error('email') {{$message}} @enderror</span> -->
        <input type="password" placeholder="Password" class="input-field" name="password" required>
        <!-- <span class="text-danger">@error('password') {{$message}} @enderror</span> -->
        <div class="form-actions">
          <button type="submit" class="btn-next">Next</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>