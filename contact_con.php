<?php
require 'dbconnect.php';
session_start();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['send'])) {
    $name=$_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 $sql1="INSERT INTO `contact` (`name`, `email`, `message`, `time`) VALUES ('$name', '$email', '$message', 'current_timestamp()')";
 $result=mysqli_query($conn,$sql1);
 if ($result) {

    // echo "insert done";
    header("location: navbar.php");
    
}
}

?>