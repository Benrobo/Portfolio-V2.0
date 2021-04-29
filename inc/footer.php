<script src="js/main.js" defer></script>
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

      // random job offers
      function randomOffers() {
        let typewrittertxtcont = document.querySelector(".typewritter-txt");

        let offers = [
          "scalable enterprice software",
          "andriod application",
          "cross platform apps",
          "innovative software products",
          "dynamic rendring sites",
          "web applications",
        ];

        let randomoffers = () => {
          let random = Math.floor(Math.random() * offers.length);

          typewrittertxtcont.classList.add("animate");
          typewrittertxtcont.innerHTML = offers[random];
        };

        setInterval(randomoffers, 2000);
      }
      randomOffers();

      function getYrs() {
        let date = new Date().getFullYear();
        let startYr = 2019;

        let total = date - startYr;
        let yrcont = (document.querySelector("#yrs").innerHTML = `${total} +`);
      }
      getYrs();

    </script>
  </body>
</html>