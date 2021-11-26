<?php                   
require "dbconnect.php";
    $output='<div class="story_img">';
    if(!$_POST['artical-id'])
    {

        $sql = "SELECT * FROM artical where category_id='STORIES' ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $description = $row['description'];
    }
    else
    {
        $sql = "SELECT * FROM artical where category_id='STORIES' AND artical_id=".$_POST['artical-id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $description = $row['description'];
    }
    $output .='<img src="'.$image.'" class="" /></div><div class="story_text mt-5">
    <h6>';
    $output .=$description;
    $output.='</h6></div>';
    echo $output;
?>