  <!-- JavaScript Bundle with Popper -->
  <!-- <script src="../js/jquery.3.4.1.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
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
  </script>
</body>

</html>