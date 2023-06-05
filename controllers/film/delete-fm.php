<?php
$id = $_GET['id'];
$id_gambar = $_GET["id_gambar"];
$poster = $_GET["poster"];

unlink("../../../assets/img/uploads" . $poster);

include_once("../../database/db.php");
$result = mysqli_query($conn, "DELETE FROM `film` WHERE `film`.`id` = '$id'");
header("Location:../../admin/views/film/film.php?success=delete");
?>