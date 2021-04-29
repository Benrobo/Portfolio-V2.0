<?php 

require("dbh/db.php");

if(isset($_POST['submit'])){
    // directory
    $upload = ".../img/portfolio_img/";

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $img = $_FILES['img']['name'];
    $info = pathinfo($img);
    $img_ext = $info['extension'];
    $target = $upload.$info['basename'];
    $img_type = ['jpg', "png", "jpeg","JPEG","PNG","JPG"];
    
    // print_r($img);die;
    //    check if forms are empty
    $err = "";
    $success = "";

    if(empty($title) || empty($body) || empty($img)){
        $err .= "Fields cannot be empty";
        header("location: ../addpost.php?err_upload=$err");
        die;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err .= "Email given is invalid";
        header("location: ../addpost.php?err_upload=$err");
        die;
    }
    else if(strlen($pwd) < 6){
        $err .= "Password lenght must be >= 6";
        header("location: ../addpost.php?err_upload=$err");
        die;
    }
    else if (!in_array($img_ext, $img_type)){
        $err .= "Image filetype is invalid, valid filetype (jpeg, jpg, png)";
        header("location: ../addpost.php?err_upload=$err");
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
                header("location: ../addpost.php?success_upload=$success");
                die;
            }else{
                $err .= "Profile could not be updated, try later err ".mysqli_error($conn);
                header("location: ../addpost.php?err_upload=$err");
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