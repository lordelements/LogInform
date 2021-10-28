<?php
  include_once("connection/connection.php");

 
  $user= $_POST['username'];
  $pass = $_POST['password'];

  $sql = "INSERT INTO `loginform`( `username`, `password`) VALUES (' $user','$pass')";
  $insert = mysqli_query($conn,$sql);
  
  
  if (!$insert) {
      echo "Your username or password is inavalid";
      if ($user ==! "username" && $pass ==! "password" ) {
        return;
      }
  }else{
      echo "Your login successfully";
  }
?>
