<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// print_r($_POST);
if(isset($_POST['submit'])){
    $file=$_FILES['file']['name'];
    $asal=$_FILES['file']['tmp_name'];
    $folder='../../../../assets/img/film/'; // pastikan folder /smartphone/image/ ada.

    $judul = $_POST['judul'];
    $genre = $_POST['genre_id'];
    $ringkasan = $_POST['ringkasan'];
    $tahun = $_POST['tahun'];

    move_uploaded_file($asal, $folder.$file);

    include_once("../../database/db.php");
    $result = mysqli_query($conn, "INSERT into film (id, poster, judul, genre_id, ringkasan, tahun) VALUES
        (NULL, '$file', '$judul', '$genre', '$ringkasan', '$tahun');");
    header('location:../../admin/views/film/film.php?success=update');
  }
?>
