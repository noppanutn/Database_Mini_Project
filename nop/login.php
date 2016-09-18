<?php
if(isset($_POST['username']) and isset($_POST['password'])){
  /*echo $_POST['username'];
  echo $_POST['password'];*/

  /* $line=1;*/
  $myfile = fopen("source.txt","r");
  $user=$_POST['username'];
  $pass=$_POST['password'];
  while(!feof($myfile)){
    $break_array = explode(',',fgets($myfile)); /* break a line of text in txt file by ',' into an aray */
  /*  echo $break_array[0]." ";
    echo $break_array[1]." "; */
    $check_user = explode('=',$break_array[0]); /* get username */
  /*  echo $check_user[1]." ";*/
    $check_pass = explode('=',$break_array[1]); /* get password */
  /*  echo $check_pass[1]." ";
    echo $line;
    $line++; */
    if($check_user[1]==$user){
      if($pass==$check_pass[1]){
        echo "login successful";
        header ('Location: main.html');
      } else {
        echo "wrong password";
      }
      break;
    }
  }
  if($check_user[1]!=$user){
    echo "user not found";
  }
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
