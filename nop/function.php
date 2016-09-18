<?php
session_start();
// check function is used to find a user and password from source.txt
function check_login($user,$pass){
  $myfile = fopen("source.txt","r");
  while(!feof($myfile)){//read until the end of a file
    $break_array = explode(',',fgets($myfile)); /* break a line of text in txt file by ',' into an aray */
    $check_user = explode('=',$break_array[0]); /* get username */
    $check_pass = explode('=',$break_array[1]); /* get password */
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
  fclose($myfile);
}

//change password in source.txt
function newpass($Opass,$Npass,$Cpass){
  if($Opass!=$_SESSION['pass']){
    echo "Old password incorrect";
  } else {
    if($Npass!=$Cpass){
      echo "New passwords do not match";
    } else {
      $read = fopen("source.txt","r");
      $write = fopen("temp.txt","w");
      while(!feof($read)){
        $break_array = explode(',',fgets($read)); // break a line of text in txt file by ',' into an aray
        $check_user = explode('=',$break_array[0]); // get username
        $check_pass = explode('=',$break_array[1]); // get password
        if($check_user[1]==$_SESSION['user']){
          $break_array[1]="pass=".$Npass;
          $new = implode(',',$break_array);
          fwrite($write,$new);
        }else{
          $new = implode(',',$break_array);
          fwrite($write,$new);
        }
      }
      fclose($read);
      fclose($write);
      rename('temp.txt','source.txt');
      header ('Location:main.html');
    }
  }
}

 ?>