<?php 
if(isset($_COOKIE['EML'])){
    $email = $_COOKIE['EML'];
    setcookie("EML", $eml, time()-0, "/");
    header("location: ../login.php");
    die;
}
?>