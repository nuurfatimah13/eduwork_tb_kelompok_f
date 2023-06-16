<?php 
    require_once("../../controllers/auth/auth.php"); 
    $iduser = $_SESSION['user']['id'];
    $nameuser = $_SESSION['user']['name'];
    $photouser = $_SESSION['user']['photo'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords"
            content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <title>Profile | Admin | MovApp</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="../../assets/img/icons/logo-1.ico" />
        <link rel="canonical" href="https://demo-basic.adminkit.io/" />
        <link href="../../assets/plugin/AdminKit/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Start -->
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="../index.php">
                        <img src="../../assets/img/icons/logo-1.png" alt="logo" width="50%" 
                            style="text-align: center;">
                    </a>
                    <ul class="sidebar-nav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../index.php">
                                <i class="align-middle" data-feather="sliders"></i> 
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="user/user.php">
                                <i class="align-middle" data-feather="users"></i> 
                                <span class="align-middle">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="actor/actor.php">
                                <i class="align-middle" data-feather="users"></i> 
                                <span class="align-middle">Actors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="genre/genre.php">
                                <i class="align-middle" data-feather="list"></i> 
                                <span class="align-middle">Genre</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="film/film.php">
                                <i class="align-middle" data-feather="film"></i> 
                                <span class="align-middle">Film</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="peran/peran.php">
                                <i class="align-middle" data-feather="cast"></i> 
                                <span class="align-middle">Peran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="kritik/kritik.php">
                                <i class="align-middle" data-feather="message-square"></i> 
                                <span class="align-middle">Kritik</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Sidebar End -->
            
            <div class="main">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle js-sidebar-toggle ms-4">
                        <i class="hamburger align-self-center"></i>
                    </a>
                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-none 
                                    d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                    <img src="../../assets/img/uploads/<?= $photouser; ?>" 
                                        class="avatar img-fluid rounded me-1" 
                                        alt="<?= $nameuser; ?>" /> 
                                    <span class="text-dark"><?= $nameuser; ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" 
                                        href="profile.php?id=<?= $iduser; ?>">
                                        <i class="align-middle" data-feather="user">
                                        </i>
                                        &nbsp;
                                        Profile
                                    </a>
                                    <a class="dropdown-item" 
                                        href="../../controllers/auth/logout.php">
                                        <i class="align-middle" data-feather="log-out">
                                        </i>
                                        &nbsp;
                                        Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Navbar End -->

                <main class="content">
                    <div class="container-fluid p-0">
                        <!-- Title -->
                        <h1 class="h3 mb-3">Dashboard / <strong>Profile</strong></h1>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        include "../../database/db.php";
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
                                    <!-- Card Title -->
                                    <h3 class="card-title">Data Profile</h3>
                                    <div class="text-center">
                                        <img src="../../assets/img/uploads/<?= $photo; ?>" 
                                            class="rounded" 
                                            style="border-radius: 100% !important;"
                                            alt="<?= $name; ?>"><br />
                                        <a class="btn btn-warning btn-sm mt-1" 
                                            href="photo_form.php?id=<?= $id; ?>">
                                            <i class="align-middle" 
                                                data-feather="edit"></i> 
                                            <span class="align-middle">
                                                Update Photo
                                            </span>
                                        </a>
                                    </div>
                                    <div class="mt-3">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>:</th>
                                                    <th><?= $name; ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>:</th>
                                                    <th><?= $email; ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Age</th>
                                                    <th>:</th>
                                                    <th><?= $age; ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Biograph</th>
                                                    <th>:</th>
                                                    <th><?= $bio; ?></th>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <th>:</th>
                                                    <th><?= $address; ?></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a class="btn btn-warning btn-sm" 
                                            href="profile_form.php?id=<?= $id; ?>">
                                            <i class="align-middle" 
                                                data-feather="edit"></i> 
                                            <span class="align-middle">
                                                Update Profile
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <?php 
                                        $query = $conn->query("SELECT * FROM users WHERE id=$id;");
                                        while ($data = mysqli_fetch_array($query)) {
                                            $password = $data["password"];
                                        }
                                    ?>
                                    <!-- Card Title -->
                                    <h3 class="card-title">Manage Password</h3>
                                    <div class="mt-3">
                                        <form class="row g-3 needs-validation" novalidate 
                                            action="../../controllers/profile/profile-admin.php?id=<?= $id; ?>" 
                                            method="post" 
                                            enctype="multipart/form-data">
                                            <div class="col-md-12">
                                                <label for="validationCustomName" class="form-label">Password</label>
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
                                                    <i class="align-middle" 
                                                        data-feather="edit"></i> 
                                                    <span class="align-middle">
                                                        Update Password
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Footer Start -->
                <?php include_once ("layouts/footer.php"); ?>
                <!-- Footer End -->
            </div>
        </div>

        <script src="../../assets/plugin/AdminKit/js/app.js"></script>
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