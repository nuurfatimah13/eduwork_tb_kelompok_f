<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Team | MovApp</title>
            
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
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="team.php">Team</a>
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

        <section id="center" class="center_o pt-5">
            <div class="container">
                <div class="row center_o1 text-center">
                    <div class="col-md-12">
                        <h2>OUR TEAM</h2>
                        <h5 class="bg_dark d-inline-block p-4 mb-0 mt-4 pt-2 pb-2 fw-normal col_red">
                            <a class="text-white" href="#">Home</a> 
                            <span class="me-2 ms-2 text-muted"> /</span> Our Team
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="p_3 bg-light pb-5">
            <div class="container">
                <div class="events_1i row">
                    <div class="col-md-3 pe-0">
                        <div class="events_1i1 clearfix position-relative">
                            <div class="events_1i1i clearfix">
                                <img src="assets/img/team/stefani.jpeg" alt="abc" class="w-100">
                            </div>
                            <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
                                <ul class="d-inline-block mb-0 p-2 ps-4 pe-4">
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                    <li class="d-inline-block"><a href="#"><i class="fa fa-youtube-play text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="events_1i2 clearfix p-3 bg-white text-center">
                            <h5><a href="#">Moh. Indi Stefani</a></h5>
                            <h6 class="mb-0 text-muted">SIB - Eduwork</h6>
                        </div>
                    </div>
                    <div class="col-md-3 pe-0">
                        <div class="events_1i1 clearfix position-relative">
                            <div class="events_1i1i clearfix">
                                <img src="assets/img/team/reza.png" alt="abc" class="w-100">
                            </div>
                            <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
                                <ul class="d-inline-block mb-0 p-2 ps-4 pe-4">
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                    <li class="d-inline-block"><a href="#"><i class="fa fa-youtube-play text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="events_1i2 clearfix p-3 bg-white text-center">
                            <h5><a href="#">Muhammad Fahreza Dwitama</a></h5>
                            <h6 class="mb-0 text-muted">SIB - Eduwork</h6>
                        </div>
                    </div>
                    <div class="col-md-3 pe-0">
                        <div class="events_1i1 clearfix position-relative">
                            <div class="events_1i1i clearfix">
                                <img src="assets/img/team/fathimah.png" alt="abc" class="w-100">
                            </div>
                            <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
                                <ul class="d-inline-block mb-0 p-2 ps-4 pe-4">
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                    <li class="d-inline-block"><a href="#"><i class="fa fa-youtube-play text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="events_1i2 clearfix p-3 bg-white text-center">
                            <h5><a href="#">Fathimah Nurussa'adah</a></h5>
                            <h6 class="mb-0 text-muted">SIB - Eduwork</h6>
                        </div>
                    </div>
                    <div class="col-md-3 pe-0">
                        <div class="events_1i1 clearfix position-relative">
                            <div class="events_1i1i clearfix">
                                <img src="assets/img/team/robiatul.jpg" alt="abc" class="w-100">
                            </div>
                            <div class="events_1i1i1 clearfix position-absolute bottom-0 text-center w-100">
                                <ul class="d-inline-block mb-0 p-2 ps-4 pe-4">
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                    <li class="d-inline-block me-3"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                    <li class="d-inline-block"><a href="#"><i class="fa fa-youtube-play text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="events_1i2 clearfix p-3 bg-white text-center">
                            <h5><a href="#">Rabiatul Fitria Sulistina Putri</a></h5>
                            <h6 class="mb-0 text-muted">SIB - Eduwork</h6>
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