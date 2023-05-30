<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle ms-4">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="../../../assets/img/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Fatih" /> 
                    <span class="text-dark">Fatih</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                        <form action="../../../index.php" method="post">
                            <input type="hidden" name="logout" value="1">
                            <button class="btn btn-primary" type="submit">
                                <i class="align-middle" data-feather="log-out">
                                </i>
                                Log out
                            </button>
                        </form>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>