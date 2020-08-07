<?php
session_start();
$uid = $_SESSION['userId'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$in  =$_POST['in'];
$out  =$_POST['out'];
$room =$_POST['room'];
$type =$_POST['type'];
if (!empty($name) || !empty($email) || !empty($mobile) || !empty($in)|| !empty($out) || !empty($room) || !empty($type)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hotel";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into booking (name, email,mobile_no, check_in, check_out, room ,type, uid) values(?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssss", $name, $email, $mobile, $in, $out, $room , $type, $uid);
      $stmt->execute();

      echo $stmt->error;
      echo "New record inserted sucessfully";
        exit;
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
