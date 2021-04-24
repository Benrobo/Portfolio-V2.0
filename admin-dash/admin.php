<?php 

require("logic/dbh/db.php");

$conn = connectDb();

if(isset($_COOKIE['EML']) && isset($_COOKIE['UPWD'])){
  echo "CSDCSDCDC";
}else{
  echo "sdcsdcscsdc";
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
        <div class="main-info">
          <div class="img-cont">
            <div class="img"></div>
          </div>
          <div class="info">
            <h6>Alumona Benaiah</h6>
            <small>Username: <i></i><span class="username">Benrobo</span></i></small>
            <br>
            <small>Password: <i><span class="pwd">xxxxxxxx</span></i></small>
            <br>
            <br>
            <div class="actions">
              <button class="btn btn-primary modal-btn" data-toggle="modal" data-target="#squarespaceModal">Edit Info</button>
            </div>
          </div>
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
          <form action="" class="form-group">
            <div class="body">
              <label>Image</label>
              <input type="file" name="img">
              <br>
              <label>Username</label>
              <input type="text" class="form-control mt-1">
              <label>Password</label>
              <input type="password" class="form-control mt-1">
            </div>
            <div class="footer mt-2">
              <input type="submit" class="btn btn-primary">
              <input type="reset" class="btn btn-danger">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php require("inc/footer.php");?>