<?php require_once('inc/head.php');?>

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
            <hr />
            
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
        <!-- header -->
        <header class="header">
          <div class="overlay">
            <div class="content">
              <div class="txt">
                <h1>Design Inovate & Create</h1>
                <br />
                <div class="code-txt">
                  <span class="text-danger"><</span>
                  <span class="text-warning">code</span>
                  <span class="text-danger">></span>
                  <span>What i do: </span><span class="text-info">( </span
                  ><span class="typewritter-txt"></span
                  ><span class="text-info"> )</span>
                  <span class="text-danger"><</span>
                  <span class="text-warning">/code</span>
                  <span class="text-danger">></span>
                </div>
              </div>
              <br />
              <div class="btn-cont mt-2">
                <a href="" class="hire-btn">Hire Me</a>
              </div>
              <!-- image cont -->
              <div class="img-cont">
                <img
                  src="./img/illustration/1.png"
                  class="img-fluisd"
                  style="width: 300px"
                />
              </div>
            </div>
          </div>
        </header>

        <!-- main area portfolio -->
        <section class="portfolio-area mt-1 mb-2 p-4">
          <!-- showcase -->
          <div class="showcase-area mb-5">
            <div class="exp float-left mr-3">
              <span
                ><span class="yrs mr-2" id="yrs"></span>
                <small>Years Expxerience</small></span
              >
            </div>
            <div class="proj float-right ml-5">
              <span class="proj-count mr-2">143 </span>
              <small>Completed Projects</small>
            </div>
          </div>
          <!-- services content -->
          <div class="services mt-5">
            <div class="content">
              <h6 class="ml-3">My services</h6>

              <!-- box model -->
              <div class="services-box-cont">
                <div class="box">
                  <div class="head">
                    <div class="icon"><ion-icon name="code-working-outline"></ion-icon></div>
                    <p>Web Development</p>
                  </div>
                  <div class="body">
                    <p>
                      Deploying web application with crossplatform compatibility. responsive designs and user friendly UI\UX.our web services mainly focus on easy to-use interface, speed and security
                    </p>
                  </div>
                </div>
                <div class="box">
                  <div class="head">
                    <div class="icon"><ion-icon name="color-palette-outline"></ion-icon></div>
                    <p>Graphics Design</p>
                  </div>
                  <div class="body">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Harum, fugiat! Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Natus, nemo autem vitae eos earum
                      dolorum.
                    </p>
                  </div>
                </div>
                <div class="box">
                  <div class="head">
                    <div class="icon"><ion-icon name="git-compare-outline"></ion-icon></div>
                    <p>Fullstack Development</p>
                  </div>
                  <div class="body">
                    <p>
                      Building of scalable enterprice software application  with the use of both frontend and backend technologies which could fastening the growth of startup businesses.
                    </p>
                  </div>
                </div>
                <div class="box">
                  <div class="head">
                    <div class="icon"><ion-icon name="logo-android"></ion-icon></div>
                    <p>Andriod Development</p>
                  </div>
                  <div class="body">
                    <p>
                      Combining research, design and engineering to prototype experiences for your next version of Android.
                    </p>
                  </div>
                </div>
                <div class="box">
                  <div class="head">
                    <div class="icon"><ion-icon name="logo-buffer"></ion-icon></div>
                    <p>UI/UX Design</p>
                  </div>
                  <div class="body">
                    <p>
                      Creating of user-friendly interfaces that enable users to understand how to use complex technical products.
                    </p>
                  </div>
                </div>
                <div class="box">
                  <div class="head">
                    <div class="icon"><ion-icon name="logo-youtube"></ion-icon></div>
                    <p>Content Creation</p>
                  </div>
                  <div class="body">
                    <p>
                      As a developer coding isnt not just my thing, helping others find their passion as a developer is what makes me feel happy, By creating both visual and written based contents.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- recomendation -->
          <div class="recomendations mt-4">
            <h6 class="ml-3" style="font-weight: 600">Recommendations</h6>
            <div class="rec-cont">
              <div class="rec-card">
                <div class="head mb-4">
                  <span class="rec-name">John Doe</span>
                  <span class="field">Software Developer</span>
                </div>
                <div class="body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sunt porro ipsa, tempora dolore atque impedit.
                  </p>
                </div>
                <div class="ratings">
                  <div class="rat">
                    <span class="rating-count">5</span>
                    <span class="rating-icon"
                      ><ion-icon name="star"></ion-icon
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- portfolio main -->
          <div class="portfolio-main mt-5">
            <h6 class="ml-3" style="font-weight: 600">Portfolios</h6>
            <div class="portfolio-cont">
              <div class="box">
                <div class="img" style="background:url(/img/portfolio_img/1.jpeg); background-size:cover;"></div>

                <div class="date-cont">
                  <small class="date">12 March, 2020</small>
                </div>

                <div class="title-cont">
                  <p class="title">Chat Application</p>
                </div>
                <div class="footer">
                  <a href="#" class="readmore">READ MORE ></a>
                </div>
              </div>
              <div class="box">
                <div class="img" style="background:url(/img/portfolio_img/1.jpeg); background-size:cover;"></div>

                <div class="date-cont">
                  <small class="date">12 March, 2020</small>
                </div>

                <div class="title-cont">
                  <p class="title">Chat Application</p>
                </div>
                <div class="footer">
                  <a href="#" class="readmore">READ MORE ></a>
                </div>
              </div>
              <div class="box">
                <div class="img" style="background:url(/img/portfolio_img/1.jpeg); background-size:cover;"></div>

                <div class="date-cont">
                  <small class="date">12 March, 2020</small>
                </div>

                <div class="title-cont">
                  <p class="title">Chat Application</p>
                </div>
                <div class="footer">
                  <a href="#" class="readmore">READ MORE ></a>
                </div>
              </div>
              <div class="empty"></div>
            </div>
            <a href="#" class="more-info ml-4">See More</a>
          </div>
          <br>
          <br>
          <!-- contact container -->
          <a name="contact"></a>
          <div class="contact-cont">
            <h6 class="ml-3" style="font-weight: 600">Get in touch.</h6>
            <div class="form-cont">
              <form action="#" class="ml-3 input-groups">
                <div class="input-groups">
                  <div class="left-icon"><ion-icon name="person-add-outline"></ion-icon></div>
                  <input type="text" placeholder="Name" class="inputs">
                </div>
                <div class="input-groups">
                  <div class="left-icon"><ion-icon name="mail-outline"></ion-icon></div>
                  <input type="email" placeholder="Name" class="inputs">
                </div>
                <div class="input-groups">
                  <div class="left-icon"><ion-icon name="archive-outline"></ion-icon></div>
                  <textarea name="" placeholder="Message" id=""  class="inputs"></textarea>
                </div>
                <input type="submit" value="Send Message" class="submit-btn ml-3">
              </form>
            </div>
          </div>
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

  <?php require_once('inc/right-nav.php');?>
    </div>


  <?php require_once('inc/footer.php');?>
