<?php 
require("../const/constants.php");

function connectDb(){
    $conn = mysqli_connect(HOST, USER, PWD, DB);
    
    $conn ? "" : "Error occured ".mysqli_error($conn);
    return $conn;
}


?>