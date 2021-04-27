<?php 
require("logic/dbh/db.php");

if(isset($_COOKIE['EML'])){
  $eml = $_COOKIE['EML'];
  $query = mysqli_query($conn, "SELECT * FROM admin_profile WHERE email='$eml'");
  $data = mysqli_fetch_assoc($query);
}else{
  header("location:  login.php");
  die;
}
?>

<?php require_once("inc/head.php");?>

<body>
  <div class="amin-col">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler burger" type="button" data-bs-toggle="collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addpost.html">Add Post</a>
            </li>
            <li class="">
              <a class="btn-toggle btn btn-primary" href="#">
                More
              </a>
              <ul class="dropdown-menus">
                <li class="p-4">benrobo</li>
                <li><a class="ml-4 btn btn-danger" href="logic/logout.php">Logout</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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
      <?php if(isset($_GET['err_profile'])){?>
        <div class="alert alert-danger"><?php echo $_GET['err_profile'];?></div>
        <?php }else if(isset($_GET['success_profile'])){?>

        <div class="alert alert-success"><?php echo $_GET['success_profile'];?></div>
        <?php }?>
      <div class="admin-info">
        <div class="main-info">
          <div class="img-cont">
            <div class="img" style="background:url('profile_admin/<?php echo $data['img']; ?>'); background-size:cover; background-position:center;"></div>
          </div>
          <div class="info">
            <h6><?php echo $data['username']; ?></h6>
            <small>Username: <i></i><span class="username"><?php echo $data['username']; ?></span></i></small>
            <br>
            <!-- <small>Password: <i><span class="pwd">xxxxxxxx</span></i></small> -->
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
          <form action="logic/edit_info.php" method="POST" enctype="multipart/form-data" class="form-group">
            <div class="body">
              <label>Image</label>
              <input type="file" name="img">
              <br>
              <label>Username</label>
              <input type="text" name="username" class="form-control mt-1">
              <br>
              <label>Email</label>
              <input type="Email" name="email" class="form-control mt-1">
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

  <!-- JavaScript Bundle with Popper -->
  <script src="../js/jquery.3.4.1.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    function handleModal(){
      let btnmodal = document.querySelector(".modal-btn");
      let closeModal = document.querySelector(".closebtn");
      let modalcont = document.querySelector(".modal-cont");

      btnmodal.onclick = ()=>{
        modalcont.style.display = "flex";
      }
      closeModal.onclick = ()=>{
        modalcont.style.display = "none";
      }
    }
    handleModal()

    function navbar(){
      let burger = document.querySelector(".burger");
      let navbar = document.querySelector(".navbar");
      let isclicked = false;

      burger.addEventListener("click", ()=>{
        if(isclicked == false){
          navbar.style.height = "170px";
          isclicked = true;
        }else{
          navbar.style.height = "50px";
          isclicked = false;
        }
      })

      
    }
    navbar()

    function morebtn(){
      let isclicked = false;
      let morebtn = document.querySelector(".btn-toggle");
      let dropdown = document.querySelector(".dropdown-menus");

      morebtn.addEventListener("click", ()=>{
        if(isclicked == false){
          dropdown.style.display = "block";
          isclicked = true;
        }else{
          dropdown.style.display = "none";
          isclicked = false;
        }
      })
    }
    morebtn()
  </script>
</body>

<?php require_once("inc/footer.php");?>
