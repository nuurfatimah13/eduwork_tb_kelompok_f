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
                    <a class="sidebar-brand" href="index.php">
                        <img src="../../../assets/img/icons/logo-1.png" alt="logo" width="50%" 
                            style="text-align: center;">
                    </a>
                    <ul class="sidebar-nav">
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="../index.php">
                                <i class="align-middle" data-feather="sliders"></i> 
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="user/users.php">
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
                <?php include_once ("../layouts/navbar.php"); ?>
                <!-- Navbar End -->

                <main class="content">
                    <div class="container-fluid p-0">
                        <!-- Title -->
                        <h1 class="h3 mb-3">Dashboard / <strong>Template</strong></h1>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        include "../../../database/db.php";
                                        // $query1 = $conn->query("SELECT * FROM categories");
                                        // $query2 = $conn->query("SELECT * FROM chef");
                                    ?>
                                    <!-- Card Title -->
                                    <h3 class="card-title mb-4">Create Data Template</h3>
                                    <form class="row g-3 needs-validation" novalidate 
                                        action="../../../controllers/template/store-tmp.php" 
                                        method="post" 
                                        enctype="multipart/form-data">
                                        <div class="col-6">
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
                                        <div class="col-6">
                                            <label for="validationCustomCategory" class="form-label">Kategori</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="categories_id" 
                                                    id="validationCategory" required>
                                                    <option disabled value="">Pilih...</option>
                                                    <?php 
                                                        // if(mysqli_num_rows($query1)>0){ 
                                                        //     while ($data1 = mysqli_fetch_array($query1)) {
                                                    ?>
                                                    <option value="id">name</option>
                                                    <?php 
                                                        //     }
                                                        // }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Kategori tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="validationCustomSize" class="form-label">Ukuran</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="size" 
                                                    id="validationChef" required>
                                                    <option value="">Pilih...</option>
                                                    <option value="Besar">Besar</option>
                                                    <option value="Sedang">Sedang</option>
                                                    <option value="Kecil">Kecil</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Ukuran tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="validationCustomPrice" class="form-label">Harga</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="price" class="form-control" 
                                                    id="validationCustomPrice" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Harga tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="validationCustomChef" class="form-label">Chef</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="chef_id" 
                                                    id="validationChef" required>
                                                    <option disabled value="">Pilih...</option>
                                                    <?php 
                                                        // if(mysqli_num_rows($query2)>0){ 
                                                        //     while ($data2 = mysqli_fetch_array($query2)) {
                                                    ?>
                                                    <option value="id">name</option>
                                                    <?php 
                                                        //     }
                                                        // }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Chef tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="validationCustomDescription" class="form-label">Deskripsi</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="description"
                                                    class="form-control" id="validationCustomDescription" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Deskripsi tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="validationCustomFoto" class="form-label">Foto</label>
                                            <div class="input-group has-validation">
                                                <input type="file" name="image" class="form-control" 
                                                    id="validationCustomFoto" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Foto tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Create</button>
                                            <a class="btn btn-secondary" 
                                                href="./template.php" role="button">
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