<?php 

require("admin-dash/logic/dbh/db.php");

$query = mysqli_query($conn, "SELECT * FROM portfolio_tbl");

$num = mysqli_num_rows($query);
?>
<?php require_once('inc/port-head.php');?>

    <?php require_once('inc/top-nav.php');?>

    <div class="container-column">
      <!-- sidebar column -->
      <div class="sidebar-column">
        <!-- user info container -->
        <div class="first-top-box">
          <div class="top-head">
            <a href="#" class="close-sidebar-btn"
              ><ion-icon name="close-circle"></ion-icon
            ></a>
          </div>
          <div
            class="user-img"
            style="
              background: url('./img/profile/avatar.jpeg');
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
            "
          ></div>

          <!-- active status -->
          <a href="#" class="active-status"></a>
          <div class="username">John Doe</div>
          <br />
          <span class="user-skills text-center">Software Developer | Graphic Designer | Youtuber |</span>
          <br />
          <div class="cv-cont">
              <a href="#cv"
                >Download cv
                <ion-icon class="ml-1" name="cloud-download-outline"></ion-icon
              ></a>
          </div>
        </div>

        <!-- sidebar main -->
        <div class="sidebar-main">
          <div class="content">
            <!-- my info -->
            <div class="myinfo">
              <div class="clear-fix">
                <div class="float-left">
                  <p><b>Phone no: </b></p>
                  <p><b>City: </b></p>
                  <p><b>Country: </b></p>
                </div>
                <div class="float-right">
                  <p>07084701066</p>
                  <p>Lagos</p>
                  <p>Nigeria</p>
                </div>
              </div>
            </div>
            <!-- skill content -->
            <small class="p-1 m-2">My Skills</small>
            <div class="skill-cont">
              <br />
              <img
                src="https://img.icons8.com/color/30/000000/javascript.png"
              />

              <img src="https://img.icons8.com/color/35/000000/nodejs.png" />

              <img src="https://img.icons8.com/color/30/000000/sql.png" />

              <img
                src="https://img.icons8.com/color/48/000000/java-coffee-cup-logo.png"
              />

              <img src="https://img.icons8.com/color/30/000000/html-5.png" />

              <img
                src="https://img.icons8.com/officel/30/000000/php-logo.png"
              />

              <img src="https://img.icons8.com/color/30/000000/git.png" />

              <img src="https://img.icons8.com/color/30/000000/bootstrap.png" />

              <img
                src="https://img.icons8.com/ios-filled/30/0694f3/jquery.png"
              />

              <img src="https://img.icons8.com/ios/30/0694f3/mysql.png" />
            </div>
            <br />
            <br />
          </div>
          <!-- sidebar footer -->
          <div class="sidebar-footer">
            <div class="socials">
              <a
                href="https://www.facebook.com/benaiah.alumona.5"
                target="_blank"
                ><ion-icon name="logo-facebook"></ion-icon
              ></a>

              <a
                href="https://www.youtube.com/channel/UCVzQyQe-OxsBpQY1jA2xo3w"
                target="_blank"
                ><ion-icon name="logo-youtube"></ion-icon
              ></a>

              <a href="https://github.com/Benrobo/" target="_blank"
                ><ion-icon name="logo-github"></ion-icon
              ></a>

              <a href="https://www.instagram.com/_benrobo/" target="_blank"
                ><ion-icon name="logo-instagram"></ion-icon
              ></a>

              <a href="https://www.twitter.com/AlumonaBenaiah/" target="_blank"
                ><ion-icon name="logo-twitter"></ion-icon
              ></a>
            </div>
          </div>
        </div>
      </div>

      <!-- main column -->
      <main class="main-column">
        <!-- main area portfolio -->
        <section class="port-portfolio-area mt-1 mb-2 p-4">
          <!-- portfolio main -->
          <div class="portfolio-main mt-5">
            <h3 class="ml-3" style="font-weight: 600">Portfolios</h3>
            <div class="portfolio-cont">
              <?php if($num > 0){?>
                <?php while($data = mysqli_fetch_assoc($query)){?>
                  <?php 
                    $dbdate = strtotime($data['reg_date']);  
                    $info = getdate(date($dbdate));
                    $mth = $info['month'];
                    $day = $info['wday'];
                    $yr = $info['year'];

                    $formated = $day.", ".$mth." ".$yr;
                  ?>
                  <div class="box">
                    <div class="img" style="background:url('img/portfolio_img/<?php echo $data['img']; ?>'); background-size:cover; background-position:center;"></div>

                    <div class="date-cont">
                      <small class="date"><?php echo $formated; ?></small>
                    </div>

                    <div class="title-cont">
                      <p class="title"><?php echo $data['title']; ?></p>
                    </div>
                    <div class="footer">
                      <a href="readmore.php?pstid=<?php echo $data['id']; ?>" class="readmore">READ MORE ></a>
                    </div>
                  </div>
              <?php }?>
              <?php }?>
              <div class="empty"></div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <footer class="footer ml-3">
            <div class="clear-fix">
              <div class="float-left">
                <p>&copy; 2021 all right reserved</p>
              </div>
              <div class="float-right">
                <span>Alumona Benaiah</span>
              </div>
            </div>
          </footer>
        </section>
      </main>
      <?php require_once('inc/head.php');?>

      <?php require_once('inc/right-nav.php');?>
    </div>

    <script>
      let navmenuicon = document.querySelectorAll(".navbar-menu-icon");

      for (let i = 0; i < navmenuicon.length; i++) {
        navmenuicon[i].addEventListener("click", (e) => {
          let x = e.clientX - e.target.offsetLeft;
          let y = e.clientY - e.target.offsetTop;

          let ripples = document.createElement("span");
          ripples.style.left = x + "px";
          ripples.style.top = y + "px";

          e.target.appendChild(ripples);

          setTimeout(() => {
            ripples.remove();
          }, 400);
        });
      }

      function controlSidebars() {
        let isOpen = false;
        let leftmenu = document.querySelector(".left-dots");
        let rightmenu = document.querySelector(".right-burger");
        let rightmenu_2 = document.querySelector(".right-sidebar-menu");
        let closesidebarbtn = document.querySelector(".close-sidebar-btn");

        let leftsidebar = document.querySelector(".sidebar-column");

        let rightsidebar = document.querySelector(".right-sidebar-column");

        leftmenu.onclick = () => {
          leftsidebar.style.width = "250px";
        };

        closesidebarbtn.onclick = () => {
          leftsidebar.style.width = "0px";
        };

        rightmenu.onclick = () => {
          if (isOpen == false) {
            rightsidebar.classList.add("position-rightsidebar");
            isOpen = true;
          } else {
            rightsidebar.classList.remove("position-rightsidebar");
            isOpen = false;
          }
        };

        rightmenu_2.onclick = () => {
          if (isOpen == false) {
            rightsidebar.classList.add("position-rightsidebar");
            isOpen = true;
          } else {
            rightsidebar.classList.remove("position-rightsidebar");
            isOpen = false;
          }
        };
      }
      controlSidebars();
    </script>
  </body>
</html>
