<?php
    require 'dbconnect.php';
    session_start();
    // $output = '<span class="close"> <ion-icon name="close-outline"> </ion-icon></span>
    // <div class="user_info">
    //     <img src="assets/img/tree.jpg" class="user_meme_pic" />
    //     <div class="user_meme_name "> 
    //         <h6 class="name_meme">';
    
    $sql = "SELECT * FROM artical where category_id='MEMES' AND artical_id=".$_POST['artical_id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userId = $row['user_id'];
    $image = $row['image'];
    $artical_id = $row['artical_id'];
    $description = $row['description'];
    $sql = "SELECT email FROM user where user_id=".$userId;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userEmail = $row['email'];
    while(1)
    {
        $output['userId'] = $userId;
        $output['articalId']=$artical_id;
        $output['image'] = $image;
        $output['description'] = $description;
        $output['email'] = $userEmail;
        break;
    }
    $sql = "SELECT COUNT(*) as count FROM liked_post where artical_id=".$_POST['artical_id']." GROUP BY artical_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $output['likes'] = $row['count'];
    if(isset($_SESSION['email']))
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
    
    // echo $row;
    // break;

//     $output .= $userEmail.'</h6>
//     <h6 class="id_meme"> ';
//     $output .= $userId.'</h6> 
//     </div>
// </div>

// // <div class="meme_info ">
// //     <div class="meme_slider owl-carousel" id="owl-demo">';
//     $output .='<img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">
//     <img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">
//     <img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">
//     <img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">';
//     $output .=' </div> 

//     <div class="meme_icon mt-2">
//         <span class="meme_heart"> <i class="fa fa-heart-o" aria-hidden="true"></i> </span>
//         <span class="meme_bookmark"> <i class="fa fa-bookmark-o" aria-hidden="true"></i> </span>
//         <span class="meme_send"> <ion-icon name="send-sharp"></ion-icon> </span>
//     </div>

//     <div class="meme_text text_size">';
//     $output .= $description.'</div>

//     <div class="comment_box text_size">
//         <h5> <b> Comments </b> </h5>
//     </div>
//     <input type="text" class="comment_text">

//     <div class="view_comment ">
//         <span class="view" > <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i> </span>

//         <h6 class="view_text text_size">VIEW COMMENTS</h6>
//     </div>

//     <div class="hide_comment ">
//         <span class="hide" > <i class="fa fa-play fa-rotate-270" aria-hidden="true"></i> </span>

//         <h6 class="hide_text text_size">HIDE COMMENTS</h6>
//     </div>

//     <div class="comments_all text_size  mt-4">
//         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque praesentium a soluta labore minus accusamus illum perferendis sit accusantium! Adipisci in ipsa doloribus nulla ex dolorum vel consectetur quo nisi.
//     </div>
// </div>';

    echo json_encode($output);
?>

                
