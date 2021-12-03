<?php
    $con=mysqli_connect("localhost","root","","storystuff2");
    if(!$con){
        echo "Database connection not success!!";
    }
    $sql="UPDATE `artical` SET `delete_status` = 2 WHERE`artical_id` = ".$_POST['artical_id'];
    $result = mysqli_query($con, $sql);
    $sql="SELECT category_id FROM artical WHERE `artical_id` = ".$_POST['artical_id'];
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['category_id']=='STORIES')
    {
        echo 'story';
    }
    elseif ($row['category_id']=='ENTERTAINMENT') {
        echo 'entertainment';
    }
    elseif ($row['category_id']=='MEMES') {
        echo 'memes';
    }
    elseif ($row['category_id']=='PODCASTS')
    {
        echo 'podcast';
    }
    else
    {
        echo 'gallery';
    }
?>