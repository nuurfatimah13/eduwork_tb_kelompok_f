<?php 
$id = $_GET['id'];

$nama = $_POST['nama'];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "UPDATE `genre` SET nama='$nama' WHERE id='$id'");
header("Location:../../admin/views/genre/genre.php");
// comment-issue: tambahkan status pada header pada setelah nama file, silakan tambahkan kalimat ini ?success=update 
?>