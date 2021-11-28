<?php
    require 'dbconnect.php';
    session_start();
    $sql = "INSERT INTO save_post VALUES('".$_SESSION['email']."',".$_POST['artical_id'].")";
    $result = mysqli_query($conn,$sql);
    echo $result;
?>