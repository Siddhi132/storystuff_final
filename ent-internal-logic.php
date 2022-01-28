<?php                   
require "dbconnect.php";
    $output='<div class="latest_story mt-5"><h6 > <b> ENTERTAINMENT <b> </h6></div><div class="latest_story mt-1 "><h2 > HEADLINE </h2></div><div class="row3 pb-4"><div class="publish"><h6 class="publish_text">PUBLISHED BY<br/>';
    if(!$_POST['artical-id'])
    {

        $sql = "SELECT * FROM artical where category_id='ENTERTAINMENT' AND delete_status=2 ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $date = $row['date'];
        $description = $row['description'];
        $userId = $row['user_id'];
    }
    else
    {
        $sql = "SELECT * FROM artical where category_id='ENTERTAINMENT' AND delete_status=2 AND artical_id=".$_POST['artical-id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $date = $row['date'];
        $description = $row['description'];
        $userId = $row['user_id'];
    }
    $sql = "SELECT email FROM user where user_id=$userId";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userEmail = $row['email'];
    $output .=$userEmail.'</h6>DATE<h6>';
    $output .=$date.'</h6></div><div class="symbol"><img src="assets/img/logo/label.png" class="black_logo save" id="'.$_POST['artical-id'].'" /><img src="assets/img/logo/white.png" class="white_logo" /><i class="fa fa-share-alt fa-lg mt-1" data-toggle="modal" data-target="#share"></i></div></div><div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title w-100" id="exampleModalLabel">Share This Post</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body mx-auto">
          <div class="social">
              <a href="#" id="share-wa" class="sharer button"><i class="fa fa-3x fa-whatsapp text-success"></i></a>
              <a href="#" id="share-fb" class="sharer button"><i class="fa fa-3x fa-facebook-square text-primary"></i></a>
              <a href="#" id="share-tw" class="sharer button"><i class="fa fa-3x fa-twitter-square text-primary"></i></a>
              <a href="#" id="share-li" class="sharer button"><i class="fa fa-3x fa-linkedin-square text-primary"></i></a>
              <a href="#" id="share-gp" class="sharer button"><i class="fa fa-3x fa-google-plus-square text-danger"></i></a>
              <a href="#" id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square text-dark"></i></a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>';
    $output .=' <div class="story mt-5"  ><div class="story_img"><img src="'.$image.'" class="" /></div><div class="story_text mt-5">
    <h6>';
    $output .=$description;
    $output.='</h6></div></div>';
    echo $output;
?>


                    
           
                
            