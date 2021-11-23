<?php
  include_once("connection/connection.php");

 
  $user= $_POST['username'];
  $pass = $_POST['password'];

  $sql = "INSERT INTO `loginform`( `username`, `password`) VALUES ('$user','$pass')";
  $insert = mysqli_query($conn,$sql);
  
  
  if (!$insert) {
      if ($user ===! "username" || $pass ===! "password") {
        echo "Your username or password is inavalid";
      }
  }else{
      echo "Your login successfully  $user, $pass";
  }
?>
