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
        <nav style="background-color: #081c3c;" class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="index.php">
                    <img src="assets/img/icons/logo-1.png" alt="logo" width="20%"
                        class="me-1 col_light fs-1 align-middle">
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
                        <li class="nav-item ms-3">
                            <a class="nav-link button" href="signin.php">
                                SIGN IN
                            </a>
                        </li>
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
                        if (mysqli_num_rows($query1) > 0) {
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
                        if (mysqli_num_rows($query2) > 0) {
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
                            <a href="#upcoming" data-bs-toggle="tab" aria-expanded="false" 
                                class="nav-link active">
                                <span class="d-md-block">Upcoming</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#released" data-bs-toggle="tab" aria-expanded="true" 
                                class="nav-link">
                                <span class="d-md-block">Released</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#best-library" data-bs-toggle="tab" aria-expanded="false" 
                                class="nav-link border-0">
                                <span class="d-md-block">Best of library</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#favorite" data-bs-toggle="tab" 
                                aria-expanded="false" 
                                class="nav-link border-0">
                                <span class="d-md-block">Favorite</span>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="#genre" data-bs-toggle="tab" aria-expanded="false" 
                                class="nav-link border-0">
                                <span class="d-md-block">Genre</span>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="#genre" data-bs-toggle="tab" aria-expanded="false" class="nav-link border-0">
                                <span class="dropdown-toggle after">Genre</span>
                            </a>
                            <div class="dropdown-menu" data-bs-popper>
                                <a href="#adventure" class="dropdown-item">
                                    <span class="dropdown-item hover">Adventure</span>
                                </a>
                                <a href="#action" class="dropdown-item-text">
                                    <span class="dropdown-item hover">Action</span>
                                </a>
                                <a href="#comedy" class="dropdown-item-text">
                                    <span class="dropdown-item hover">Comedy</span>
                                </a>
                                <a href="#drama" class="dropdown-item-text">
                                    <span class="dropdown-item hover">Drama</span>
                                </a>
                                <a href="#documentary" class="dropdown-item-text">
                                    <span class="dropdown-item hover">Documentary</span>
                                </a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="row upcome_2 mt-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="upcoming">
                        <div class="upcome_2i row">
                            <?php
                                    include "database/db.php";
                                    $btupcom = 4;
                                    $pageupcom = isset($_GET['page_upcom']) ? (int)$_GET['page_upcom'] : 1;
                                    $pagewalup = ($pageupcom > 1) ? ($pageupcom * $btupcom) - $btupcom : 0;

                                    $previousup = $pageupcom - 1;
                                    $nextup = $pageupcom + 1;

                                    $dtup = $conn->query("SELECT film.id, film.poster, 
                                        film.judul, genre.nama, 
                                        film.ringkasan, film.tahun, film.trailer AS trailer, 
                                        COUNT(kritik.film_id) AS jumlah_kritik, 
                                        SUM(kritik.point) AS jumlah_point, 
                                        SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                        FROM film 
                                        INNER JOIN genre ON film.genre_id = genre.id
                                        LEFT JOIN kritik ON film.id = kritik.film_id 
                                        WHERE film.tahun>YEAR(NOW())
                                        GROUP BY kritik.film_id;");
                                    $jml_dtup = mysqli_num_rows($dtup);
                                    $tl_pageup = ceil($jml_dtup / $btupcom);

                                    $query = $conn->query("SELECT film.id, film.poster, 
                                        film.judul, genre.nama, 
                                        film.ringkasan, film.tahun, film.trailer AS trailer, 
                                        COUNT(kritik.film_id) AS jumlah_kritik, 
                                        SUM(kritik.point) AS jumlah_point, 
                                        SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                        FROM film 
                                        INNER JOIN genre ON film.genre_id = genre.id
                                        LEFT JOIN kritik ON film.id = kritik.film_id 
                                        WHERE film.tahun>YEAR(NOW())
                                        GROUP BY kritik.film_id
                                        LIMIT $pagewalup, $btupcom");
                                    foreach ($query as $film) {
                                        $id = $film['id'];
                                        $poster = $film['poster'];
                                        $judul = $film['judul'];
                                        $genre = $film['nama'];
                                        $ringkasan = $film['ringkasan'];
                                        $tahun = $film['tahun'];
                                        $trailer = $film['trailer'];
                                        $rating = $film['rating'];

                                        $likesCount = mysqli_fetch_assoc(mysqli_query($conn, 
                                            "SELECT COUNT(*) AS likes FROM loves 
                                            WHERE film_id = $id AND status = 1 "))
                                            ['likes'];
                                ?>
                            <div class="col-md-3">
                                <div class="upcome_2i1 clearfix position-relative">
                                    <div class="upcome_2i1i clearfix">
                                        <img src="assets/img/film/<?php echo $poster; ?>" width="260" height="330">
                                    </div>
                                    <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                        <h6 class="text-uppercase">
                                            <a class="button_1" href="<?= $trailer; ?>">View Trailer</a>
                                        </h6>
                                        <h6 class="text-uppercase mb-0">
                                            <a class="button_2" href="movie-detail.php?id=<?php echo $id; ?>">
                                                View Details
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div style="background-color: #08142c;" class="upcome_2i_last p-3">
                                    <div class="upcome_2i_lasti row">
                                        <div class="col-md-9 col-9">
                                            <div class="upcome_2i_lastil">
                                                <input type="hidden" value="<?php echo $id; ?>">
                                                <h5 class="text-white">
                                                    <?php echo $judul; ?>
                                                </h5>
                                                <h6 class="text-white">
                                                    <?php echo $genre; ?>
                                                </h6>
                                                <!-- rating -->
                                                <span class="col_red me-2">
                                                    <i class="fa fa-star"></i>
                                                    <?php
                                                                if ($rating == NULL) {
                                                                    echo 0;
                                                                } else {
                                                                    echo round($rating, 1);
                                                                }
                                                            ?>
                                                </span>
                                                <!-- rating end -->
                                                <!-- likes -->
                                                <span class="col_red">
                                                    <i class="fa fa-heart"></i>
                                                    <?php
                                                                if ($likesCount == NULL) {
                                                                    echo 0;
                                                                } else {
                                                                    echo $likesCount;
                                                                }
                                                            ?>
                                                </span>
                                                <!-- likes end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                ?>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" <?php if($pageupcom> 1){ echo
                                        "href='index.php?page_upcom=$previousup'"; } ?>>
                                        Previous
                                    </a>
                                </li>
                                <?php 
                                        for ($i = 1; $i <= $tl_pageup; $i++) { 
                                            $active = "";
                                            if(isset($_GET["page_upcom"])){
                                                if($i == $_GET["page_upcom"]){
                                                    $active = "active";
                                                }
                                            }
                                    ?>
                                <li class="page-item <?= $active; ?>">
                                    <a class="page-link" href="index.php?page_upcom=<?= $i; ?>">
                                        <?= $i; ?>
                                    </a>
                                </li>
                                <?php
                                        }
                                    ?>
                                <li class="page-item">
                                    <a class="page-link" <?php if($pageupcom < $tl_pageup){
                                        echo "href='index.php?page_upcom=$nextup'" ; } ?>>
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane" id="released">
                        <div class="upcome_2i row">
                            <?php
                                    include "database/db.php";
                                    $btreleas = 4;
                                    $pagereleas = isset($_GET['page_releas']) ? (int)$_GET['page_releas'] : 1;
                                    $pagewalrs = ($pagereleas > 1) ? ($pagereleas * $btreleas) - $btreleas : 0;

                                    $previousrs = $pagereleas - 1;
                                    $nextrs = $pagereleas + 1;

                                    $dtr = $conn->query("SELECT film.id, film.poster, film.judul, 
                                            genre.nama, film.ringkasan, film.tahun, film.trailer, 
                                            COUNT(kritik.film_id) AS jumlah_kritik, 
                                            SUM(kritik.point) AS jumlah_point, 
                                            SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                        FROM film
                                        INNER JOIN genre ON film.genre_id = genre.id 
                                        LEFT JOIN kritik ON film.id = kritik.film_id 
                                        WHERE film.tahun<=YEAR(NOW())
                                        GROUP BY kritik.film_id;");
                                    $jml_dtr = mysqli_num_rows($dtr);
                                    $tl_pagers = ceil($jml_dtr / $btreleas);

                                    $query = $conn->query("SELECT film.id, film.poster, film.judul, 
                                            genre.nama, film.ringkasan, film.tahun, film.trailer, 
                                            COUNT(kritik.film_id) AS jumlah_kritik, 
                                            SUM(kritik.point) AS jumlah_point, 
                                            SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                        FROM film
                                        INNER JOIN genre ON film.genre_id = genre.id 
                                        LEFT JOIN kritik ON film.id = kritik.film_id 
                                        WHERE film.tahun<=YEAR(NOW())
                                        GROUP BY kritik.film_id
                                        LIMIT $pagewalrs, $btreleas");
                                    foreach ($query as $film) {
                                        $id = $film['id'];
                                        $poster = $film['poster'];
                                        $judul = $film['judul'];
                                        $genre = $film['nama'];
                                        $ringkasan = $film['ringkasan'];
                                        $tahun = $film['tahun'];
                                        $trailer = $film['trailer'];
                                        $rating = $film['rating'];

                                        $likesrs = mysqli_fetch_assoc(mysqli_query($conn, 
                                            "SELECT COUNT(*) AS likes FROM loves 
                                            WHERE film_id = $id AND status = 1 "))
                                            ['likes'];
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
                                            <a class="button_2" href="movie-detail.php?id=<?php echo $id; ?>">
                                                View Details
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div style="background-color: #08142c;" class="upcome_2i_last p-3">
                                    <div class="upcome_2i_lasti row">
                                        <div class="col-md-9 col-9">
                                            <div class="upcome_2i_lastil">
                                                <h5 class="text-white">
                                                    <?php echo $judul; ?>
                                                </h5>
                                                <h6 class="text-white">
                                                    <?php echo $genre; ?>
                                                </h6>
                                                <span class="col_red me-2">
                                                    <i class="fa fa-star"></i>
                                                    <?php
                                                                if ($rating == NULL) {
                                                                    echo 0;
                                                                } else {
                                                                    echo round($rating, 1);
                                                                }
                                                            ?>
                                                </span>
                                                <!-- likes -->
                                                <span class="col_red">
                                                    <i class="fa fa-heart"></i>
                                                    <?php
                                                                if ($likesrs == NULL) {
                                                                    echo 0;
                                                                } else {
                                                                    echo $likesrs;
                                                                }
                                                            ?>
                                                </span>
                                                <!-- likes end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                ?>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" <?php if($pagereleas> 1){ echo
                                        "href='index.php?page_releas=$previousrs'"; } ?>>
                                        Previous
                                    </a>
                                </li>
                                <?php 
                                        for ($i = 1; $i <= $tl_pagers; $i++) { 
                                            $active = "";
                                            if(isset($_GET["page_releas"])){
                                                if($i == $_GET["page_releas"]){
                                                    $active = "active";
                                                }
                                            }
                                    ?>
                                <li class="page-item <?= $active; ?>">
                                    <a class="page-link" href="index.php?page_releas=<?= $i; ?>">
                                        <?= $i; ?>
                                    </a>
                                </li>
                                <?php
                                        }
                                    ?>
                                <li class="page-item">
                                    <a class="page-link" <?php if($pagereleas < $tl_pagers){
                                        echo "href='index.php?page_releas=$nextrs'" ; } ?>>
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane" id="best-library">
                        <div class="upcome_2i row">
                            <?php
                                    $btbest = 4;
                                    $pagebest = isset($_GET['page_best']) ? (int)$_GET['page_best'] : 1;
                                    $pagewal = ($pagebest > 1) ? ($pagebest * $btbest) - $btbest : 0;

                                    $previousbs = $pagebest - 1;
                                    $nextbs = $pagebest + 1;

                                    $dts = $conn->query("SELECT film.id, film.poster, 
                                        film.judul, genre.nama, film.ringkasan, film.tahun, film.trailer, COUNT(kritik.film_id) AS jumlah_kritik, 
                                        SUM(kritik.point) AS jumlah_point, 
                                        SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                    FROM film 
                                    INNER JOIN genre ON film.genre_id = genre.id 
                                    INNER JOIN kritik ON film.id = kritik.film_id 
                                    WHERE kritik.point=5
                                    GROUP BY kritik.film_id;");
                                    $jml_dts = mysqli_num_rows($dts);
                                    $tl_page = ceil($jml_dts / $btbest);

                                    $query_best = $conn->query("SELECT film.id, film.poster, 
                                            film.judul, genre.nama, film.ringkasan, film.tahun, film.trailer, COUNT(kritik.film_id) AS jumlah_kritik, 
                                            SUM(kritik.point) AS jumlah_point, 
                                            SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                        FROM film 
                                        INNER JOIN genre ON film.genre_id = genre.id 
                                        INNER JOIN kritik ON film.id = kritik.film_id 
                                        WHERE kritik.point=5
                                        GROUP BY kritik.film_id
                                        LIMIT $pagewal, $btbest");
                                    foreach ($query_best as $row_best) {
                                        $id_best = $row_best['id'];
                                        $poster_best = $row_best['poster'];
                                        $judul_best = $row_best['judul'];
                                        $genre_best = $row_best['nama'];
                                        $ringkasan_best = $row_best['ringkasan'];
                                        $tahun_best = $row_best['tahun'];
                                        $trailer_best = $row_best['trailer'];
                                        $rating_best = $row_best['rating'];

                                        $likesbest = mysqli_fetch_assoc(mysqli_query($conn, 
                                            "SELECT COUNT(*) AS likes FROM loves 
                                            WHERE film_id = $id_best AND status = 1 "))
                                            ['likes'];
                                ?>
                            <div class="col-md-3">
                                <div class="upcome_2i1 clearfix position-relative">
                                    <div class="upcome_2i1i clearfix">
                                        <input type="hidden" value="<?= $id_best; ?>">
                                        <img src="assets/img/film/<?= $poster_best; ?>" alt="<?= $judul_best; ?>"
                                            width="260" height="330">
                                    </div>
                                    <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                        <h6 class="text-uppercase">
                                            <a class="button_1" href="<?= $trailer_best; ?>">View Trailer</a>
                                        </h6>
                                        <h6 class="text-uppercase mb-0">
                                            <a class="button_2" href="movie-detail.php?id=<?= $id_best; ?>">
                                                View Details
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div style="background-color: #08142c;" class="upcome_2i_last p-3">
                                    <div class="upcome_2i_lasti row">
                                        <div class="col-md-9 col-9">
                                            <div class="upcome_2i_lastil">
                                                <h5 class="text-white">
                                                    <?= $judul_best; ?>
                                                </h5>
                                                <h6 class="text-white">
                                                    <?= $genre_best; ?>
                                                </h6>
                                                <span class="col_red me-2">
                                                    <i class="fa fa-star"></i>
                                                    <?= round($rating_best, 1); ?>
                                                </span>
                                                <!-- likes -->
                                                <span class="col_red">
                                                    <i class="fa fa-heart"></i>
                                                    <?php
                                                        if ($likesbest == NULL) {
                                                            echo 0;
                                                        } else {
                                                            echo $likesbest;
                                                        }
                                                    ?>
                                                </span>
                                                <!-- likes end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                ?>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" <?php if($pagebest> 1){ echo
                                        "href='index.php?page_best=$previousbs'"; } ?>>
                                        Previous
                                    </a>
                                </li>
                                <?php 
                                        for ($i = 1; $i <= $tl_page; $i++) { 
                                            $active = "";
                                            if(isset($_GET["page_best"])){
                                                if($i == $_GET["page_best"]){
                                                    $active = "active";
                                                }
                                            }
                                    ?>
                                <li class="page-item <?= $active; ?>">
                                    <a class="page-link" href="index.php?page_best=<?= $i; ?>">
                                        <?= $i; ?>
                                    </a>
                                </li>
                                <?php
                                        }
                                    ?>
                                <li class="page-item">
                                    <a class="page-link" <?php if($pagebest < $tl_page){
                                        echo "href='index.php?page_best=$nextbs'" ; } ?>>
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane" id="favorite">
                        <div class="upcome_2i row">
                            <?php
                                $btrite = 4;
                                $pagerite = isset($_GET['page_rite']) ? (int)$_GET['page_rite'] : 1;
                                $pagewalite = ($pagerite > 1) ? ($pagerite * $btrite) - $btrite : 0;

                                $previousrite = $pagerite - 1;
                                $nextrite = $pagerite + 1;

                                $dtrite = $conn->query("SELECT film.id, film.poster, film.judul, 
                                    genre.nama, film.ringkasan, film.tahun, film.trailer, 
                                    COUNT(kritik.film_id) AS jumlah_kritik, 
                                    SUM(kritik.point) AS jumlah_point, 
                                    SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                FROM film
                                INNER JOIN genre ON film.genre_id = genre.id 
                                LEFT JOIN kritik ON film.id = kritik.film_id 
                                WHERE kritik.point>=0
                                GROUP BY kritik.film_id");
                                $jml_dtrite = mysqli_num_rows($dtrite);
                                $rite_page = ceil($jml_dtrite / $btrite);

                                $query_rite = $conn->query("SELECT film.id, film.poster, film.judul, 
                                        genre.nama, film.ringkasan, film.tahun, film.trailer, 
                                        COUNT(kritik.film_id) AS jumlah_kritik, 
                                        SUM(kritik.point) AS jumlah_point, 
                                        SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                    FROM film
                                    INNER JOIN genre ON film.genre_id = genre.id 
                                    LEFT JOIN kritik ON film.id = kritik.film_id 
                                    WHERE kritik.point>=0 
                                    GROUP BY kritik.film_id
                                    LIMIT $pagewalite, $btrite");
                                foreach ($query_rite as $row_rite) {
                                    $id_rite = $row_rite['id'];
                                    $poster_rite = $row_rite['poster'];
                                    $judul_rite = $row_rite['judul'];
                                    $genre_rite = $row_rite['nama'];
                                    $ringkasan_rite = $row_rite['ringkasan'];
                                    $tahun_rite = $row_rite['tahun'];
                                    $trailer_rite = $row_rite['trailer'];
                                    $rating_rite = $row_rite['rating'];

                                    $likesrite = mysqli_fetch_assoc(mysqli_query($conn, 
                                        "SELECT COUNT(*) AS likes FROM loves 
                                        WHERE film_id = $id_rite AND status = 1 "))
                                        ['likes'];
                                    
                            ?>
                            <div class="col-md-3">
                                <div class="upcome_2i1 clearfix position-relative">
                                    <div class="upcome_2i1i clearfix">
                                        <input type="hidden" value="<?= $id_rite; ?>">
                                        <img src="assets/img/film/<?= $poster_rite; ?>" alt="<?= $judul_rite; ?>"
                                            width="260" height="330">
                                    </div>
                                    <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                        <h6 class="text-uppercase">
                                            <a class="button_1" href="<?= $trailer_rite; ?>">View Trailer</a>
                                        </h6>
                                        <h6 class="text-uppercase mb-0">
                                            <a class="button_2" href="movie-detail.php?id=<?= $id_rite; ?>">
                                                View Details
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div style="background-color: #08142c;" class="upcome_2i_last p-3">
                                    <div class="upcome_2i_lasti row">
                                        <div class="col-md-9 col-9">
                                            <div class="upcome_2i_lastil">
                                                <h5 class="text-white">
                                                    <?= $judul_rite; ?>
                                                </h5>
                                                <h6 class="text-white">
                                                    <?= $genre_rite; ?>
                                                </h6>
                                                <span class="col_red me-2">
                                                    <i class="fa fa-star"></i>
                                                    <?= round($rating_rite, 1); ?>
                                                </span>
                                                <!-- likes -->
                                                <span class="col_red">
                                                    <i class="fa fa-heart"></i>
                                                    <?php
                                                        if ($likesrite == NULL) {
                                                            echo 0;
                                                        } else {
                                                            echo $likesrite;
                                                        }
                                                    ?>
                                                </span>
                                                <!-- likes end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" <?php if($pagerite> 1){ echo
                                        "href='index.php?page_rite=$previousrite'"; } ?>>
                                        Previous
                                    </a>
                                </li>
                                <?php 
                                        for ($i = 1; $i <= $rite_page; $i++) { 
                                            $active = "";
                                            if(isset($_GET["page_rite"])){
                                                if($i == $_GET["page_rite"]){
                                                    $active = "active";
                                                }
                                            }
                                    ?>
                                <li class="page-item <?= $active; ?>">
                                    <a class="page-link" href="index.php?page_rite=<?= $i; ?>">
                                        <?= $i; ?>
                                    </a>
                                </li>
                                <?php
                                        }
                                    ?>
                                <li class="page-item">
                                    <a class="page-link" <?php if($pagerite < $rite_page){
                                        echo "href='index.php?page_rite=$nextrite'" ; } ?>>
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #08142c;" id="trend">
        <div style="background-color: #08142c;" class="trend_m clearfix bg_light pt-4 pb-5">
            <div class="container-xl">
                <div class="row upcome_1 text-center">
                    <div class="col-md-12">
                        <h3 class="mb-0 text-white">TOP MOVIES</h3>
                        <hr class="line me-auto ms-auto">
                    </div>
                </div>
                <div class="trend_m1 row mt-3">
                    <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                        <div style="background-color: #08142c;" class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="upcome_2i row">
                                    <?php
                                            $batas = 4;
                                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                            $page_awal = ($page > 1) ? ($page * $batas) - $batas : 0;

                                            $previous = $page - 1;
                                            $next = $page + 1;

                                            $dt = $conn->query("SELECT film.id, film.poster, 
                                                        film.judul, genre.nama, film.ringkasan, film.tahun, film.trailer, COUNT(kritik.film_id) AS jumlah_kritik, 
                                                        SUM(kritik.point) AS jumlah_point, 
                                                        SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                                    FROM film 
                                                    INNER JOIN genre ON film.genre_id = genre.id 
                                                    INNER JOIN kritik ON film.id = kritik.film_id 
                                                    WHERE kritik.point>=4
                                                    GROUP BY kritik.film_id;");
                                            $jml_dt = mysqli_num_rows($dt);
                                            $total_page = ceil($jml_dt / $batas);

                                            $query3 = $conn->query("SELECT film.id, film.poster, 
                                                    film.judul, genre.nama, film.ringkasan, film.tahun, film.trailer, COUNT(kritik.film_id) AS jumlah_kritik, 
                                                    SUM(kritik.point) AS jumlah_point, 
                                                    SUM(kritik.point)/COUNT(kritik.film_id) AS rating
                                                FROM film 
                                                INNER JOIN genre ON film.genre_id = genre.id 
                                                INNER JOIN kritik ON film.id = kritik.film_id 
                                                WHERE kritik.point>=4
                                                GROUP BY kritik.film_id
                                                LIMIT $page_awal, $batas");
                                            
                                            foreach ($query3 as $row2) {
                                                $id_tm = $row2['id'];
                                                $poster_tm = $row2['poster'];
                                                $judul_tm = $row2['judul'];
                                                $genre_tm = $row2['nama'];
                                                $ringkasan_tm = $row2['ringkasan'];
                                                $tahun_tm = $row2['tahun'];
                                                $trailer_tm = $row2['trailer'];
                                                $rating_tm = $row2['rating'];

                                                $likestm = mysqli_fetch_assoc(mysqli_query($conn, 
                                                    "SELECT COUNT(*) AS likes FROM loves 
                                                    WHERE film_id = $id_tm AND status = 1 "))['likes'];
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
                                                        href="movie-detail.php?id=<?php echo $id_tm; ?>">
                                                        View Details
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div style="background-color: #08142c;" class="upcome_2i_last p-3 ">
                                            <div class="upcome_2i_lasti row">
                                                <div class="col-md-9 col-9">
                                                    <div class="upcome_2i_lastil">
                                                        <h5 class="text-white">
                                                            <?= $judul_tm; ?>
                                                        </h5>
                                                        <h6 class="text-white">
                                                            <?= $genre_tm; ?>
                                                        </h6>
                                                        <span class="col_red me-2">
                                                            <i class="fa fa-star"></i>
                                                            <?= round($rating_tm, 1); ?>
                                                        </span>
                                                        <!-- likes -->
                                                        <span class="col_red">
                                                            <i class="fa fa-heart"></i>
                                                            <?php
                                                                if ($likestm == NULL) {
                                                                    echo 0;
                                                                } else {
                                                                    echo $likestm;
                                                                }
                                                            ?>
                                                        </span>
                                                        <!-- likes end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                        ?>
                                </div>
                                <nav>
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item">
                                            <a class="page-link" <?php if($page> 1){ echo
                                                "href='index.php?page=$previous'"; } ?>>
                                                Previous
                                            </a>
                                        </li>
                                        <?php 
                                                for ($i = 1; $i <= $total_page; $i++) { 
                                                    $active = "";
                                                    if(isset($_GET["page"])){
                                                        if($i == $_GET["page"]){
                                                            $active = "active";
                                                        }
                                                    }
                                            ?>
                                        <li class="page-item <?= $active; ?>">
                                            <a class="page-link" href="index.php?page=<?= $i; ?>">
                                                <?= $i; ?>
                                            </a>
                                        </li>
                                        <?php
                                                }
                                            ?>
                                        <li class="page-item">
                                            <a class="page-link" <?php if($page < $total_page){
                                                echo "href='index.php?page=$next'" ; } ?>>
                                                Next
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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
        window.onscroll = function () {
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
</body>

</html>