<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// print_r($_POST);

    $judul = $_POST['judul'];
    $genre = $_POST['genre_id'];
    $trailer = $_POST['trailer'];
    $ringkasan = $_POST['ringkasan'];
    $tahun = $_POST['tahun'];

    $poster = $_FILES['poster']['name'][0];
    $poster_type = $_FILES['poster']['type'][0];
    $temp = $_FILES['poster']['tmp_name'][0];
    $simpan = "../../assets/img/film/".$poster;

    move_uploaded_file($temp, $simpan);

    include_once("../../database/db.php");
    $result = mysqli_query($conn, "INSERT into film (id, poster, judul, genre_id, trailer, ringkasan, tahun) VALUES
        (NULL, '$poster', '$judul', '$genre', '$trailer', '$ringkasan', '$tahun');");
    header('location:../../admin/views/film/film.php?success=create');
?>


