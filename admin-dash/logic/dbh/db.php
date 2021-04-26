<?php 
require_once("constants.php");
    $conn = mysqli_connect(HOST, USER, PWD, DB);
    
    $conn ? "" : "Error occured ".mysqli_error($conn);


?>