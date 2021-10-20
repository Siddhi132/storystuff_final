<?php
require 'dbconnect.php';
 // print_r($_SESSION['login']);
 //  exit;
// if (isset($_SESSION['login'])) {
    
// }
// else{
//    $login=false;
// $notlogin=false;
// $insert=false;
// $notinsert=false;
// $exists=false; 
// }

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signup'])){
//  require 'dbconnect.php';

 $email=$_POST['email'];
 $password=$_POST['password'];
 echo $password;
 echo $email;
 $checkbox=$_POST['tandc'];
echo $checkbox;
 $existemail="SELECT * FROM `user` WHERE email='$email'";
 $result3=mysqli_query($conn,$existemail);

$fetchrows=mysqli_num_rows($result3);

if($fetchrows!=0){
    $exists=true;
}


if($exists==false) {

// $hash=password_hash($password, PASSWORD_DEFAULT);

  $sql1="INSERT INTO `user` (`user_id`, `email`, `password`, `current_time`) VALUES ('', '$email', '$password', 'current_timestamp()')";
  $result=mysqli_query($conn,$sql1);
  if ($result) {
      $insert=true;
      session_start();
      $_SESSION['login']=true;
      $_SESSION['email']=$email;
      $login=true;
      echo "insert done";

      $sql3="select `user_id` from `user` where email='".$_SESSION['email']."'";
      $result4=mysqli_query($conn,$sql3);
      $row2=mysqli_fetch_assoc($result4);
      $user_id=$row2['user_id'];
      $_SESSION['user_id']=$user_id;

      header("location: navbar.php");
  }
  else{
      header("location: navbar.php");
      echo "query not run";
      echo $result;

  }
}
else{
    header("location: navbar.php");
    $notinsert=true;
    echo "not insert";

}


}

if ($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['login'])) {
    $email = $_POST['email2'];
    $password = $_POST['password2'];
    $remember = $_POST['remember'];
    echo $email.'<br>';
    echo $password.'<br>';
    echo $user_id.'<br>';
    echo $remember.'<br>';

    $sql2="SELECT * FROM `user` where email='$email'";

   // $user_id = "SELECT user_id FROM `user` where email='$email'";


    $result2=mysqli_query($conn, $sql2);
    $num=mysqli_num_rows($result2);
    // print_r($num);
    // exit;
    echo $num;
    if ($num == 1) {
        while ($row=mysqli_fetch_assoc($result2)) {
            if ($password == $row['password']) {
                $login=true;
                session_start();
                echo "Logindone";
                echo '<br>';
                // print_r($row['user_id']);
                // exit;
                $_SESSION['login']=true;

                $_SESSION['email']=$email;
                $_SESSION['user_id']=$row['user_id'];
                header("location: navbar.php");

                //print_r($_SESSION['email']);
            } else {
                // echo "password_verify($password,$row['password'])";
                header("location: navbar.php");
                echo "notlogin";
                $notlogin=true;

            }
        }
    }
    else{
        header("location: navbar.php");

        echo "sorry, this id has more than one account!!";
    }
}
?>