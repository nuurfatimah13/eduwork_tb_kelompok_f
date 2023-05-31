<?php 
// print_r($_POST);
$nama = $_POST['nama'];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "INSERT INTO `genre` (`id`, `nama`) VALUES (NULL, '$nama')");
header("Location:../../admin/views/genre/genre.php");
// comment-issue: tambahkan status pada header pada setelah nama file, silakan tambahkan kalimat ini ?success=create 
?>