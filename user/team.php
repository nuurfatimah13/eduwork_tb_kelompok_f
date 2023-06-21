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
        <title>Team | User | MovApp</title>
            
        <!-- Assets Link -->
        <?php include_once ("layouts/assetsLink.php"); ?>
    </head>
    <body>
        <!-- Header Start -->
        <section id="header">
            <nav style="background-color: #081c3c;" class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="index.php">
                        <img src="../assets/img/icons/logo-1.png" alt="logo" width="20%" class="me-1 col_light fs-1 align-middle">
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
                        <h2>OUR TEAM</h2>
                        <h5 class="bg_dark d-inline-block p-4 mb-0 mt-4 pt-2 pb-2 fw-normal col_red">
                            <a class="text-white" href="index.php">Home</a> 
                            <span class="me-2 ms-2 text-muted"> /</span> Our Team
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #08142c;"id="team" class="p_3 pb-5">
            <div class="container">
                <div class="events_1i row">
                    <div class="col-md-3 pe-0">
                        <div class="events_1i1 clearfix position-relative">
                            <div class="events_1i1i clearfix">
                                <img src="../assets/img/team/stefani.jpeg" alt="abc" class="w-100">
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
                                <img src="../assets/img/team/reza.png" alt="abc" class="w-100">
                            </div>
                        </div>
                        <div class="events_1i2 clearfix p-3 bg-white text-center">
                            <h5><a href="#">Muhamad Fahreza Dwitama</a></h5>
                            <h6 class="mb-0 text-muted">SIB - Eduwork</h6>
                        </div>
                    </div>
                    <div class="col-md-3 pe-0">
                        <div class="events_1i1 clearfix position-relative">
                            <div class="events_1i1i clearfix">
                                <img src="../assets/img/team/fathimah.png" alt="abc" class="w-100">
                            </div>
                        </div>
                        <div class="events_1i2 clearfix p-3 bg-white text-center">
                            <h5><a href="#">Fathimah Nuurussa'aadah</a></h5>
                            <h6 class="mb-0 text-muted">SIB - Eduwork</h6>
                        </div>
                    </div>
                    <div class="col-md-3 pe-0">
                        <div class="events_1i1 clearfix position-relative">
                            <div class="events_1i1i clearfix">
                                <img src="../assets/img/team/robiatul.jpg" alt="abc" class="w-100">
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