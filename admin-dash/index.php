<?php 

require("logic/dbh/db.php");

// print_r($_COOKIE);
if(isset($_COOKIE['EML']) && isset($_COOKIE['UPWD'])){

  $userEmail = $_COOKIE['EML'];
  $query = mysqli_query($conn, "SELECT * FROM admin_profile WHERE email='$userEmail'");
  $num = mysqli_num_rows($query);
  $data = mysqli_fetch_assoc($query);
  // data from db
  $username = $data['username'];
  $email = $data['email'];
  $img = $data['img'];
  // $pwd = str_replace($pwd);
}else{
  header("location: login.php");
  die;
}

?>
<?php require("inc/head.php");?>
  <div class="amin-col">
    
  <?php require("inc/nav.php");?>

    <div class="main-cont">
      <div class="card-cont">
        <div class="card">
          <div class="clear-fix">
            <div class="float-left icon">
              <ion-icon name="stats-chart-outline"></ion-icon>
            </div>
            <div class="float-right text">
              <label>Posts</label>
              <br>
              <h3>43</h3>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="clear-fix">
            <div class="float-left icon">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
            <div class="float-right text">
              <label>Views</label>
              <br>
              <h3>43</h3>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="clear-fix">
            <div class="float-left icon">
              <ion-icon name="happy-outline"></ion-icon>
            </div>
            <div class="float-right text">
              <label>Likes</label>
              <br>
              <h3>43</h3>
            </div>
          </div>
        </div>
      </div>

      <br>
      <br>
      <div class="admin-info">
      <?php if(isset($_GET['err_profile'])){?>
        <div class="alert alert-danger"><?php echo mysqli_real_escape_string($conn, $_GET['err_profile'])?></div>
      <?php }else if(isset($_GET['success_profile'])){?>
        <div class="alert alert-success"><?php echo mysqli_real_escape_string($conn, $_GET['success_profile'])?></div>
      <?php }?>
        <div class="main-info">
        <?php if($num > 0){?>
          <?php ?>
          <div class="img-cont">
            <div class="img" style="background:url('profile_admin/<?php echo $img;?>'); background-size:cover; background-position:center;"></div>
          </div>
          <div class="info">
            <h6><?php echo $username;?></h6>
            <small>Username: <i></i><span class="username"><?php echo $username;?></span></i></small>
            <br>
            <!-- <small>Password: <i><span class="pwd">xxxxxxxx</span></i></small> -->
            <br>
            <br>
            <div class="actions">
              <button class="btn btn-primary modal-btn" data-toggle="modal" data-target="#squarespaceModal">Edit Info</button>
            </div>
          </div>
        <?php }?>
        </div>
      </div>
      <br>
      <br>
      <!--add skils images -->
      <div class="skill-card">
        <div class="cont">
          <h3>Add Skills Images</h3>
          <br>
          <form action="" class="form-group form-online">
            <input type="url" name="url" class="form-control" placeholder="url of image">
            <input type="submit" name="submit" class="btn btn-primary btn-block mt-1">
          </form>
        </div>
      </div>
      <br>
      <!-- posts table -->
      <div class="post-tables">
        <h3>Portfolio Data</h3>
        <div class="table-cont">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Chat Application</td>
                <td>12, April 2020</td>
                <td>
                  <div class="actions">
                    <a href="" class="text-success"><small>
                        <ion-icon name="pencil-outline"></ion-icon>
                      </small></a>
                    <a href="" class="text-danger"><small>
                        <ion-icon name="trash-outline"></ion-icon>
                      </small></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <br>

      <!-- user info modal -->
      <!-- line modal -->
      <div class="modal-cont">
        <div class="modal-card">
          <div class="head">
            <p>Edit Userinfo</p>
            <span class="btn btn-danger closebtn">&times;</span>
          </div>
          <br>
          <form action="logic/edit_info.php" method="POST" enctype="multipart/form-data" class="form-group">
            <div class="body">
              <label>Image</label>
              <input type="file" name="img">
              <br>
              <label>Username</label>
              <input type="text" name="username" class="form-control mt-1">
              <br>
              <label>Email</label>
              <input type="email" name="email" class="form-control mt-1">
              <label>Password</label>
              <input type="password" name="pwd" class="form-control mt-1">
            </div>
            <div class="footer mt-2">
              <input type="submit" name="edit_btn" class="btn btn-primary">
              <input type="reset" class="btn btn-danger">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php require("inc/footer.php");?>


