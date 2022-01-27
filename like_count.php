<?php
    require 'dbconnect.php';
    session_start();

    $sql = "SELECT COUNT(*) as count FROM liked_post where artical_id=".$_POST['artical_id']." GROUP BY artical_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $output['likes'] = $row==null?0:$row['count'];
    
    if(isset($_SESSION['login']))
    {
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM `user` WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $userId = $row['user_id'];
        $output['id']= $_POST['artical_id'];
        $sql = "SELECT COUNT(*) as counts FROM liked_post WHERE artical_id=".$_POST['artical_id']." AND user_id =".$userId;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $isLike = $row['counts'];
        if($isLike == 1)
        {
            $output['liked'] = true;
        }
        else
        {
            $output['liked'] = false;
        }
    }
    else
    {
        $output['liked'] = false;
    }
    // $output['liked']=false;
    echo json_encode($output);
?>