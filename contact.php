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
                                <a class="nav-link" href="team.php">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contact.php">Contact</a>
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

        <section id="center" class="center_o pt-5">
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

        <section id="contact" class="p_3 bg-light">
            <div class="container">
                <div class="row contact1">
                    <div class="col-md-8">
                        <div class="contact1l">
                            <h3>CONTACT US</h3>
                            <hr class="line">
                            <div class="blog1ld3 row mt-4">
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
                                        <h6 class="mb-0 mt-3"><a class="button_1" href="#">Submit </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact1r bg_red p-4 rounded-3 pt-5 pb-5 mt-4">
                            <h6 class="text-white"> <i class="fa fa-facebook me-1 align-middle"></i> Facebook Account</h6>
                            <h6 class="text-white mt-3"> <i class="fa fa-twitter me-1 align-middle"></i> Twitter Account</h6>
                            <h6 class="text-white mt-3"> <i class="fa fa-vimeo me-1 align-middle"></i> Vimeo Account</h6>
                            <h6 class="text-white mt-3"> <i class="fa fa-instagram me-1 align-middle"></i> Instagram Account</h6>
                            <h6 class="text-white mt-3 mb-0"> <i class="fa fa-youtube-play me-1 align-middle"></i> Youtube Account</h6>
                            <h6 class="text-white mt-3"> <i class="fa fa-linkedin me-1 align-middle"></i> Linkedin Account</h6>
                            <h6 class="text-white mt-3 mb-0"> <i class="fa fa-google me-1 align-middle"></i> Google Account</h6>
                        </div>
                    </div>
                </div>
                <div class="row contact2 mt-4">
                    <div class="col-md-4">
                        <div class="contact2i text-center bg-white shadow_box p-4">
                            <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-phone"></i></span>
                            <h4 class="mt-3">Contact</h4>
                            <h6 class="text-muted">+(000) 345 67 89</h6>
                            <h6 class="mb-0 text-muted">+(000) 345 67 89</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact2i text-center bg-white shadow_box p-4">
                            <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-map"></i></span>
                            <h4 class="mt-3">Location</h4>
                            <h6 class="text-muted">302 - Sem Nagar , India</h6>
                            <h6 class="mb-0 text-muted">Omez City 125 , India</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact2i text-center bg-white shadow_box p-4">
                            <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-envelope"></i></span>
                            <h4 class="mt-3">Email</h4>
                            <h6 class="text-muted">movapp13@gmail.com</h6>
                            <h6 class="mb-0 text-muted">movapp13@gmail.com</h6>
                        </div>
                    </div>
                </div>
                <div class="contact3 row mt-4">
                    <div class="col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788"
                            height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
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