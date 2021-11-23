<?php
 include_once("connection/connection.php");
  if (isset($_POST['submit'])) 
     {
      if (empty($_POST['username'] || empty($_POST['password'])) 
         {
           echo 'Please Fill in the Blanks';
      }
      else {
        $user= $_POST['username'];
        $pass = $_POST['password'];
      
        $sql = "INSERT INTO `loginform`( `username`, `password`) VALUES ('$user','$pass')";
        $insert = mysqli_query($conn,$sql);
       
        if (isset($_POST['submit']) {
            echo 'You login successfully';
        }

      }
  }

?>