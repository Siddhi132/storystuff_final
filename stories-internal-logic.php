<?php                   
require "dbconnect.php";
    $output='<div class="latest_story mt-5"><h6 > <b> STORIES <b> </h6></div><div class="latest_story mt-1 "><h2 > HEADLINE </h2></div><div class="row3 pb-4"><div class="publish"><h6 class="publish_text">PUBLISHED BY<br/>';
    if(!$_POST['artical-id'])
    {

        $sql = "SELECT * FROM artical where category_id='STORIES' ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $date = $row['date'];
        $description = $row['description'];
        $userId = $row['user_id'];
    }
    else
    {
        $sql = "SELECT * FROM artical where category_id='STORIES' AND artical_id=".$_POST['artical-id'];
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
    $output .=$date.'</h6></div><div class="symbol"><img src="assets/img/logo/label.png" class="black_logo" /><img src="assets/img/logo/white.png" class="white_logo" /><a class="fa fa-share-alt fa-lg mt-1" aria-hidden="true"></a></div></div>';
    $output .=' <div class="story mt-5"  ><div class="story_img"><img src="'.$image.'" class="" /></div><div class="story_text mt-5">
    <h6>';
    $output .=$description;
    $output.='</h6></div></div>';
    echo $output;
?>


                    
           
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61a1f949da1ed640"></script>

            