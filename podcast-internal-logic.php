
<?php
require "dbconnect.php";

$id=$_POST['artical-id'];
$sql2 = "SELECT * FROM artical where category_id='PODCASTS' AND delete_status=2 AND artical_id=".$_POST['artical-id'];        
$result2 = mysqli_query($conn, $sql2);

// echo var_dump($result2);
        $row = mysqli_fetch_assoc($result2);

        $image = $row['image'];
        $video = $row['video'];
        $date = $row['date'];
        $description = $row['description'];
        $userId = $row['user_id'];

        $sql3 = "SELECT * FROM user where user_id=".$userId;        
$result3 = mysqli_query($conn, $sql3);
$row = mysqli_fetch_assoc($result3);
$email=$row['email'];



$output=' <div class="all-titles">
<div class="podcast-title">
    <b> PODCAST </b>
</div>
<div class="podcast-headline ">

</div>
<div class="podcast-published">
    PUBLISHED BY '.$email.'
</div>
<div class="podcast-date">
    DATE '.$date.'
</div>
</div>
<div class="main-audio ">
<div class="audio-image-box">
<img src="'.$image.'" class="audio-image" alt="">
<img src="'.$image.'" class="audio-small-image" alt="">
<p class="audio-title"> <b>TITLE </b> </p>
<div class="content-box"> 
   <p class="audio-content">'.$description.'</p> 
</div>

<audio controls controlsList="nodownload">
<source src="'.$video.'" type="audio/mpeg">
</audio>
</div>

<div class="podcast-content ">
<div class="podcast-symbols align-items-center">
    <i class="fa fa-align-left" aria-hidden="true"></i>
    <span class="podcast_heart podcast_heart d-flex justift-content-around flex-row align-items-center mx-2" id="'.$id.'"> 
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                        <p class="mb-0" id="likes_count"></p>
                    </span>
    <i class="fa fa-share-alt" aria-hidden="true" data-toggle="modal" data-target="#share"></i>

<!-- Modal -->
        <div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div>
</div>
<button class="btn-follow"> FOLLOW </button>
<span class="about-div"> 
    <p class="podcast-about"> About </p> 
    <ion-icon name="close-outline" class="about-cancel"></ion-icon>
</span>
<div class="podcast-about-content">
    '.$description.'
</div>
</div>
</div>';

echo $output;

?>
