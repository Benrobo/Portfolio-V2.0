<?php 
require('inc/port-head.php');

require("admin-dash/logic/dbh/db.php");

if(isset($_GET['pstid'])){
    $id = $_GET['pstid'];
    $query = mysqli_query($conn, "SELECT * FROM portfolio_tbl WHERE id='$id'");

    $num = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if($num > 0){
        $dbdate = strtotime($data['reg_date']);  
        $info = getdate(date($dbdate));
        $mth = $info['month'];
        $day = $info['wday'];
        $yr = $info['year'];
    
        $formated = $day.", ".$mth." ".$yr;
    }else{
        header("location: portfolio.php");
        die;
    }

}
else{
    header('location: index.php');
}

?>

    <video src="bgvid.mp4" loop="true" autoplay></video>
    <div class="port-cont">
        <div class="cont mt-5">
            <div class="img-cont" style="background:url('img/portfolio_img/<?php echo $data['img']; ?>'); background-size:cover;"></div>
            <br>
            <small><span class="text-secondary"><a href="index.php">Home</a> / <a href="Portfolio.php">Portfolio</a> / Posts Page</span></small>
            <br>
            <div class="date-cont m-2">
                <small class="date"><?php echo $formated;?></small>
            </div>
            <h2><?php echo $data['title'];?></h2>
            <br>
            <br>
            <div class="body">
            <?php echo $data['contents'];?>
            </div>
            <br>
            <div class="reaction-cont">
                <input type="hidden" value="<?php echo $data['id'];?>" class="id">
                <button class="like-btn"><ion-icon name="thumbs-up-outline"></ion-icon><sup><span class="badge badge-warning ml-1">12</span></sup></button>
                
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        window.addEventListener("DOMContentLoaded", ()=>{
            like()
        })
            
        function like(){
            let reactbtn = document.querySelector(".like-btn");
            let val = document.querySelector(".id");
            reactbtn.addEventListener("click", (e)=>{
                makeCall(val.value)
            })
        }

        function makeCall(val){
            $.ajax({
                url:"insertlike.php",
                method: "POST",
                dataType: "text",
                data:{
                    postid:val 
                },
                success:(data)=>{
                    console.log(data);
                }
            })
        }
       
    </script>
  </body>
</html>
