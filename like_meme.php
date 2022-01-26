<?php
    require 'dbconnect.php';
    session_start();
    if(isset($_SESSION['login']))
    {
        $email = $_POST['email'];
        $id = $_POST['artical_id'];
        $sql = "SELECT * FROM `user` WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $userId = $row['user_id'];
        $sql = "INSERT INTO liked_post VALUES ($id,$userId)";
        // // $sql = "SELECT * FROM artical where category_id='MEMES' AND artical_id=".$_POST['artical_id'];
        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_assoc($result);
        echo $result;
        // echo "success";
    }
?>
