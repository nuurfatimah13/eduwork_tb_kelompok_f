<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up | MovApp</title>
        <link rel="shortcut icon" href="assets/img/icons/logo-1.ico" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="assets/css/login-style.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="logo">
                <img src="assets/img/icons/logo-1.png" alt="logo">
            </div>
            <div class="text-center mt-4 name">
                MovApp
            </div>
            <form class="p-3 mt-3" action="controllers/auth/signup.php" method="POST" 
                enctype="multipart/form-data">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="name" id="name" placeholder="Enter your full name">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-at"></span>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Enter your password">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-hourglass"></span>
                    <input type="number" name="age" id="age" placeholder="Enter your age">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-image"></span>
                    <input type="file" name="photo" id="photo">
                </div>
                <button type="submit" class="btn mt-3" name="signup">Sign Up</button>
            </form>
            <div class="text-center fs-6">
                Already have an account? <a href="signin.php">Sign In</a>
            </div>
        </div>
    </body>
</html>