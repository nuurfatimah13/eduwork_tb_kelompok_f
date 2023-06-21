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
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../genre/genre.php">
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
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="kritik.php">
                                <i class="align-middle" data-feather="message-square"></i> 
                                <span class="align-middle">Kritik</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../like/like.php">
                                <i class="align-middle" data-feather="star"></i> 
                                <span class="align-middle">Like</span>
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
                        <h1 class="h3 mb-3">Dashboard / <strong>Kritik</strong></h1>
                        <div class="col-sm-12">
                        <?php 
                                // MESSAGE
                                if (isset($_GET['message'])){
                                    if ($_GET['message']=='empty'){
                                        ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong><i class="icon fa fa-check"></i>The form must be filled!</strong>
                                            <button type="button" class="btn-close" 
                                                data-bs-dismiss="alert" aria-label="Close">
                                            </button>
                                        </div>			
                                        <?php
                                    }
                                }
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        include "../../../database/db.php";
                                        $id = $_GET['id'];
                                        $query = $conn->query("SELECT * FROM kritik WHERE id = $id");
                                        while ($data = mysqli_fetch_array($query)) {
                                            $id = $data["id"];
                                            $users_id = $data["users_id"];
                                            $film_id = $data["film_id"];
                                            $content = $data["content"];
                                            $point = $data["point"];
                                        }
                                        $query1 = $conn->query("SELECT * FROM film");
                                        $query2 = $conn->query("SELECT * FROM users");
                                    ?>
                                    <!-- Card Title -->
                                    <h3 class="card-title mb-4">Update Data Kritik</h3>
                                    <form class="row g-3 needs-validation" novalidate 
                                        action="../../../controllers/kritik/update-ktk.php?id=<?php echo $id;?>" 
                                        method="post" 
                                        enctype="multipart/form-data">
                                        <div class="col-6">
                                            <label for="validationCustomCategory" class="form-label">Users</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="users_id" 
                                                    id="validationCategory" required>
                                                    <option value="0">Pilih...</option>
                                                    <?php  
                                                            while ($data2 = mysqli_fetch_array($query2)) {
                                                                if ($data2["id"] === $users_id) {
                                                    ?>
                                                    <option selected value="<?php echo $data2["id"]?>">
                                                        <?php echo $data2["name"];?>
                                                    </option>
                                                    <?php
                                                                }else{
                                                    ?>
                                                    <option value="<?php echo $data2["id"];?>">
                                                        <?php echo $data2["name"];?>
                                                    </option>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    User tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="validationCustomCategory" class="form-label">Film</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="film_id" 
                                                    id="validationCategory" required>
                                                    <option value="0">Pilih...</option>
                                                    <?php  
                                                            while ($data1 = mysqli_fetch_array($query1)) {
                                                                if ($data1["id"] === $film_id) {
                                                    ?>
                                                    <option selected value="<?php echo $data1["id"]?>">
                                                        <?php echo $data1["judul"];?>
                                                    </option>
                                                    <?php
                                                                }else{
                                                    ?>
                                                    <option value="<?php echo $data1["id"];?>">
                                                        <?php echo $data1["judul"];?>
                                                    </option>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Film tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="validationCustomDescription" class="form-label">Deskripsi</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="content" value="<?php echo $content; ?>"
                                                    class="form-control" id="validationCustomDescription" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Deskripsi tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="validationCustomChef" class="form-label">Point</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="point" 
                                                    id="validationChef" required>
                                                    <option value="0">Pilih...</option>
                                                    `<?php  
                                                    for($i=1; $i<=5; $i++){
                                                        if ($i == $point) {
                                                    ?>
                                                    <option selected value="<?php echo $i;?>">
                                                        <?php echo $i;?>
                                                    </option>
                                                    <?php
                                                        }else{
                                                    ?>
                                                    <option value="<?php echo $i;?>">
                                                        <?php echo $i;?>
                                                    </option>
                                                    <?php
                                                        }
                                                    }   
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Point tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit" name="submit">Update</button>
                                            <a class="btn btn-secondary" 
                                                href="kritik.php" role="button">
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