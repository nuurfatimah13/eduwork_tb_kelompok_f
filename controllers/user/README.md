## Catatan Folder
  - Format untuk nama file, example: 
    
    ---
        Folder user: 
        file store -> store-usr.php
        file update -> update-usr.php
        file destroy -> destroy-usr.php

  - Example store, jika ada upload image
    ```php
    include_once ("../../database/db.php");

    $name = $_POST['nama'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        header("Location:../../admin/views/template/template.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $image = $rand.'_'.$filename;
            move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/uploads/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO nama_table (name, image) 
                                    VALUES ('$name', '$image')");
            header("Location:../../admin/views/template/template.php?success=create");
        }else{
            header("Location:../../admin/views/template/template.php?alert=gagal_ukuran");
        }
    }
    ```

  - Example update, jika ada upload image
    ```php
    include_once ("../../database/db.php");

    $id = $_GET['id'];

    $name = $_POST['nama'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if (unlink("../../assets/img/uploads/$previous")) {
        if (!in_array($ext,$ekstensi) ) {
            header("Location:../../admin/views/template/template.php?alert=gagal_ekstensi");
        } else {
            if ($ukuran < 1044070) {		
                $image = $rand.'_'.$filename;
                move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/uploads/'.$rand.'_'.$filename);
                mysqli_query($conn, "UPDATE nama_table SET name = '$name', image = '$image'  
                    WHERE id = '$id';");
                header("Location:../../admin/views/template/template.php?success=update");
            } else {
                header("Location:../../admin/views/template/template.php?alert=gagal_ukuran");
            }
        }
    }
    ```

  - Example destroy, jika ada upload image
    ```php
    include_once ("../../database/db.php");

    $id = $_GET['id'];

    $img = "SELECT image FROM nama_table WHERE id = '$id';";
    $result = $conn->query($img);
    $row = $result->fetch_assoc();
    unlink("../../assets/img/uploads/$row[image]");

    $result = mysqli_query($conn, "DELETE FROM nama_table WHERE id = '$id';");

    header("Location:../../admin/views/template/template.php?success=delete");
    ```

  - Pada function header, kata ***template*** diganti dengan nama folder yang bersangkutan. Example:
    
    ---
    header("Location:../../admin/views/template/template.php?success=delete"); 

    diganti jadi, 

    header("Location:../../admin/views/user/user.php?success=delete");

***Happy Coding (^_^)***