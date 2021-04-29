<?php 
require('inc/port-head.php');

require("admin-dash/logic/dbh/db.php");

if(isset($_GET['pstid'])){
    $id = $_GET['pstid'];
    $query = mysqli_query($conn, "SELECT * FROM portfolio_tbl WHERE id='$id'");

    $num = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    $dbdate = strtotime($data['reg_date']);  
    $info = getdate(date($dbdate));
    $mth = $info['month'];
    $day = $info['wday'];
    $yr = $info['year'];

    $formated = $day.", ".$mth." ".$yr;

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
                <button class="like-btn" id="<?php $data['id'];?>"><ion-icon name="thumbs-up-outline"></ion-icon><sup><span class="badge badge-warning ml-1">12</span></sup></button>
                
            </div>
        </div>
    </div>

  </body>
</html>
