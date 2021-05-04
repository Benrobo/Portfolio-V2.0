<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
    //Instantiation and passing `true` enables exceptions
    $name = $_POST['usernamer'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    echo $msg;die;
    
    $mail = new PHPMailer(true);

    //Server settings
    $to = "alumonabenaiah71@gmail.com";
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "alumonabenaiah71@gmail.com";
    $mail->isHTML(true); 
    $mail->Password = "benrobo-tut71";
    $mail->From = $email;
    $mail->FromName = $name;
    $mail->addAddress($to);
    $mail->Subject = "Contact Form Request";
    $mail->Body = '
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Form</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
            <style>
                body{
                    font-family: "Montserrat", sans-serif;
                }
                .card{
                    background: #fff !important;
                    width: 300px;
                    margin:50px auto;
                }
                .card p{
                    font-size: 12px;
                }
            </style>
        </head>
        <body>
            
            <div class="card">
                <div class="card-header">
                    <h5>Contact Form Request</h5>
                    <small>From: '.$name.'</small>
                </div>
                <div class="card-body">
                    <p>
                        '.$msg.'
                    </p>
                </div>
                <div class="card-footer">
                    <a href="benrobo-port.ml" class="btn btn-primary">Visit Site</a>
                </div>
            </div>
        </body>
    </html>
    ';
    if($mail->send()){
        echo "success";
    }else{
        echo "error ".$mail->ErrorInfo;
    }
}
else{
    echo "Not allowd";
    // header("location: index.php");
    
}



?>