<?php
  require ('function.php');
  //echo $_SESSION['user'];
  if(!isset($_SESSION['user'])){
    die("Not logged in");
  }
  if(isset($_POST['Opass']) and isset($_POST['Npass']) and isset($_POST['Cpass'])){
    $Opass = $_POST['Opass']; // Old password
    $Npass = $_POST['Npass']; // New password
    $Cpass = $_POST['Cpass']; // Confirmed Password
    newpass2($Opass,$Npass,$Cpass); // Call a function from function.php

    //echo "<h1>password has successfully been changed</h1>";
  }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Change Password</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 </head>
 <body>
   <h1>Change Your Password</h1>
   <form action="change_password.php" method="POST">
     <input type="password" placeholder="Old Password" name="Opass">
     <input type="password" placeholder="New Password" name="Npass">
     <input type="password" placeholder="Confirmed Password" name="Cpass">
     <input type="submit">
   </form>

 </body>
 </html>