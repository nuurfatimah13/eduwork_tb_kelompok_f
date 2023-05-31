<?php
include "../../database/db.php";
if($_POST['users_id']==0 || $_POST['film_id']==0 || $_POST['content']=="" || $_POST['point']==0){
    header("Location:../../admin/views/kritik/create-ktk.php?message=empty");
}else{
if(isset($_POST['submit'])){
    $id_user = $_POST['users_id'];
    $id_film = $_POST['film_id'];
    $content = $_POST['content'];
    $point = $_POST['point'];
    $query = $conn->query("INSERT INTO kritik VALUES (NULL, '$id_user', '$id_film', '$content', '$point')");
    if($query){
        header("Location:../../admin/views/kritik/kritik.php?success=create");
    }
}
}
?>