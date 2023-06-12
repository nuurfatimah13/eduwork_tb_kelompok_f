<?php
include "../../database/db.php";
if($_POST['name']=="" || $_POST['email']=="" || $_POST['password']=="" || $_POST['bio']=="" || $_POST['age']==0 || $_POST['address']==""){
    header("Location:../../admin/views/user/create-usr.php?message=empty");
}else{
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $bio = $_POST['bio'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['image']['name'][0];
    $ukuran = $_FILES['image']['size'][0];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        header("Location:../../admin/views/user/user.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $image = $rand.'_'.$filename;
            move_uploaded_file($_FILES['image']['tmp_name'][0], '../../assets/img/uploads/'.$rand.'_'.$filename);
            $query = mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$name', '$email', '$password','$age','$bio','$address','$image')");
            header("Location:../../admin/views/user/user.php?success=create");
        }else{
            header("Location:../../admin/views/user/user.php?alert=gagal_ukuran");
        }
    }
    if($query){
        header("Location:../../admin/views/user/user.php?success=create");
    }
}
}
?>