<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/css/login-style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
  <div class="wrapper">
    <div class="logo">
      <img src="assets/img/icons/logo-1.png" alt="">
    </div>
    <div class="text-center mt-4 name">
      MovApp
    </div>
    <form class="p-3 mt-3">
      <div class="form-field d-flex align-items-center">
        <!-- <span class="far fa-user"></span> -->
        <input type="text" name="userName" id="userName" placeholder="Username">
      </div>
      <div class="form-field d-flex align-items-center">
        <!-- <span class="fas fa-key"></span> -->
        <input type="password" name="password" id="pwd" placeholder="Password">
      </div>
      <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
      <a href="#">Forget password?</a> or <a href="#">Sign up</a>
    </div>
  </div>
</body>