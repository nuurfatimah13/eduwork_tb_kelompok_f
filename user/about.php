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
        <title>About | User | MovApp</title>
        
        <!-- Assets Link -->
        <?php include_once ("layouts/assetsLink.php"); ?>
    </head>
    <body>
        <!-- Header Start -->
        <section id="header">
            <nav style="background-color: #081c3c;" class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="index.php">
                        <img src="../assets/img/icons/logo-1.png" alt="logo" 
                            width="20%" class="me-1 col_light fs-1 align-middle">
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

        <section style="background-color: #08142c;"id="center" class="center_o pt-5">
            <div class="container">
                <div class="row center_o1 text-center">
                    <div class="col-md-12">
                        <h2 class="text-light">ABOUT US</h2>
                        <h5 class="bg_dark d-inline-block p-4 mb-0 mt-4 pt-2 pb-2 fw-normal col_red">
                            <a class="text-white" href="index.php">Home</a> 
                            <span class="me-2 ms-2 text-muted"> /</span> About Us
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #08142c;" id="about" class="p_3 ">
            <div style="background-color: #08142c;"class="container text-light">
                <div class="row about_1">
                    <div class="col-md-6">
                        <div class="about_1l">
                            <h3>MovApp</h3>
                            <hr class="line">
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
                            <img src="../assets/img/icons/logo-1.svg" class="d-block w-75" 
                                alt="logo-MovApp">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #08142c;"id="faq" class="p_3">
            <div style="background-color: #08142c;"class="container-xl text-light">
                <div class="row faq_1">
                    <div class="col-md-12">
                        <div class="faq_1r">
                            <h3 class="mb-0">FREQUENT ASKED QUESTIONS</h3>
                            <hr class="line mb-4">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button mt-0" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is special about MovApp?
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
                                            Where is MovApp office address ?
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