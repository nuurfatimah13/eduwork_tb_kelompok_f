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

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="../assets/img/icons/logo-1.ico" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />

        <title>Administrator | MovApp</title>

        <link href="../assets/plugin/AdminKit/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="wrapper">
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="index.php">
                        <img src="../assets/img/icons/logo-1.png" alt="logo" width="50%" style="text-align: center;">
                    </a>
                    <ul class="sidebar-nav">
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="./index.php">
                                <i class="align-middle" data-feather="sliders"></i> 
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="views/user/user.php">
                                <i class="align-middle" data-feather="users"></i> 
                                <span class="align-middle">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="views/actor/actor.php">
                            <i class="align-middle" data-feather="users"></i> 
                            <span class="align-middle">Actors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="views/genre/genre.php">
                                <i class="align-middle" data-feather="list"></i> 
                                <span class="align-middle">Genre</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="views/film/film.php">
                                <i class="align-middle" data-feather="film"></i> 
                                <span class="align-middle">Film</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="views/peran/peran.php">
                                <i class="align-middle" data-feather="cast"></i> 
                                <span class="align-middle">Peran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="views/kritik/kritik.php">
                                <i class="align-middle" data-feather="message-square"></i> 
                                <span class="align-middle">Kritik</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="main">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle js-sidebar-toggle ms-4">
                        <i class="hamburger align-self-center"></i>
                    </a>
                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                    <i class="align-middle" data-feather="settings"></i>
                                </a>
                                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                    <img src="../assets/img/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Fatih" /> 
                                    <span class="text-dark">Fatih</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">
                                        <form action="../controllers/logout.php" method="post">
                                            <input type="hidden" name="logout" value="1">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="align-middle" data-feather="log-out">
                                                </i>
                                                Log out
                                            </button>
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Navbar End -->

                <main class="content">
                    <div class="container-fluid p-0">
                        <?php
                            // (A) MESSAGE LOGIN 
                            if (isset($_GET['success'])) { 
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>You have successfully logged in!</strong>
                                <button type="button" class="btn-close" 
                                    data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        <?php 
                            } 
                        ?>
                        <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12 d-flex">
                                <div class="w-100">
                                    <div class="row">
                                        <?php 
                                            include "../database/db.php";
                                            $data_user = mysqli_query($conn,"SELECT * FROM users");
                                            $users = mysqli_num_rows($data_user);
                                            
                                            $data_actor = mysqli_query($conn,"SELECT * FROM cast");
                                            $actors = mysqli_num_rows($data_actor);

                                            $data_film = mysqli_query($conn,"SELECT * FROM film");
                                            $films = mysqli_num_rows($data_film);
                                        ?>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h3 class="card-title">Users</h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="stat text-primary">
                                                                <i class="align-middle" data-feather="users"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if ($users != 0) { ?>
                                                        <h1 class="text-center mt-1 mb-3"><?= $users ?></h1>
                                                    <?php } else { ?>
                                                        <h1 class="text-center mt-1 mb-3"> 0 </h1>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h3 class="card-title">Actors</h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="stat text-primary">
                                                                <i class="align-middle" data-feather="users"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if ($actors != 0) { ?>
                                                        <h1 class="text-center mt-1 mb-3"><?= $actors ?></h1>
                                                    <?php } else { ?>
                                                        <h1 class="text-center mt-1 mb-3"> 0 </h1>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h3 class="card-title">Film</h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="stat text-primary">
                                                                <i class="align-middle" data-feather="film"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if ($films != 0) { ?>
                                                        <h1 class="text-center mt-1 mb-3"><?= $films ?></h1>
                                                    <?php } else { ?>
                                                        <h1 class="text-center mt-1 mb-3"> 0 </h1>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Footer Start -->
                <?php include_once ("views/layouts/footer.php"); ?>
                <!-- Footer End -->
            </div>
        </div>

        <script src="../assets/plugin/AdminKit/js/app.js"></script>
    </body>
</html>