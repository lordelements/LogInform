<?php 
 include_once("connection/connection.php");
 
 $sql = "SELECT * FROM `loginform`";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Transparent Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-box">
        <form action="insert.php" method="post"> 
        <h1>Login</h1>
        <div class="textbox">
            <i class="fas fa-user" aria-hidden="true"></i>
            <input type="textbox" placeholder="username" name="username" >
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="password" name="password" >
        </div>
     

        <input class="btn-login" type="submit" name="submit" value="LOGIN">
        </form>
    </div>
    
</body>
</html>