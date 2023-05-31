<?php
include "../../database/db.php";
    $id = $_GET['id'];
    $query = $conn->query("DELETE FROM kritik WHERE id = $id");
    if($query){
        header("Location:../../admin/views/kritik/kritik.php?success=delete");
    }

?>