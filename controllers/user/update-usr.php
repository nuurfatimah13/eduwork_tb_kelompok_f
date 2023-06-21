<?php
    include "../../database/db.php";

    $id=$_GET['id'];

    if ($_POST['name']=="" || $_POST['email']=="" || $_POST['password']=="" || $_POST['bio']=="" || $_POST['age']==0 || 
        $_POST['address']=="" || $_POST['role']==""){
        header("Location:../../admin/views/user/update-usr.php?message=empty");
    } else {
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $bio = $_POST['bio'];
            $age = $_POST['age'];
            $role = $_POST['role'];
            $address = $_POST['address'];

            // password
            $updpassword = $_POST["password"];
            $p = $conn->query("SELECT * FROM users WHERE id=$id;");
            $pp = mysqli_fetch_array($p);
            $pass1 = $pp['password'];

            // image
            $previous = $_POST['previous'];
            $rand = rand();
            $ekstensi =  array('png','jpg','jpeg','gif');
            $filename = $_FILES['image']['name'][0];
            $ukuran = $_FILES['image']['size'][0];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (password_verify($updpassword, $pass1)) {
                if (unlink("../../assets/img/uploads/$previous")) {
                    if(!in_array($ext,$ekstensi) ) {
                        header("Location:../../admin/views/user/user.php?alert=gagal_ekstensi");
                    }else{
                        if($ukuran < 1044070){		
                            $image = $rand.'_'.$filename;
                            move_uploaded_file($_FILES['image']['tmp_name'][0], '../../assets/img/uploads/'.$rand.'_'.$filename);
                            $query = mysqli_query($conn,"UPDATE users SET name='$name', email='$email', role=$role, age=$age, bio='$bio', address='$address', photo='$image' WHERE id=$id");
                            header("Location:../../admin/views/user/user.php?success=update");
                        }else{
                            header("Location:../../admin/views/user/user.php?alert=gagal_ukuran");
                        }
                    }
                }
            } else if ($updpassword == $pass1) {
                if (unlink("../../assets/img/uploads/$previous")) {
                    if(!in_array($ext,$ekstensi) ) {
                        header("Location:../../admin/views/user/user.php?alert=gagal_ekstensi");
                    }else{
                        if($ukuran < 1044070){		
                            $image = $rand.'_'.$filename;
                            move_uploaded_file($_FILES['image']['tmp_name'][0], '../../assets/img/uploads/'.$rand.'_'.$filename);
                            $query = mysqli_query($conn,"UPDATE users SET name='$name', email='$email', role=$role, age=$age, bio='$bio', address='$address', photo='$image' WHERE id=$id");
                            header("Location:../../admin/views/user/user.php?success=update");
                        }else{
                            header("Location:../../admin/views/user/user.php?alert=gagal_ukuran");
                        }
                    }
                }
            } else {
                $epassword = password_hash($updpassword, PASSWORD_BCRYPT);
                if (unlink("../../assets/img/uploads/$previous")) {
                    if(!in_array($ext,$ekstensi) ) {
                        header("Location:../../admin/views/user/user.php?alert=gagal_ekstensi");
                    }else{
                        if($ukuran < 1044070){		
                            $image = $rand.'_'.$filename;
                            move_uploaded_file($_FILES['image']['tmp_name'][0], '../../assets/img/uploads/'.$rand.'_'.$filename);
                            $query = mysqli_query($conn,"UPDATE users SET name='$name', email='$email', password='$epassword', role=$role, age=$age, bio='$bio', address='$address', photo='$image' WHERE id=$id");
                            header("Location:../../admin/views/user/user.php?success=update");
                        }else{
                            header("Location:../../admin/views/user/user.php?alert=gagal_ukuran");
                        }
                    }
                }
            }
            
            if($query){
                header("Location:../../admin/views/user/user.php?success=update");
            }
        }
    }
?>