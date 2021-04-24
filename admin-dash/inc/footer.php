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
  </script>
</body>

</html>