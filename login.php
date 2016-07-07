<?php
  include("config1.php");

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "select password, type from users where username = '$username'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();
  $hash = $row['password'];
  $type = $row['type'];

  if (password_verify($password, $hash)) {
    echo "correct username";
    session_start();
    $_SESSION['user'] = $username;
    $_SESSION['type'] = $type;
    if ($type == 'user') {
    	header("location:myreservations.php");
    } else if ($type == 'admin') {
    	header("location:addVehicle.php");
    }
  } else {
    echo "incorrect username";
  }

  $con->close();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>
