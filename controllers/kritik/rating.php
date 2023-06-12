<?php
// print_r($_POST);

$id = $_GET['id'];
$users_id = $_POST['users_id'];
$film_id = $_POST['film_id'];
$content = $_POST['content'];
$point = $_POST['point'];

include "../../database/db.php";
$result = mysqli_query($conn, "INSERT INTO `kritik` (`id`, `users_id`, `film_id`, `content`, `point`) VALUES (NULL, '$users_id', '$film_id', '$content', '$point');");

header('location:../../movie-details.php?success=comment');
?>