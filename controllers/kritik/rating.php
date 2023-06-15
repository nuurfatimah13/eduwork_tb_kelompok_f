<?php

    include "../../database/db.php";

    $users_id = $_POST['users_id'];
    $film_id = $_POST['film_id'];
    $content = $_POST['content'];
    $point = $_POST['point'];

    $result = mysqli_query($conn, "INSERT INTO `kritik` (`users_id`, `film_id`, `content`, 
                `point`) 
                VALUES ('$users_id', '$film_id', '$content', '$point');");
    
    header("location:../../user/movie-detail.php?id=$film_id&success=comment");