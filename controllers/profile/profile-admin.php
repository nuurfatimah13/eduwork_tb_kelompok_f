<?php
    include "../../database/db.php";

    $id=$_GET['id'];

    // update photo
    if (isset($_POST['update-photo'])) {
        
        $previous = $_POST['previous'];
    
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['image']['name'][0];
        $ukuran = $_FILES['image']['size'][0];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
        if (unlink("../../assets/img/uploads/$previous")) {
            if(!in_array($ext,$ekstensi) ) {
                header("Location:../../admin/views/profile_form.php?id=$id&alert=gagal_ekstensi");
            }else{
                if($ukuran < 1044070){		
                    $image = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['image']['tmp_name'][0], '../../assets/img/uploads/'.$rand.'_'.$filename);
                    $query = mysqli_query($conn,"UPDATE users SET photo='$image' WHERE id=$id");
                    header("Location:../../admin/views/profile.php?id=$id&success=update");
                }else{
                    header("Location:../../admin/views/profile_form.php?id=$id&alert=gagal_ukuran");
                }
            }
        }
    }

    // update profile
    if(isset($_POST['update-profile'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $bio = $_POST['bio'];
        $address = $_POST['address'];

        $query = mysqli_query($conn,"UPDATE users SET name='$name', email='$email', age=$age, bio='$bio', 
            address='$address' WHERE id=$id");
        header("Location:../../admin/views/profile.php?id=$id&success=update");
    } 

    // manage password
    if (isset($_POST['update-password'])) {

        $updpassword = $_POST['password'];
        $p = $conn->query("SELECT * FROM users WHERE id=$id;");
        $pp = mysqli_fetch_array($p);
        $pass1 = $pp['password'];

        if (password_verify($updpassword, $pass1)) {
            header("Location: ../../admin/views/profile.php?id=$id");
        } else if ($updpassword == $pass1) {
            header("Location: ../../admin/views/profile.php?id=$id");
        } else {
            $epassword = password_hash($updpassword, PASSWORD_BCRYPT);
            $updpwd = $conn->query("UPDATE users SET password='$epassword' 
                WHERE id=$id;");
    
            header("Location: ../../admin/views/profile.php?id=$id&success=update");
        }
    }