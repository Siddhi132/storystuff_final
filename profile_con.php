<?php
require "dbconnect.php";
session_start();
$email = $_SESSION['email'];
$insert=false;

if (isset($_POST['send'])) {
    $role = $_POST['role'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $content = str_replace("'","\'",$content);
    // $image = $_POST['image'];
    $video = $_POST['video'];
    if(empty($_FILES) || !isset($_FILES['image'])){
        echo "error";
    }
    $video=$_FILES['video'];
    $videoname=$video['name'];
    $error1=$video['error'];
    $tempname1=$video['tmp_name'];

    $image=$_FILES['image'];
    $imgname=$image['name'];
    $error=$image['error'];
    $tempname=$image['tmp_name'];

    $filetod=explode('.',$imgname);
    $end=strtolower(end($filetod));
    $fileext=array('png','jpg','jpeg','jfif');
    if (in_array($end,$fileext)){
        $destfile='assets/img/'.$imgname;
        move_uploaded_file($tempname,$destfile);


    }

    $filetod1=explode('.',$videoname);
    $end=strtolower(end($filetod1));
    $fileext=array('mp4','mp3','png');
    if (in_array($end,$fileext)){
        $destfile1='assets/audio/'.$videoname;
        move_uploaded_file($tempname1,$destfile1);


    }
    
echo $role;
echo $video;
echo $imgname;
echo $tempname;

   $sql3="SELECT `user_id` FROM `user` WHERE email='$email'";
   $result2=mysqli_query($conn, $sql3);
   while($row=mysqli_fetch_assoc($result2)){
       $user_id=$row['user_id'];
   }
$t = time();
 $time = date("Y-m-d h:i:s",$t);
 

    $sql2 = "INSERT INTO `artical` ( `category_id`, `image`, `description`, `user_id`, `date`,`delete_status`,`video`) VALUES ( '$role', '$destfile', '$content', '$user_id','$time','','$destfile1');";
    $result4=mysqli_query($conn, $sql2);

    if($result4){
        echo "insert";
        $insert=true;
    }
    else{
        echo "not insert";
        echo $sql2;
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong> Your artical not submited.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      $insert=false;
    }
    header("location: navbar.php");


// move_uploaded_file($image,$folder)
// if (move_uploaded_file($tempname, $folder))  {
//     echo "Image uploaded successfully";
// }else{
//     echo "Failed to upload image";
// }


}
?>