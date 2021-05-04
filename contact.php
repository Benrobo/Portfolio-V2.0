<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
    //Instantiation and passing `true` enables exceptions
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    
    $mail = new PHPMailer(true);

    //Server settings
    $to = "youremail address";
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    // $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 25;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "youremail address";
    $mail->isHTML(true); 
    $mail->Password = "your address";
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
            <style>
                body{
                    font-family: Roboto;
                }
                .card{
                    background: #fff !important;
                    width: 300px;
                    margin:50px auto;
                    box-shadow:0px 0px 3px #77;
                    padding:12px;
                    border-radius:2px;
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
        die;
    }else{
        echo "error";
        die;
    }
}
else{
    echo "Not allowd";
    header("location: index.php");
    
}



?>