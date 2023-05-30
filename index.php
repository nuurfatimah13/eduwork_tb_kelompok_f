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
            <nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
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
                            <li class="nav-item">
                                <select name="categories" class="form-select bg-light" required="">
                                    <option value="">All Categories</option>
                                    <option value=""></option>
                                </select>
                                <div class="input-group">
                                    <input type="text" class="form-control border-start-0" placeholder="Search Movie">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary bg_yell" type="button">
                                            <i class="fa fa-search"></i> 
                                        </button>
                                    </span>
                                </div>                        
                            </li>
                            <!-- Modal Start -->
                            <li class="nav-item ms-3">
                                <a class="nav-link button" data-bs-toggle="modal" data-bs-target="#signin-modal"
                                    href="#">
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
        <section id="center" class="center_home">
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
                    <div class="carousel-item active">
                        <img src="assets/plugin/TemplateOnWeb/img/1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5 class="text-uppercase bg_red d-inline-block p-2 text-white">Releasing On</h5>
                            <h1>Vestibulum Arcu Eget Aptent Semper</h1>
                            <p>There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour or randomised words.</p>
                            <ul class="mb-0 mt-3">
                                <li class="d-inline-block me-2">
                                    <a class="button_1" href="#">CONTACT US 
                                        <i class="fa fa-long-arrow-right ms-1"></i>
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="button_2" href="#">ABOUT US 
                                        <i class="fa fa-long-arrow-right ms-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/plugin/TemplateOnWeb/img/2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5 class="text-uppercase bg_red d-inline-block p-2 text-white">Releasing On</h5>
                            <h1>Vestibulum Arcu Eget Aptent Semper</h1>
                            <p>There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour or randomised words.</p>
                            <ul class="mb-0 mt-3">
                                <li class="d-inline-block me-2"><a class="button_1" href="#">CONTACT US <i
                                            class="fa fa-long-arrow-right ms-1"></i></a></li>
                                <li class="d-inline-block"><a class="button_2" href="#">ABOUT US <i
                                            class="fa fa-long-arrow-right ms-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/plugin/TemplateOnWeb/img/3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5 class="text-uppercase bg_red d-inline-block p-2 text-white">Releasing On</h5>
                            <h1>Vestibulum Arcu Eget Aptent Semper</h1>
                            <p>There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour or randomised words.</p>
                            <ul class="mb-0 mt-3">
                                <li class="d-inline-block me-2"><a class="button_1" href="#">CONTACT US <i
                                            class="fa fa-long-arrow-right ms-1"></i></a></li>
                                <li class="d-inline-block"><a class="button_2" href="#">ABOUT US <i
                                            class="fa fa-long-arrow-right ms-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
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

        <section id="upcome" class="p_3 bg-light">
            <div class="container-xl">
                <div class="row upcome_1 text-center">
                    <div class="col-md-12">
                        <h3 class="mb-0">MOVIES</h3>
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
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/4.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Eget Nulla</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/5.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Semp Porta</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/6.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Quis Sem</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/7.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Lorem Amet</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcome_2i row mt-4">
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/8.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Eget Nulla</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/9.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Semp Porta</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/10.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Quis Sem</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/11.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Lorem Amet</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile">
                            <div class="upcome_2i row">
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/8.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Eget Nulla</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/9.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Semp Porta</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/10.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Quis Sem</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/11.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Lorem Amet</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcome_2i row mt-4">
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/4.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Eget Nulla</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/5.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Semp Porta</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/6.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Quis Sem</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/7.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Lorem Amet</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="settings">
                            <div class="upcome_2i row">
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/4.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Eget Nulla</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/5.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Semp Porta</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/6.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Quis Sem</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/7.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Lorem Amet</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcome_2i row mt-4">
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/8.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Eget Nulla</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/9.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Semp Porta</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/10.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Quis Sem</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="upcome_2i1 clearfix position-relative">
                                        <div class="upcome_2i1i clearfix">
                                            <img src="assets/plugin/TemplateOnWeb/img/11.jpg" class="w-100" alt="abc">
                                        </div>
                                        <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                            <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a></h6>
                                            <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="upcome_2i_last bg-white p-3">
                                        <div class="upcome_2i_lasti row">
                                            <div class="col-md-9 col-9">
                                                <div class="upcome_2i_lastil">
                                                    <h5><a href="#">Lorem Amet</a></h5>
                                                    <h6 class="text-muted">Drama, Action</h6>
                                                    <span class="col_red">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-0 col-3">
                                                <div class="upcome_2i_lastir pt-3">
                                                    <span><a class="col_red rounded" href="#"><i
                                                                class="fa fa-shopping-cart"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="trend">
            <div class="trend_m clearfix bg_light pt-4 pb-5">
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
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="upcome_2i row">
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/4.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Eget Nulla</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/5.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Semp Porta</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/6.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Quis Sem</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/7.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Lorem Amet</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="upcome_2i row">
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/8.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Eget Nulla</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/9.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Semp Porta</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/10.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Quis Sem</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="upcome_2i1 clearfix position-relative">
                                                <div class="upcome_2i1i clearfix">
                                                    <img src="assets/plugin/TemplateOnWeb/img/11.jpg" class="w-100" alt="abc">
                                                </div>
                                                <div
                                                    class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                                    <h6 class="text-uppercase"><a class="button_1" href="#">View Trailer</a>
                                                    </h6>
                                                    <h6 class="text-uppercase mb-0"><a class="button_2" href="#">View
                                                            Details</a></h6>
                                                </div>
                                            </div>
                                            <div class="upcome_2i_last bg-white p-3">
                                                <div class="upcome_2i_lasti row">
                                                    <div class="col-md-9 col-9">
                                                        <div class="upcome_2i_lastil">
                                                            <h5><a href="#">Lorem Amet</a></h5>
                                                            <h6 class="text-muted">Drama, Action</h6>
                                                            <span class="col_red">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 p-0 col-3">
                                                        <div class="upcome_2i_lastir pt-3">
                                                            <span><a class="col_red rounded" href="#"><i
                                                                        class="fa fa-shopping-cart"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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