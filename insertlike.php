<?php 
  require("admin-dash/logic/dbh/db.php");

if(isset($_POST['postid'])){
    $postid = $_POST['postid'];
    print_r(gethostbyname("http://localhost/Portfolio-v2.0/readmore.php?pstid=2"));die;
    $query = mysqli_query($conn, "INSERT INTO like_tbl");
}
else{
    header('location: index.php');
    die;
}



?>