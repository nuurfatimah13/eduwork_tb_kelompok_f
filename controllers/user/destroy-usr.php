<?php
include "../../database/db.php";
    $id = $_GET['id'];
    $query = $conn->query("DELETE FROM users WHERE id = $id");
    if($query){
        header("Location:../../admin/views/user/user.php?success=delete");
    }

?>