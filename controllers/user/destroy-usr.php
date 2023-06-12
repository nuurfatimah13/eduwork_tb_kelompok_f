<?php
    include "../../database/db.php";
    $id = $_GET['id'];
    $img = "SELECT photo FROM users WHERE id = '$id';";
    $result = $conn->query($img);
    $row = $result->fetch_assoc();
    unlink("../../assets/img/uploads/$row[photo]");

    $query = $conn->query("DELETE FROM users WHERE id = $id");
    if($query){
        header("Location:../../admin/views/user/user.php?success=delete");
    }

?>