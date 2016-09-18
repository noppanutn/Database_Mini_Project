<?php
require ('function.php');

if(isset($_POST['username']) and isset($_POST['password'])){
  $_SESSION['user']=$_POST['username'];
  $_SESSION['pass']=$_POST['password'];
  check_login2($_SESSION['user'],$_SESSION['pass']);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <h1><a href="index.html">SIIT</a></h1>
  <form action="login.php" method="POST">
    <input type="text" placeholder="Student ID" name="username">
    <input type="password" placeholder="Password" name="password">
    <input type="submit">
  </form>

</body>
</html>
