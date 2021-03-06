<?php 

require("dbh/db.php");

if(isset($_POST['submit'])){
    #check if uuid exist in database
    $uuid = mysqli_real_escape_string($conn, $_GET['uuid']);
    $query = mysqli_query($conn, " SELECT * FROM portfolio_tbl WHERE id='$uuid'");
    $count = mysqli_num_rows($query);

    // directory
    $upload = "../../img/portfolio_img/";

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
        header("location: ../addpost.php?err_edit=$err");
        die;
    }
    else if (!in_array($img_ext, $img_type)){
        $err .= "Image filetype is invalid, valid filetype (jpeg, jpg, png)";
        header("location: ../addpost.php?err_edit=$err");
        die;
    }
    else {
        #upload file to folder
        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
            #update database admin info 
            $query = mysqli_query($conn, "UPDATE portfolio_tbl 
            SET title='$title', img='$img',contents='$body' WHERE id='$uuid'");
            if($query){
                $success .= "Successfully updated posts";
                header("location: ../addpost.php?uuid=$uuid&success_edit=$success");
                die;
            }else{
                $err .= "Post could not be added, try later ".mysqli_error($conn);
                header("location: ../addpost.php?err_edit=$err");
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