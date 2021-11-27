<?php
    $conn=mysqli_connect("localhost","root","","storystuff2");
    if(!$conn){
        echo "Database connection not success!!";
    }
    $sql="UPDATE `artical` SET `delete_status` = 1 WHERE `artical`.`artical_id` = $artical_id;";
    $result = mysqli_query($conn, $sql);
?>