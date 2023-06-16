<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle ms-4">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-none 
                    d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="../../../assets/img/uploads/<?= $photouser; ?>" 
                        class="avatar img-fluid rounded me-1" 
                        alt="<?= $nameuser; ?>" /> 
                    <span class="text-dark"><?= $nameuser; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" 
                        href="../profile.php?id=<?= $iduser; ?>">
                        <i class="align-middle" data-feather="user">
                        </i>
                        &nbsp;
                        Profile
                    </a>
                    <a class="dropdown-item" 
                        href="../../../controllers/auth/logout.php">
                        <i class="align-middle" data-feather="log-out">
                        </i>
                        &nbsp;
                        Log out
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>