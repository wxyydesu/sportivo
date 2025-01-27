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
</head>
<body>
    <div class="auth-links">
        <button class="auth-button active">login</button>
        <button class="auth-button">signup</button>
    </div>
    <div class="container">
        <div class="login-box">
        <h1 class="logo">SPORTIVO</h1>
        <p class="welcome-text">Welcome Back</p>
        <form action="#" method="POST" class="login-form">
            <input type="email" placeholder="you@yourmail.com" class="input-field" required>
            <input type="password" placeholder="Password" class="input-field" required>
            <div class="form-actions">
            <button type="submit" class="btn-next">Login</button>
            <a href="signup" class="forgot-password">forgot password</a>
            </div>
        </form>
    </div>
  </div>
</body>
</html>