<?php 
    require_once("../../database/db.php");

    if (isset($_POST['signup'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST["password"];
        $epassword = password_hash($password, PASSWORD_BCRYPT);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        $role = "user";

        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['photo']['name'];
        $ukuran = $_FILES['photo']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!in_array($ext,$ekstensi) ) {
            header("Location: ../../signup.php?message=notekstensi");
        }else{
            if($ukuran < 1044070){		
                $photo = $rand.'_'.$filename;
                move_uploaded_file($_FILES['photo']['tmp_name'], '../../assets/img/uploads/'.$rand.'_'.$filename);
                
                $sql = $conn->query("INSERT INTO users (name, email, password, role, age, photo) 
                VALUES ('$name', '$email', '$epassword', '$role', '$age', '$photo')");
    
                header("Location: ../../signin.php?message=saved");
            }else{
                header("Location: ../../signup.php?message=notukuran");
            }
        }
    }