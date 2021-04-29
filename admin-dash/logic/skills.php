<?php 

// https://img.icons8.com/color/30/000000/javascript.png

require("dbh/db.php");

if(isset($_POST['submit'])){
    $url = mysqli_real_escape_string($conn, $_POST['url']);

    if(empty($url)){
        $err = "Url field cannot be empty";
        header("location: ../index.php?err_img=$err");
        die;
    }
    else if(!filter_var($url, FILTER_VALIDATE_URL)){
        $err = "Url given is invalid";
        header("location: ../index.php?err_img=$err");
        die;
    }
    else{
        $query = mysqli_query($conn, "INSERT INTO skills_tbl(img) VALUES('$url')");
        if($query){
            $succ = "Img inserted succesfully";
            header("location: ../index.php?succ_img=$succ");
            die;
        }else{
            $err = "Img could not be inserted ".mysqli_error($conn);
            header("location: ../index.php?err_img=$err");
            die;
        }
    }
}
else{
    header("location: ../index.php");
    die;
}
?>