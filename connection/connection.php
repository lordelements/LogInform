<?php
$host="localhost";
$user="root";
$password="13572468";
$database = "demo";

//database connection
   
$conn = mysqli_connect($host, $user, $password, $database);

if ($conn->connect_error) {
    # code...
   die('Connection Failed : '.$conn->connect_error);
}else{
    return $conn;
}

?>