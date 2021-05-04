<?php 

require("../admin-dash/logic/dbh/db.php");

if(isset($_POST['submit'])){
    // directory

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $Profession = mysqli_real_escape_string($conn, $_POST['profession']);
    $ratings = mysqli_real_escape_string($conn, $_POST['ratings']);
    $Comments = mysqli_real_escape_string($conn, $_POST['comment']);
    
    
    // print_r($img);die;
    //    check if forms are empty
    $err = "";
    $succ = "";

    if(empty($username) || empty($Profession) || empty($ratings) || empty($Comments)){
        $err .= "Fields cannot be empty";
        header("location: index.php?err=$err");
        die;
    }
    else {
        $query = mysqli_query($conn, "INSERT INTO feedbacks(username, professions, ratings, comments) VALUES('$username','$Profession','$ratings','$Comments')");

        if($query){
            $succ .= "Thank you for your feedback.";
            header("location: index.php?succ=$succ");
            die;
        }else{
            $err .= "Something went wrong , try  later";
            header("location: index.php?err=$err");
            die;
        }
    }
    
}
else{
    header("location: index.php");
    die;
}



?>