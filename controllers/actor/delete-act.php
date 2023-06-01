<?php 
$id = $_GET['id'];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "DELETE FROM `cast` WHERE id='$id'");
header("Location:../../admin/views/actor/actor.php?success=update");
?>