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
        <title>Movie Detail | User | MovApp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

        <!-- Assets Link -->
        <?php include_once("layouts/assetsLink.php"); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <script src="https://use.fontawesome.com/fe459689b4.js">
        </script>
        <style>
            button .like {
                border: none;
                background-color: #fff !important;
            }
            button .fa-heart {
                color: red;
            }
        </style>
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
                                    include "../database/db.php";
                                    $id = $_GET['id'];
                                    $query = $conn->query("SELECT film.id, film.poster, 
                                            film.judul, 
                                            film.genre_id, genre.nama AS genre, film.ringkasan AS ringkasan, film.tahun, film.trailer, kritik.point AS rating, 
                                            COUNT(kritik.content) AS comment
                                        FROM film
                                        INNER JOIN genre ON film.genre_id = genre.id 
                                        LEFT JOIN kritik ON film.id = kritik.film_id 
                                        WHERE film.id=$id;");
                                        
                                    foreach ($query as $film) {
                                        $id = $film["id"];
                                        $poster = $film["poster"];
                                        $judul = $film["judul"];
                                        $genre = $film["genre"];
                                        $ringkasan = $film["ringkasan"];
                                        $tahun = $film["tahun"];
                                        $trailer = $film["trailer"];
                                        $rating = $film["rating"];
                                        $comment = $film["comment"];
                                        $genreId = $film["genre_id"];

                                        $likesCount = mysqli_fetch_assoc(mysqli_query($conn, 
                                            "SELECT COUNT(*) AS likes FROM loves 
                                            WHERE film_id = $id AND status = 1 "))
                                            ['likes'];

                                        $status = mysqli_query($conn, "SELECT status 
                                            FROM loves 
                                            WHERE film_id = $id AND users_id = $iduser");
                                        if (mysqli_num_rows($status) > 0) {
                                            $status = mysqli_fetch_assoc($status)['status'];
                                        } else {
                                            $status = 0;
                                        }
                                    }
                                ?>
                                <div class="grid clearfix">
                                    <figure class="effect-jazz mb-0">
                                        <img src="../assets/img/film/<?= $poster; ?>" height="480" class="w-100" alt="<?= $judul; ?>">
                                    </figure>
                                </div>
                                <div class="blog1l1i clearfix p-4">
                                    <h6 class="col_red">Released <?= $tahun; ?></h6>
                                    <h4 class="mt-3"><?= $judul; ?></h4>
                                    <h5 class="mt-1"><?= $genre; ?></h5>
                                    <p class="mt-1"><b>Deskripsi:</b> <br /> <?= $ringkasan; ?></p>
                                    <div class="blog1l1id clearfix row">
                                        <h6><b>Aktor:</b></h6>
                                        <?php
                                            $queryCast = $conn->query("SELECT 
                                                    cast.nama AS aktor
                                                FROM peran
                                                INNER JOIN cast ON cast.id = peran.cast_id
                                                WHERE peran.film_id=$id;
                                            ");
                                            while ($dataCast = mysqli_fetch_array($queryCast)) {
                                                $cast = $dataCast["aktor"];
                                        ?>
                                            <div class="">
                                                <div class="blog1l1idi">
                                                    <div class="grid clearfix">
                                                        <?= $cast; ?>,
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="blog1l1i1 clearfix row m-0 p-3">
                                    <div class="col-md-9">
                                        <div class="blog1l1i1l">
                                            <ul class="mb-0">
                                                <li class="d-inline-block col_red me-3">
                                                    <i class="fa fa-star"></i> 
                                                    <?= round($rating, 1); ?>
                                                </li>
                                                <li class="d-inline-block col_red me-3">
                                                    <button class="col_red like <?php if($status == 1) echo "selected"; ?>" 
                                                        style="border: none; background-color: #fff;"
                                                        data-film-id = <?php echo $id; ?>>
                                                        <i class="fa fa-heart-o fa-md ilike<?= $id; ?>"></i>
                                                        <span class="likes_count<?= $id; ?>" 
                                                            data-count = <?= $likesCount; ?>>
                                                            <?= $likesCount; ?> Likes
                                                        </span>
                                                    </button>
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
                            <div style="background-color: #08142c;" class="blog1ld1 row mt-4 text-light">
                                <div class="col-md-12">
                                    <h3>COMMENTS</h3>
                                    <hr class="line">
                                </div>
                            </div>
                            <?php
                                $id = $_GET['id'];
                                $query_cm = $conn->query("SELECT kritik.users_id, 
                                        kritik.film_id, kritik.content, 
                                        users.name, users.photo
                                    FROM kritik
                                    INNER JOIN users ON users.id = kritik.users_id
                                    WHERE kritik.film_id=$id;
                                ");
                                while ($row_cm = mysqli_fetch_array($query_cm)) {
                                    $content_cm = $row_cm["content"];
                                    $name_cm = $row_cm["name"];
                                    $photo_cm = $row_cm["photo"];
                            ?>
                                <div class="blog1ld2 row m-0 mt-2 bg-white pt-3 pb-3 shadow_box">
                                    <div class="col-md-2 pe-0 col-sm-2">
                                        <div class="blog1ld2l">
                                            <div class="grid clearfix">
                                                <figure class="effect-jazz mb-0">
                                                    <img 
                                                        src="../assets/img/uploads/<?= $photo_cm; ?>" 
                                                        class="w-50" 
                                                        style="border-radius: 100%;"
                                                        alt="<?= $name_cm; ?>">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <div class="blog1ld2r">
                                            <h5><?= $name_cm; ?></h5>
                                            <h6 class="col_red fw-bold font_14"></h6>
                                            <p class="mb-0 fs-6"><?= $content_cm; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                            <!-- comment dan rating -->
                            <div class="blog1ld1 row mt-4 text-light">
                                <div class="col-md-12">
                                    <h3>LEAVE A COMMENT</h3>
                                    <hr class="line">
                                </div>
                            </div>
                            <?php
                                include "../database/db.php";
                                $id = $_GET['id'];
                                $query = $conn->query("SELECT * FROM film where id='$id'");
                                $query1 = $conn->query("SELECT * FROM kritik");
                            ?>
                            <form action="../controllers/kritik/rating.php" method="post">
                                <div class="blog1ld3  mt-2 bg-white p-3 shadow_box">
                                    <div class="blog1ld3 row">
                                        <div class="col-md-12">
                                            <input type="hidden" name="users_id" value="<?= $iduser; ?>">
                                            <input type="hidden" name="film_id" value="<?= $id; ?>">
                                            <div class="blog1ld3l">
                                                <textarea placeholder="Message" class="form-control form_text mt-3" name="content"></textarea>
                                                <div class="rateyo" id="point" data-rateyo-rating="4" 
                                                    data-rateyo-num-stars="5" data-rateyo-score="3">
                                                </div>
                                                <span class='result'>0</span>
                                                <input type="hidden" name="point">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 mt-3 text-light">
                                        <button class="button_1">Send a Comment</button>
                                    </h6>
                                </div>
                            </form>
                            <!-- end comment dan rating -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="blog1r">
                            <div class="blog1r2 shadow_box p-3 bg-white">
                                <h5>Similar Movies</h5>
                                <hr class="line mb-3">
                                <?php
                                // query for similar movies order by genre
                                $querysM = $conn->query("SELECT film.id, film.poster, film.judul, 
                                                film.genre_id, film.tahun 
                                                FROM film
                                                WHERE film.genre_id=$genreId
                                                LIMIT 4;
                                            ");
                                while ($rowsM = mysqli_fetch_array($querysM)) {
                                    $idsM = $rowsM['id'];
                                    $postersM = $rowsM['poster'];
                                    $judulsM = $rowsM['judul'];
                                    $tahunsM = $rowsM['tahun'];
                                ?>
                                    <div class="blog1r2i row">
                                        <div class="col-md-4 col-4 pe-0">
                                            <div class="blog1r2il">
                                                <div class="grid clearfix">
                                                    <figure class="effect-jazz mb-0">
                                                        <a href="movie-detail.php?id=<?= $idsM; ?>">
                                                            <img src="../assets/img/film/<?= $postersM; ?>" class="w-100" alt="<?= $judulsM; ?>">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-8">
                                            <div class="blog1r2il">
                                                <p class="mb-1 lh-1">
                                                    <a href="movie-detail.php?id=<?= $idsM; ?>"><?= $judulsM; ?></a>
                                                </p>
                                                <h6 class="mb-0 col_red"><?= $tahunsM; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                <?php
                                    }
                                ?>
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

        <script>
            $('.like').click(function() {
                var data = {
                    film_id: $(this).data('film-id'),
                    users_id: <?= $iduser; ?>,
                    status: $(this).hasClass('like') ? 1 : '',
                };
                $.ajax({
                    url: "../controllers/like/like.php",
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        var film_id = data['film_id'];
                        var likes = $('.likes_count' + film_id);
                        var likesCount = likes.data('count');
                        var ilikes = $('.ilike' + film_id);

                        var likeButton = $(".like[data-film-id=" + film_id + "]");
                        if (response == 'new1') {
                            likes.html(likesCount + 1);
                            likeButton.addClass('selected');
                            ilikes.removeClass('fa-heart-o');
                            ilikes.addClass('fa-heart');
                        } else if (response == 'delete1') {
                            likes.html(parseInt($('.likes_count' + film_id).text()) - 1);
                            likeButton.removeClass('selected');
                            ilikes.removeClass('fa-heart');
                            ilikes.addClass('fa-heart-o');
                        }
                    }
                })
            })
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

        <script>
            $(function() {
                $(".rateyo").rateYo().on("rateyo.change", function(e, data) {
                    var point = data.rating;
                    $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                    $(this).parent().find('.result').text('point :' + point);
                    $(this).parent().find('input[name=point]').val(point); //add rating value to input field
                });
            });
        </script>
    </body>
</html>