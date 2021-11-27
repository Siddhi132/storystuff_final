<?php
    $con=mysqli_connect("localhost","root","","storystuff2");
    if(!$con){
        echo "Database connection not success!!";
    }
    $sql="UPDATE `artical` SET `delete_status` = 2 WHERE`artical_id` = ".$_POST['artical_id'];
    $result = mysqli_query($con, $sql);
    echo 1;
?>