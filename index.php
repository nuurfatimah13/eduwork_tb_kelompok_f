<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | MovApp</title>

        <!-- Assets Link -->
        <?php include_once ("layouts/assetsLink.php"); ?>
    </head>
    <body>
        <!-- Header Start -->
        <section style="background-color: #08142c;" id="header">
            <!-- Sign In Modal Start -->
            <div id="signin-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <!-- Modal Dialog Start -->
                <div class="modal-dialog">
                    <!-- Modal Content Start -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SIGN IN</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="ps-3 pe-3" action="#">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Name</label>
                                    <input class="form-control" type="email" id="username" required=""
                                    placeholder="Eget Nulla">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required=""
                                    placeholder="info@gmail.com">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" required="" id="password"
                                    placeholder="Enter your password">
                                </div>
                                <div class="mb-3 text-center">
                                    <h6><a class="button_1 d-block" href="#">SIGN IN</a></h6>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal Content End -->
                </div>
                <!-- Modal Dialog End -->
            </div>
            <!-- Sign In Modal End -->
            <nav style="background-color: #081c3c;" class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="index.php">
                        <img src="assets/img/icons/logo-1.png" alt="logo" width="20%" class="me-1 col_light fs-1 align-middle">
                        MovApp
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.php">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mb-0 ms-auto">
                            <!-- Modal Start -->
                            <li class="nav-item ms-3">
                                <a class="nav-link button" href="index-login.php">
                                    SIGN IN
                                </a>
                            </li>
                            <!-- Modal End -->
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <!-- Header End -->

        <!-- Hero Start -->
        <section style="background-color: #08142c;" id="center" class="center_home">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2" class="" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <?php 
                        include "database/db.php";
                        $query1 = $conn->query("SELECT * FROM film WHERE tahun=2024  LIMIT 1");
                        if(mysqli_num_rows($query1)>0){
                            while ($data1 = mysqli_fetch_array($query1)) {
                    ?>
                    <div class="carousel-item active">
                        <input type="hidden" value="<?php echo $data1['id']; ?>">
                        <img src="assets/img/film/<?= $data1['poster'] ?>" class="d-block w-100" 
                            alt="<?= $data1['judul'] ?>" height="500">
                    </div>
                    <?php 
                            }
                        }
                        $query2 = $conn->query("SELECT * FROM film LIMIT 2");
                        if(mysqli_num_rows($query2)>0){
                            while ($data2 = mysqli_fetch_array($query2)) {
                    ?>
                    <div class="carousel-item">
                        <img src="assets/img/film/<?= $data2['poster'] ?>" class="d-block w-100" 
                            alt="<?= $data2['judul'] ?>" height="500">
                    </div>
                    <?php 
                            }
                        }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- Hero End -->

        <section style="background-color: #08142c;" id="upcome" class="p_3">
            <div class="container-xl">
                <div class="row upcome_1 text-center">
                    <div class="col-md-12">
                        <h3 class="mb-0 text-light">MOVIES</h3>
                        <hr class="line me-auto ms-auto">
                        <ul class="nav nav-tabs justify-content-center border-0 mb-0 mt-4">
                            <li class="nav-item">
                                <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    <span class="d-md-block">Upcoming</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-md-block">Released</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link border-0">
                                    <span class="d-md-block">Best of library</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row upcome_2 mt-4">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="upcome_2i row">
                            <?php
                                include "database/db.php";
                                $query = $conn->query("SELECT film.id, film.poster, film.judul, genre.nama, 
                                    film.ringkasan, film.tahun, film.trailer, kritik.point AS rating
                                    FROM film 
                                    INNER JOIN genre ON film.genre_id = genre.id
                                    LEFT JOIN kritik ON film.id = kritik.film_id 
                                    WHERE film.tahun>YEAR(NOW());");
                                    while($row = mysqli_fetch_array($query)){
                                        $id = $row['id'];
                                        $poster = $row['poster'];
                                        $judul = $row['judul'];
                                        $genre = $row['nama'];
                                        $ringkasan = $row['ringkasan'];
                                        $tahun = $row['tahun'];
                                        $trailer = $row['trailer'];
                                        $rating = $row['rating'];
                                ?>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/img/film/<?php echo $poster; ?>" 
                                             width="260" height="330">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase">
                                                <a class="button_1" href="<?= $trailer; ?>">View Trailer</a>
                                            </h6>
                                            <h6 class="text-uppercase mb-0">
                                                <a class="button_2" href="movie-detail.php?id=<?php echo $id;?>">
                                                    View Details
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <input type="hidden" value="<?php echo $id;?>">
                                                    <h5><?php echo $judul; ?></h5>
                                                    <h6 class="text-muted"><?php echo $genre; ?></h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i> 
                                                        <?php 
                                                            if ($rating == NULL) {
                                                                echo 0;
                                                            } else {
                                                                echo $rating;
                                                            }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile">
                            <div class="upcome_2i row">
                                <?php
                                    include "database/db.php";
                                    $query = $conn->query("SELECT film.id, film.poster, film.judul, 
                                        genre.nama, film.ringkasan, film.tahun, film.trailer, 
                                        kritik.point AS rating
                                    FROM film
                                    INNER JOIN genre ON film.genre_id = genre.id 
                                    LEFT JOIN kritik ON film.id = kritik.film_id 
                                    WHERE film.tahun<=YEAR(NOW());");
                                    while($row = mysqli_fetch_array($query)){
                                        $id = $row['id'];
                                        $poster = $row['poster'];
                                        $judul = $row['judul'];
                                        $genre = $row['nama'];
                                        $ringkasan = $row['ringkasan'];
                                        $tahun = $row['tahun'];
                                        $trailer = $row['trailer'];
                                        $rating = $row['rating'];
                                ?>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/img/film/<?php echo $poster; ?>" alt="<?php echo $judul; ?>" 
                                                width="260" height="330">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase">
                                                <a class="button_1" href="<?= $trailer; ?>">View Trailer</a>
                                            </h6>
                                            <h6 class="text-uppercase mb-0">
                                                <a class="button_2" href="movie-detail.php?id=<?php echo $id;?>">
                                                    View Details
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><?php echo $judul; ?></h5>
                                                    <h6 class="text-muted"><?php echo $genre; ?></h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <?php 
                                                            if ($rating == NULL) {
                                                                echo 0;
                                                            } else {
                                                                echo $rating;
                                                            }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">
                            <div class="upcome_2i row">
                                <?php
                                    $query_best = $conn->query("SELECT film.id, film.poster, film.judul,    
                                        genre.nama, film.ringkasan, film.tahun, film.trailer, 
                                        kritik.point AS rating
                                        FROM film 
                                        INNER JOIN genre ON film.genre_id = genre.id 
                                        INNER JOIN kritik ON film.id = kritik.film_id 
                                        WHERE kritik.point=5;");
                                    while($row_best = mysqli_fetch_array($query_best)){
                                        $id_best = $row_best['id'];
                                        $poster_best = $row_best['poster'];
                                        $judul_best = $row_best['judul'];
                                        $genre_best = $row_best['nama'];
                                        $ringkasan_best = $row_best['ringkasan'];
                                        $tahun_best = $row_best['tahun'];
                                        $trailer_best = $row_best['trailer'];
                                        $rating_best = $row_best['rating'];
                                ?>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <input type="hidden" value="<?= $id_best; ?>">
                                            <img src="assets/img/film/<?= $poster_best; ?>" alt="<?= $judul_best; ?>" 
                                            width="260" height="330">
                                        </div>
                                        <div
                                            class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase">
                                                <a class="button_1" href="<?= $trailer_best; ?>">View Trailer</a>
                                            </h6>
                                            <h6 class="text-uppercase mb-0">
                                                <a class="button_2" href="movie-detail.php?id=<?= $id_best;?>">
                                                    View Details
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><?= $judul_best; ?></h5>
                                                    <h6 class="text-muted"><?= $genre_best; ?></h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i> <?= $rating_best; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #08142c;" id="trend">
            <div style="background-color: #08142c;"class="trend_m clearfix bg_light pt-4 pb-5">
                <div class="container-xl">
                    <div class="row upcome_1 text-center">
                        <div class="col-md-12">
                            <h3 class="mb-0 text-white">TOP MOVIES</h3>
                            <hr class="line me-auto ms-auto">
                        </div>
                    </div>
                    <div class="trend_m1 row mt-3">
                        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0"
                                    class="active" aria-label="Slide 1" aria-current="true"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"
                                    aria-label="Slide 2" class=""></button>
                            </div>
                            <div style="background-color: #08142c;"class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="upcome_2i row">
                                        <?php
                                            $query3 = $conn->query("SELECT film.id, film.poster, film.judul, genre.nama, 
                                                film.ringkasan, film.tahun, film.trailer, kritik.point AS rating
                                                FROM film 
                                                INNER JOIN genre ON film.genre_id = genre.id 
                                                INNER JOIN kritik ON film.id = kritik.film_id 
                                                WHERE kritik.point>=4;");
                                            while($row2 = mysqli_fetch_array($query3)){
                                                $id_tm = $row2['id'];
                                                $poster_tm = $row2['poster'];
                                                $judul_tm = $row2['judul'];
                                                $genre_tm = $row2['nama'];
                                                $ringkasan_tm = $row2['ringkasan'];
                                                $tahun_tm = $row2['tahun'];
                                                $trailer_tm = $row2['trailer'];
                                                $rating_tm = $row2['rating'];
                                        ?>
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <input type="hidden" value="<?php echo $id_tm; ?>">
                                                    <img src="assets/img/film/<?= $poster_tm; ?>" alt="<?= $judul_tm; ?>" 
                                                    width="260" height="330">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase">
                                                        <a class="button_1" href="<?= $trailer_tm; ?>">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0">
                                                        <a class="button_2" 
                                                            href="movie-detail.php?id=<?php echo $id_tm;?>">
                                                            View Details
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><?= $judul_tm; ?></h5>
                                                            <h6 class="text-muted"><?= $genre_tm; ?></h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i> <?= $rating_tm; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
        <?php include_once ("layouts/footer.php"); ?>
        <!-- Footer End -->

        <script>
            window.onscroll = function () { myFunction() };

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
    </body>
</html>