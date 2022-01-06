
<?php
require "dbconnect.php";

$id=$_POST['artical-id'];
$sql2 = "SELECT * FROM artical where category_id='PODCASTS' AND artical_id=".$_POST['artical-id'];        
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
<div class="podcast-symbols">
    <i class="fa fa-align-left" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-share-alt" aria-hidden="true"></i>
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