<?php 
$id = $_GET['id'];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "DELETE FROM `genre` WHERE id='$id'");
header("Location:../../admin/views/genre/genre.php?success=update");
?>