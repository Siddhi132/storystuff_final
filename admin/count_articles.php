<?php
    $con=mysqli_connect("localhost","root","","storystuff2");
    if(!$con){
    echo "Database connection not success!!";
    }

    $sql="SELECT * FROM artical WHERE category_id = 'STORIES' AND delete_status = 0";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);
    $output['stories'] = $row;
    $sql="SELECT * FROM artical WHERE category_id = 'MEMES' AND delete_status = 0";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);
    $output['memes'] = $row;
    $sql="SELECT * FROM artical WHERE category_id = 'PODCASTS' AND delete_status = 0";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);
    $output['podcast'] = $row;
    $sql="SELECT * FROM artical WHERE category_id = 'ENTERTAINMENT' AND delete_status = 0";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);
    $output['entertainment'] = $row;
    $sql="SELECT * FROM artical WHERE category_id = 'GALLERIES' AND delete_status = 0";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);
    $output['gallery'] = $row;
    // $row = mysqlife($result);
    // $output['count'] = $row;
    echo json_encode($output);
?>