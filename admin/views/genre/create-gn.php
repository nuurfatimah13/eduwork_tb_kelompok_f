<?php 
    require_once("../../../controllers/auth/auth.php"); 
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

        <!-- Assets Link -->
        <?php include "../layouts/assetsLink.php"; ?>
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Start -->
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="../../index.php">
                        <img src="../../../assets/img/icons/logo-1.png" alt="logo" width="50%" 
                            style="text-align: center;">
                    </a>
                    <ul class="sidebar-nav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../../index.php">
                                <i class="align-middle" data-feather="sliders"></i> 
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../user/user.php">
                                <i class="align-middle" data-feather="users"></i> 
                                <span class="align-middle">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../actor/actor.php">
                                <i class="align-middle" data-feather="users"></i> 
                                <span class="align-middle">Actors</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="genre.php">
                                <i class="align-middle" data-feather="list"></i> 
                                <span class="align-middle">Genre</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../film/film.php">
                                <i class="align-middle" data-feather="film"></i> 
                                <span class="align-middle">Film</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../peran/peran.php">
                                <i class="align-middle" data-feather="cast"></i> 
                                <span class="align-middle">Peran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../kritik/kritik.php">
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
                <?php include_once ("../layouts/navbar.php"); ?>
                <!-- Navbar End -->

                <main class="content">
                    <div class="container-fluid p-0">
                        <!-- Title -->
                        <h1 class="h3 mb-3">Dashboard / <strong>Genre</strong></h1>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        include "../../../database/db.php";
                                        $query = $conn->query("SELECT * FROM genre");
                                    ?>
                                    <!-- Card Title -->
                                    <h3 class="card-title mb-4">Create Data Genre</h3>
                                    <form class="row g-3 needs-validation" novalidate 
                                        action="../../../controllers/genre/create-gn.php" 
                                        method="post" 
                                        enctype="multipart/form-data">
                                        <div class="col md-12">
                                            <label for="validationCustomName" class="form-label">Nama</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="nama" class="form-control" 
                                                    id="validationCustomName" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Nama tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Create</button>
                                            <a class="btn btn-secondary" 
                                                href="genre.php" role="button">
                                                Cancel
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Footer Start -->
                <?php include_once ("../layouts/footer.php"); ?>
                <!-- Footer End -->
            </div>
        </div>

        <script src="../../../assets/plugin/AdminKit/js/app.js"></script>
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