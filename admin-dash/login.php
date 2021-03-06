<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="This is my portfolio homepage.">
        <meta name="description" content="created by: benrobo">
        <meta name="robots" content="index, follow">
        <title>Login</title>
        <link rel="icon" href="../img/profile/avatar.jpeg">
        <!-- custom css file -->
        <link rel="stylesheet" href="../css/login.css" />
    
        <!-- bootstrap css -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!--  responsive-->
        <link rel="stylesheet" href="../css/responsive.css" />
    
        <!--fontawesome icons -->
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        />
        <link
          rel="stylesheet"
          href="path/to/font-awesome/css/font-awesome.min.css"
        />
    
        <!-- icons -->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </head>
<body>
    <div class="header">
        <h3>Welcome Back</h3>
        <p>Kindly login into your account for</p>
    </div>
    <div class="container">
        <div class="login-cont">
            
            <form action="logic/auth.php" method="post" class="form-group">
                <p>Login</p>
                <?php  if(isset($_GET['err'])){?>
                    <div class="alert alert-danger"><?php echo $_GET['err'];?></div>
                <?php }?>
               <br>
               <label>Email</label>
               <input type="email" name="email" class="form-control mt-1">
               <label>Password</label>
               <input type="password" name="password" class="form-control mt-1">
               <br>
               <br>
               <div class="footer">
                    <input type="submit" name="loginbtn" value="Login" class="btn btn-primary">
                    <a href="../" class="btn btn-danger">Cancel</a>
               </div>
           </form> 
        </div>
    </div>
</body>
</html>