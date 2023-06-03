<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// print_r($_POST);

    $judul = $_POST['judul'];
    $genre = $_POST['genre_id'];
    $ringkasan = $_POST['ringkasan'];
    $tahun = $_POST['tahun'];

    $poster = $_FILES['poster']['name'];
    $poster_type = $_FILES['poster']['type'];
    $temp = $_FILES['poster']['tmp_name'];
    $simpan = "../../assets/img/film".$file;

    move_uploaded_file($temp, $simpan);

    include_once("../../database/db.php");
    $result = mysqli_query($conn, "INSERT into film (id, poster, judul, genre_id, ringkasan, tahun) VALUES
        (NULL, '$poster', '$judul', '$genre', '$ringkasan', '$tahun');");
    header('location:../../admin/views/film/film.php?success=update');
?>
