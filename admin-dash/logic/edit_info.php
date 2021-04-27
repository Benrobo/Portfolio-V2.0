<?php 

require("dbh/db.php");

if(isset($_POST['edit_btn'])){
    // directory
    $upload = "../profile_admin/";

    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $img = $_FILES['img']['name'];
    $info = pathinfo($img);
    $img_ext = $info['extension'];
    $target = $upload.$info['basename'];
    $img_type = ['jpg', "png", "jpeg","JPEG","PNG","JPG"];
    
    // print_r($img);die;
    //    check if forms are empty
    $err = "";
    $success = "";

    if(empty($name) || empty($email) || empty($pwd)){
        $err .= "Fields cannot be empty";
        header("location: ../admin.php?err_profile=$err");
        die;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err .= "Email given is invalid";
        header("location: ../admin.php?err_profile=$err");
        die;
    }
    else if(strlen($pwd) < 6){
        $err .= "Password lenght must be >= 6";
        header("location: ../admin.php?err_profile=$err");
        die;
    }
    else if (!in_array($img_ext, $img_type)){
        $err .= "Image filetype is invalid, valid filetype (jpeg, jpg, png)";
        header("location: ../admin.php?err_profile=$err");
        die;
    }
    else {
        $newpwd = password_hash($pwd,  PASSWORD_BCRYPT);
        #upload file to folder
        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
            #update database admin info 
            $query = mysqli_query($conn, "UPDATE admin_profile SET username='$name', email='$email', img='$img', pwd='$newpwd'");
            if($query){
                $success .= "Successfully updated your profile";
                header("location: ../admin.php?success_profile=$success");
                die;
            }else{
                $err .= "Profile could not be updated, try later err ".mysqli_error($conn);
                header("location: ../admin.php?err_profile=$err");
                die;
            }
        }

    }
    
}
else{
    header("location: ../index.php");
    die;
}



?>