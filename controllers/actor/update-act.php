<?php 
$id = $_GET['id'];

$nama = $_POST['nama'];
$umur = $_POST["umur"];
$bio = $_POST["bio"];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "UPDATE `cast` SET nama='$nama', umur='$umur', bio='$bio' WHERE id='$id'");
header("Location:../../admin/views/actor/actor.php?success=update");
?>