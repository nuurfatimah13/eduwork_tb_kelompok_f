<?php 
$id = $_GET['id'];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "DELETE FROM peran WHERE id='$id'");
header("Location:../../admin/views/peran/peran.php?success=delete");
?>