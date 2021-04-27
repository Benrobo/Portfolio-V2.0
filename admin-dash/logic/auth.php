<?php 

require("dbh/db.php");

if(isset($_POST['loginbtn'])){
    
    // authenticate user
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $err = "";

    #check if user exist in db
    $query = mysqli_query($conn, "SELECT * FROM admin_profile WHERE email='$email'");
    $data = mysqli_fetch_assoc($query);
    $hash = $data['pwd'];
    $count = mysqli_num_rows($query);

    if(empty($email) && empty($pwd)){
        $err .= "Fields cannot be empty";
        header("location: ../login.php?err=".str_replace(" ", "-", $err));
        die;
    }
    else if($count === 0){
        $err .= "User with that email doesnt exist";
        header("location: ../login.php?err=".str_replace(" ", "-", $err));
        die;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err .= "Email given is invalid";
        header("location: ../login.php?err=".str_replace(" ", "-", $err));
        die;
    }
    else{
        if(password_verify($pwd, $hash)){
            // register cookies
            setcookie("EML", $email, time()+86400*30, "/");
            // setcookie("UPWD", $hash, time()+86400*30, "/");
            header("location: ../index.php");
            die;
        }else{
            header("location: ../login.php?err=".str_replace(" ", "-", "Password given is incorrect"));
            die;
        }
    }

}else{
    header("location: ../../");
    die;
}


?>