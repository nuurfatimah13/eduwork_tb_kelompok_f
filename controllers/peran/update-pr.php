<?php 
// print_r($_POST);

$id = $_POST['id'];
$film = $_POST['film_id'];
$cast = $_POST['cast_id'];
$peran = $_POST['peran'];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "UPDATE peran SET film_id='$film', cast_id='$cast', peran='$peran' WHERE peran.id='$id'");
header("Location:../../admin/views/peran/peran.php?success=update");
?>