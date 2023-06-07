<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact | MovApp</title>
                
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
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.php">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contact.php">Contact</a>
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
                        <h2>CONTACT US</h2>
                        <h5 class="bg_dark d-inline-block p-4 mb-0 mt-4 pt-2 pb-2 fw-normal col_red">
                            <a class="text-white" href="#">Home</a> 
                            <span class="me-2 ms-2 text-muted"> /</span> Contact Us
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #08142c;" id="contact" class="p_3">
            <div class="container">
                <div class="row contact2 mt-4">
                    <div class="col-md-4">
                        <div style="background-color: #08142c;" class="contact2i text-center text-light shadow_box p-4">
                            <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-phone"></i></span>
                            <h4 class="mt-3">Contact</h4>
                            <h6 class="text-muted">+62 857 7671 2203</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="background-color: #08142c;"class="contact2i text-center text-light shadow_box p-4">
                            <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-map"></i></span>
                            <h4 class="mt-3">Location</h4>
                            <h6 class="text-muted">Jl. Kasturi Raya, Bogor, Indonesia</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="background-color: #08142c;" class="contact2i text-center text-light shadow_box p-4">
                            <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-envelope"></i></span>
                            <h4 class="mt-3">Email</h4>
                            <h6 class="text-muted">movapp13@gmail.com</h6>
                        </div>
                    </div>
                </div>
                <div class="contact3 row mt-4">
                    <div class="col-md-12">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0760064552496!2d106.98638329723316!3d-6.3841916624436825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69940e69863f47%3A0x5440a6fc2daec26!2sJl.%20Kasturi%20Raya%2C%20Cipenjo%2C%20Kec.%20Cileungsi%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1686044743242!5m2!1sid!2sid" height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
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