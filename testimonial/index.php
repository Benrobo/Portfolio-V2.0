<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="This is my portfolio homepage.">
        <meta name="description" content="created by: benrobo">
        <meta name="robots" content="index, follow">
        <title>Testimonial</title>
        <link rel="icon" href="../img/profile/avatar.jpeg">
        <!-- custom css file -->
        <link rel="stylesheet" href="../css/form.css" />
    
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
        <h3>Testimonial Form</h3>
        <p>I deeply appreciate your feedback based on my past works and projects.</p>
    </div>
    <div class="container">
        <div class="login-cont">
           <form action="testimonial.php" method="post" class="form-group">
               <h5>Leave a feedback</h5>
               <?php if(isset($_GET['err'])){?>
                    <div class="alert alert-danger"><?php echo $_GET['err'] ?></div>
                <?php }else if(isset($_GET['succ'])){?>
                    <div class="alert alert-success"><?php echo $_GET['succ'] ?></div>
                    <?php 
                        header("Refresh:2; url=../index.php");
                    ?>
                <?php }?>
               <label>Full Name</label>
               <input type="text" name="username" class="form-control mt-1">
               <label>Profession</label>
               <input type="text" name="profession" class="form-control mt-1">
               <label>Ratings</label>
               <select name="ratings" id="" class="form-control">
                   <option value="">Ratings</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
               </select>
               <label>Comments</label>
               <textarea name="comment" cols="30" rows="5" class="form-control mt-1"></textarea>
               <div class="footer mt-2">
                    <input type="submit" value="Send Feedback" name="submit" class="btn btn-primary">
                    <a href="../" class="btn btn-danger">Cancel</a>
               </div>
           </form> 
        </div>
    </div>

</body>
</html>