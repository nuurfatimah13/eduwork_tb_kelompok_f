<?php
$id = $_POST['id'];
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
$result = mysqli_query($conn, "UPDATE film SET poster='$poster', judul='$judul', genre_id='$genre', ringkasan='$ringkasan', tahun='$tahun' WHERE film.id='$id'");
header('location:../../admin/views/film/film.php?success=update');
?>