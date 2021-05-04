<?php 
require("dbh/db.php");
if(isset($_GET['uuid']) && isset($_GET['type'])){
    #check if uuid exist in database
    $uuid = mysqli_real_escape_string($conn, $_GET['uuid']);
    $query = mysqli_query($conn, " SELECT * FROM feedbacks WHERE id='$uuid'");
    $count = mysqli_num_rows($query);

    if($count > 0){
        $query = mysqli_query($conn, "DELETE FROM feedbacks WHERE id='$uuid'");
        if($query){
            $success = "Successfully DELETED Feedback";
            header("location: ../index.php?success_profile=$success");
            die;
        }else{
            $err = "Feedback could not be Deleted, try later err ".mysqli_error($conn);
            header("location: ../index.php?err_profile=$err");
            die;
        }
    }else{
        header("location: ../index.php");
        die;
    }
}
else{
    header("location: ../index.php");
    die;
}
?>