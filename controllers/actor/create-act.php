<?php 
$nama = $_POST['nama'];
$umur = $_POST["umur"];
$bio = $_POST["bio"];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "INSERT INTO `cast` (`nama`, `umur` ,`bio`) VALUES ('$nama', '$umur', '$bio')");
header("Location:../../admin/views/actor/actor.php?success=update");
?>