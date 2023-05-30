<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About | MovApp</title>
        
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
                                <a class="nav-link active" href="about.php">About</a>
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

        <section id="center" class="center_o pt-5">
            <div class="container">
                <div class="row center_o1 text-center">
                    <div class="col-md-12">
                        <h2>ABOUT US</h2>
                        <h5 class="bg_dark d-inline-block p-4 mb-0 mt-4 pt-2 pb-2 fw-normal col_red">
                            <a class="text-white" href="#">Home</a> 
                            <span class="me-2 ms-2 text-muted"> /</span> About Us
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="p_3 bg-light">
            <div class="container">
                <div class="row about_1">
                    <div class="col-md-6">
                        <div class="about_1l">
                            <h3>ABOUT by MovApp</h3>
                            <hr class="line">
                            <h5 class="mt-4">
                                How it All Started Event and manage this this is event how to given pas and how to
                                participate
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor nt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor indi reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exceiur sint occaecat cupidatat non proident,
                            </p>
                            <p class="mb-0">
                                sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis de omni
                                iste natus error sit voluptatem tium doloremque laudantium, totam rem am, eaque ipsa quae ab illo inventore veritatis
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_1r">
                            <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active"
                                        aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1"
                                        aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2"
                                        aria-label="Slide 3" class=""></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/plugin/TemplateOnWeb/img/13.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/plugin/TemplateOnWeb/img/14.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/plugin/TemplateOnWeb/img/15.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="p_3">
            <div class="container-xl">
                <div class="row faq_1">
                    <div class="col-md-6">
                        <div class="faq_1l text-center bg_red p-4 rounded-3">
                            <h5 class="text-white">ASK YOUR QUESTION</h5>
                            <hr class="line ms-auto me-auto">
                            <input class="form-control bg-transparent rounded-0 mt-4" placeholder="Name" type="text">
                            <input class="form-control bg-transparent rounded-0 mt-3" placeholder="Email" type="text">
                            <input class="form-control bg-transparent rounded-0 mt-3" placeholder="Phone" type="text">
                            <textarea placeholder="Comment" class="form-control rounded-0 form_text mt-3 bg-transparent"></textarea>
                            <h6 class="mb-0 mt-4"><a class="button" href="#">Send a Comment</a></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="faq_1r">
                            <h3 class="mb-0">FREQUENT ASKED QUESTIONS</h3>
                            <hr class="line mb-4">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button mt-0" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is special about comparing rental car deals?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion
                                            reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on demesne
                                            ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at assistance
                                            acceptance my or.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Where is Corpo office address ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion
                                            reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on demesne
                                            ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at assistance
                                            acceptance my or.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                                            How many your customers have ?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion
                                            reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on demesne
                                            ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at assistance
                                            acceptance my or.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                            Where is you main office ?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion
                                            reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on demesne
                                            ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at assistance
                                            acceptance my or.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                                            Shortly.. What Corpo does ?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion
                                            reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on demesne
                                            ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at assistance
                                            acceptance my or.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="price" class="p_3 bg-light">
            <div class="container-xl">
                <div class="row upcome_1 text-center">
                    <div class="col-md-12">
                        <h3 class="mb-0">PRICING TABLE</h3>
                        <hr class="line me-auto ms-auto">
                    </div>
                </div>
                <div class="row price_1 mt-3">
                    <div class="col-md-4">
                        <div class="price_1i text-center pt-4 pb-4 bg-white">
                            <div class="price_1i1">
                                <span class="col_red font_60 lh-1"><i class="fa fa-rupee"></i></span>
                                <h4 class="bg_red text-white p-3 mt-3">Monthly Package</h4>
                            </div>
                            <div class="price_1i2 mt-4">
                                <h5 class="fw-normal col_red mt-4 mb-4">25% offer</h5>
                                <h2 class="mb-4">$32.99 /M</h2>
                                <ul>
                                    <li class="fs-5 mb-1">30 days trial Features</li>
                                    <li class="fs-5 mb-1">Synced to cloud database</li>
                                    <li class="fs-5 mb-1">12 hours of support</li>
                                    <li class="fs-5 mb-1">Social media integration</li>
                                    <li class="fs-5 mb-1">24/7 support</li>
                                </ul>
                                <h5 class="mt-3 mb-0 fw-normal"><a class="button_1" href="#">Subscribe Now</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price_1i text-center pt-4 pb-4 bg-white">
                            <div class="price_1i1">
                                <span class="col_red font_60 lh-1"><i class="fa fa-rupee"></i></span>
                                <h4 class="bg_red text-white p-3 mt-3">Yearly Package</h4>
                            </div>
                            <div class="price_1i2 mt-4">
                                <h5 class="fw-normal col_red mt-4 mb-4">30% offer</h5>
                                <h2 class="mb-4">$51.99 /Y</h2>
                                <ul>
                                    <li class="fs-5 mb-1">30 days trial Features</li>
                                    <li class="fs-5 mb-1">Synced to cloud database</li>
                                    <li class="fs-5 mb-1">12 hours of support</li>
                                    <li class="fs-5 mb-1">Social media integration</li>
                                    <li class="fs-5 mb-1">24/7 support</li>
                                </ul>
                                <h5 class="mt-3 mb-0 fw-normal"><a class="button_1" href="#">Subscribe Now</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price_1i text-center pt-4 pb-4 bg-white">
                            <div class="price_1i1">
                                <span class="col_red font_60 lh-1"><i class="fa fa-rupee"></i></span>
                                <h4 class="bg_red text-white p-3 mt-3">Lifetime Package</h4>
                            </div>
                            <div class="price_1i2 mt-4">
                                <h5 class="fw-normal col_red mt-4 mb-4">45% offer</h5>
                                <h2 class="mb-4">$89.99 /L</h2>
                                <ul>
                                    <li class="fs-5 mb-1">30 days trial Features</li>
                                    <li class="fs-5 mb-1">Synced to cloud database</li>
                                    <li class="fs-5 mb-1">12 hours of support</li>
                                    <li class="fs-5 mb-1">Social media integration</li>
                                    <li class="fs-5 mb-1">24/7 support</li>
                                </ul>
                                <h5 class="mt-3 mb-0 fw-normal"><a class="button_1" href="#">Subscribe Now</a></h5>
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