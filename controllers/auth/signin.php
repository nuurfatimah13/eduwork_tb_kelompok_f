<?php 
    require_once("../../database/db.php");

    if (isset($_POST['signin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = $conn->query("SELECT * FROM users WHERE email='$email';");
        $jumlah = mysqli_num_rows($sql);

        $user = mysqli_fetch_array($sql);
        $passwordhash = $user['password'];
        $roleuser = $user['role'];

        if ($jumlah > 0) {
            if (password_verify($password, $passwordhash)) {
                if ($roleuser == 'admin') {
                    session_start();
                    $_SESSION["user"] = $user;
                    header("Location: ../../admin/index.php");
                } else if ($roleuser == 'user') {
                    session_start();
                    $_SESSION["user"] = $user;
                    header("Location: ../../user/index.php");
                }
            } else {
                header("Location: ../../signin.php?message=error");
            }
        }
    }