<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie Detail | MovApp</title>

        <!-- Assets Link -->
        <?php include_once ("layouts/assetsLink.php"); ?>
    </head>
    <body>
        <!-- Header Start -->
        <section id="header">
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
            <nav  style="background-color: #081c3c;" class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
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
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                            <!-- <li class="nav-item ms-3">
                                <a class="nav-link button" data-bs-toggle="modal" data-bs-target="#signin-modal"
                                    href="#">
                                    SIGN IN
                                </a>
                            </li> -->
                            <!-- Modal End -->
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
                        <h2>MOVIE DETAIL</h2>
                        <h5 class="bg_dark d-inline-block p-4 mb-0 mt-4 pt-2 pb-2 fw-normal col_red">
                            <a class="text-white" href="index.php">Home</a> 
                            <span class="me-2 ms-2 text-muted"> /</span> Movie Detail
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #08142c;" id="blog" class="p_3 ">
            <div class="container">
                <div class="row blog1">
                    <div class="col-md-9">
                        <div class="blog1l">
                            <div class="blog1l1 bg-white">
                                <?php
                                    include "database/db.php";
                                    $id = $_GET['id']; 
                                    $query = $conn->query("SELECT film.id, film.poster, film.judul, 
                                        genre.nama AS genre, film.ringkasan AS ringkasan, film.tahun, 
                                        film.trailer, kritik.point AS rating, 
                                        COUNT(kritik.content) AS comment
                                    FROM film
                                    INNER JOIN genre ON film.genre_id = genre.id 
                                    LEFT JOIN kritik ON film.id = kritik.film_id 
                                    WHERE film.id=$id;");
                                    while ($data = mysqli_fetch_array($query)) {
                                        $id = $data["id"];
                                        $poster = $data["poster"];
                                        $judul = $data["judul"];
                                        $genre = $data["genre"];
                                        $ringkasan = $data["ringkasan"];
                                        $tahun = $data["tahun"];
                                        $trailer = $data["trailer"];
                                        $rating = $data["rating"];
                                        $comment = $data["comment"];

                                    }
                                ?>
                                <div class="grid clearfix">
                                    <figure class="effect-jazz mb-0">
                                        <img src="assets/img/film/<?= $poster; ?>" height="480" 
                                            class="w-100" alt="<?= $judul; ?>">
                                    </figure>
                                </div>
                                <div class="blog1l1i clearfix p-4">
                                    <h6 class="col_red">Released <?= $tahun; ?></h6>
                                    <h4 class="mt-3"><?= $judul; ?></h4>
                                    <h5 class="mt-1"><?= $genre; ?></h5>
                                    <p>Deskripsi: <br /> <?= $ringkasan; ?></p>
                                    <div class="blog1l1id clearfix row">
                                        <div class="col-md-4">
                                            <div class="blog1l1idi">
                                                <div class="grid clearfix">
                                                    Actor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog1l1i1 clearfix row m-0 p-3">
                                    <div class="col-md-9">
                                        <div class="blog1l1i1l">
                                            <ul class="mb-0">
                                                <li class="d-inline-block col_red me-3">
                                                    <i class="fa fa-star"></i> <?= $rating; ?>
                                                </li>
                                                <li class="d-inline-block col_red me-3">
                                                    <i class="fa fa-comments me-1"></i> 
                                                    <?= $comment; ?> Comments
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: #08142c;"class="blog1ld1 row mt-4 text-light">
                                <div class="col-md-12">
                                    <h3>COMMENTS</h3>
                                    <hr class="line">
                                </div>
                            </div>
                            <div class="blog1ld2 row m-0 mt-2 bg-white pt-3 pb-3 shadow_box">
                                <?php 
                                    
                                ?>
                                <div class="col-md-2 pe-0 col-sm-2">
                                    <div class="blog1ld2l">
                                        <div class="grid clearfix">
                                            <figure class="effect-jazz mb-0">
                                                <img src="assets/img/uploads/" class="w-100" alt="abc">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <div class="blog1ld2r">
                                        <h5>Eget Nulla </h5>
                                        <h6 class="col_red fw-bold font_14">Feb 3 , 2022 - Monday - <a class="col_red" href="#">Reply</a></h6>
                                        <p class="mb-0 fs-6">The actor, director and producer, son to well-known stunt choreographer of
                                            Bollywood, rried to one of the most vivacious, bubbly, live-wire actress, is none other than our
                                            dashing Ajay Devgan, originally named Vishal Devgan !</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="blog1ld1 row mt-4 text-light">
                                <div class="col-md-12">
                                    <h3>LEAVE A COMMENT</h3>
                                    <hr class="line">
                                </div>
                            </div>
                            <div class="blog1ld3  mt-2 bg-white p-3 shadow_box">
                                <div class="blog1ld3 row">
                                    <div class="col-md-6">
                                        <div class="blog1ld3l">
                                            <input class="form-control" placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog1ld3l">
                                            <input class="form-control" placeholder="Email" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog1ld3 row">
                                    <div class="col-md-6">
                                        <div class="blog1ld3l">
                                            <input class="form-control mt-3" placeholder="Subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog1ld3l">
                                            <input class="form-control mt-3" placeholder="Website" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog1ld3 row">
                                    <div class="col-md-12">
                                        <div class="blog1ld3l">
                                            <textarea placeholder="Message" class="form-control form_text mt-3"></textarea>
                                            <h6 class="mb-0 mt-3 text-light"><a class="button_1" href="#">Send a Comment </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="blog1r">
                            <div class="blog1r2 shadow_box p-3 bg-white">
                                <h5>Movie</h5>
                                <hr class="line mb-3">
                                <div class="blog1r2i row">
                                    <div class="col-md-4 col-4 pe-0">
                                        <div class="blog1r2il">
                                            <div class="grid clearfix">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="img/25.jpg" class="w-100" alt="abc"></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <div class="blog1r2il">
                                            <p class="mb-1 lh-1"><a href="#">Lorem spum menus.</a></p>
                                            <h6 class="mb-0 col_red">10 June 2022</h6>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog1r2i row">
                                    <div class="col-md-4 col-4 pe-0">
                                        <div class="blog1r2il">
                                            <div class="grid clearfix">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="img/26.jpg" class="w-100" alt="abc"></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <div class="blog1r2il">
                                            <p class="mb-1 lh-1"><a href="#">Lorem spum menus.</a></p>
                                            <h6 class="mb-0 col_red">10 June 2022</h6>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog1r2i row">
                                    <div class="col-md-4 col-4 pe-0">
                                        <div class="blog1r2il">
                                            <div class="grid clearfix">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="img/27.jpg" class="w-100" alt="abc"></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <div class="blog1r2il">
                                            <p class="mb-1 lh-1"><a href="#">Lorem spum menus.</a></p>
                                            <h6 class="mb-0 col_red">10 June 2022</h6>
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