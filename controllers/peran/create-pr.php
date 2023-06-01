<?php 
// print_r($_POST);
$film_id = $_POST['film_id'];
$cast_id = $_POST['cast_id'];
$peran = $_POST['nama'];

include_once ("../../database/db.php");
$result = mysqli_query($conn, "INSERT INTO peran (`id`, `film_id`, `cast_id`, `nama`) VALUES (NULL, '$film_id', '$cast_id', '$peran')");
header("Location:../../admin/views/peran/peran.php?success=update");
?>