<?php 
    require_once("../../database/db.php");

    if (isset($_POST['signin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = $conn->query("SELECT * FROM users WHERE email='$email';");
        $jumlah = mysqli_num_rows($sql);

        $user = mysqli_fetch_array($sql);
        $passwordhash = $user['password'];

        if ($jumlah > 0) {
            if (password_verify($password, $passwordhash)) {
                session_start();
                $_SESSION["user"] = $user;
                header("Location: ../../coba.php");
            } else {
                header("Location: ../../signin.php?message=error");
            }
        }
    }