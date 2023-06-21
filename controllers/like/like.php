<?php
    require '../../database/db.php';

    $film_id = $_POST['film_id'];
    $users_id = $_POST['users_id'];
    $status = $_POST['status'];

    $loves = mysqli_query($conn, "SELECT * FROM loves WHERE film_id = $film_id AND users_id = $users_id");
    if (mysqli_num_rows($loves) > 0) {
        $love = mysqli_fetch_assoc($loves);
        if ($love['status'] === $status) {
            mysqli_query($conn, "DELETE FROM loves WHERE film_id = $film_id AND users_id = $users_id");
            echo "delete$status";
        } else {
            mysqli_query($conn, "UPDATE loves SET status = '$status' WHERE film_id = $film_id AND users_id = $users_id");
            echo "changeto$status";
        }
    } else {
        mysqli_query($conn, "INSERT INTO loves (`users_id`, `film_id`, `status`) VALUES ('$users_id', '$film_id', '$status')");
        echo "new$status";
    }