<?php 
    require_once("../controllers/auth/auth.php"); 
    $iduser = $_SESSION['user']['id'];
    $nameuser = $_SESSION['user']['name'];
    $photouser = $_SESSION['user']['photo'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile | User | MovApp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

        <!-- Assets Link -->
        <?php include_once("layouts/assetsLink.php"); ?>
    </head>
    <body>
        <!-- Header Start -->
        <section id="header">
            <nav style="background-color: #081c3c;" class="navbar navbar-expand-md 
                navbar-light" id="navbar_sticky">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="index.php">
                        <img src="../assets/img/icons/logo-1.png" alt="logo" width="20%" class="me-1 col_light fs-1 align-middle">
                        MovApp
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="category.php">Category Movies</a>
                            </li> -->
                        </ul>
                        <ul class="navbar-nav mb-0 ms-auto">
                            <li class="nav-item dropdown ms-3">
                                <a class="nav-link dropdown-toggle d-none 
                                    d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                    <img src="../assets/img/uploads/<?= $photouser; ?>" 
                                        class="me-1 col_light fs-1 align-middle" 
                                        width="13%"
                                        alt="<?= $nameuser; ?>"
                                        style="border-radius: 100%;" /> 
                                    <span class="col_light"><?= $nameuser; ?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li>
                                        <a class="dropdown-item" 
                                            href="profile.php?id=<?= $iduser; ?>">
                                            <i class="fa fa-user"></i>
                                            &nbsp;
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" 
                                            href="../controllers/auth/logout.php">
                                            <i class="fa fa-sign-out"></i>
                                            &nbsp;
                                            Log out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <!-- Header End -->

        <section style="background-color: #08142c;" id="center" class="center_o pt-5 text-light">
            <div class="container">
                <div class="row center_o1 text-center">
                    <div class="col-md-12">
                        <h2>PROFILE</h2>
                        <h5 class="bg_dark d-inline-block p-4 mb-0 mt-4 pt-2 pb-2 fw-normal col_red">
                            <a class="text-white" href="index.php">Home</a>
                            <span class="me-2 ms-2 text-muted"> /</span> Profile
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #08142c;" id="blog" class="p_3 ">
            <div class="container">
                <div class="row blog1">
                    <div class="col-md-12">
                        <div class="blog1l">
                            <div class="blog1l1" style="background-color: #08142c;">
                                <?php
                                include "../database/db.php";
                                $id = $_GET['id'];
                                $query = $conn->query("SELECT * FROM users WHERE id=$id;");
                                while ($data = mysqli_fetch_array($query)) {
                                    $id = $data["id"];
                                    $name = $data["name"];
                                    $email = $data["email"];
                                    $age = $data["age"];
                                    $bio = $data["bio"];
                                    $address = $data["address"];
                                    $photo = $data["photo"];
                                }
                                ?>
                                <div class="grid clearfix row">
                                    <div class="col-md-5">
                                        <figure class="effect-jazz">
                                            <img 
                                                src="../assets/img/uploads/<?= $photo; ?>"     
                                                class="w-50" 
                                                style="border-radius: 100%"
                                                alt="<?= $name; ?>">
                                                <br />
                                                <a class="btn btn-warning btn-sm mt-2" 
                                                    href="photo_form.php?id=<?= $id; ?>">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    &nbsp;
                                                    Update Photo
                                                </a>
                                        </figure>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="mb-2">
                                            <h3 class="text-center col_light">
                                                Data Profile
                                            </h3>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th class="col_light">Name</th>
                                                        <th class="col_light">:</th>
                                                        <th class="col_light">
                                                            <?= $name; ?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="col_light">Email</th>
                                                        <th class="col_light">:</th>
                                                        <th class="col_light">
                                                            <?= $email; ?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="col_light">Age</th>
                                                        <th class="col_light">:</th>
                                                        <th class="col_light">
                                                            <?= $age; ?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="col_light">
                                                            Biograph
                                                        </th>
                                                        <th class="col_light">:</th>
                                                        <th class="col_light">
                                                            <?= $bio; ?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="col_light">Address</th>
                                                        <th class="col_light">:</th>
                                                        <th class="col_light">
                                                            <?= $address; ?>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a class="btn btn-warning btn-sm" 
                                                href="profile_form.php?id=<?= $id; ?>">
                                                <i class="fa fa-pencil-square-o"></i>
                                                &nbsp;
                                                Update Profile
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <?php 
                                                $query = $conn->query("SELECT * FROM users WHERE id=$id;");
                                                while ($data = mysqli_fetch_array($query)) {
                                                    $password = $data["password"];
                                                }
                                            ?>
                                            <h3 class="text-center col_light">
                                                Manage Password
                                            </h3>
                                            <form class="row g-3 needs-validation" 
                                                novalidate 
                                                action="../controllers/profile/profile-user.php?id=<?= $id; ?>" 
                                                method="post" 
                                                enctype="multipart/form-data">
                                                <div class="col-md-12">
                                                    <label for="validationCustomName" class="form-label col_light">
                                                        Password
                                                    </label>
                                                    <div class="input-group has-validation">
                                                        <input type="password" name="password" class="form-control" 
                                                            id="validationCustomName" value="<?= $password; ?>"
                                                            aria-describedby="inputGroupPrepend" required>
                                                        <div class="invalid-feedback">
                                                            Password tidak boleh kosong.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-sm btn-warning" 
                                                        type="submit" name="update-password">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                        &nbsp;
                                                        Update Password
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
        <?php include_once("layouts/footer.php"); ?>
        <!-- Footer End -->

        <script>
            window.onscroll = function() {
                myFunction()
            };

            var navbar_sticky = document.getElementById("navbar_sticky");
            var sticky = navbar_sticky.offsetTop;
            var navbar_height = document.querySelector('.navbar').offsetHeight;

            function myFunction() {
                if (window.pageYOffset >= sticky + navbar_height) {
                    navbar_sticky.classList.add("sticky")
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    navbar_sticky.classList.remove("sticky");
                    document.body.style.paddingTop = '0'
                }
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

        <script type="text/javascript">
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
    </body>
</html>