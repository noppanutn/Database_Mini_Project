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
        if($check_user[1]=="admin"){
          header ('Location: admin.php');
        } else {
          header ('Location: main.html');
        }
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

function add_user($user,$pass){
  $write = fopen("source.txt","a");
  $info = implode(',',array('user='.$user,'pass='.$pass,));
  fwrite($write,"\n".$info.",");

}

function get_biblio($user){
  $myfile = fopen("source.txt","r");
  while(!feof($myfile)){//read until the end of a file
    $break_array = explode(',',fgets($myfile)); /* break a line of text in txt file by ',' into an aray */
    $check_user = explode('=',$break_array[0]); /* get username */
    if($check_user[1]==$user and count($break_array)>2){
      $_SESSION['perid'] = explode('=',$break_array[2])[1];
      $_SESSION['nameeng'] = explode('=',$break_array[3])[1];
      $_SESSION['nameth'] = explode('=',$break_array[4])[1];
      $_SESSION['school'] = explode('=',$break_array[5])[1];
      $_SESSION['campus'] = explode('=',$break_array[6])[1];
      $_SESSION['program'] = explode('=',$break_array[7])[1];
      $_SESSION['minor'] = explode('=',$break_array[8])[1];
      $_SESSION['level'] = explode('=',$break_array[9])[1];
      $_SESSION['degreename'] = explode('=',$break_array[10])[1];
      $_SESSION['adyear'] = explode('=',$break_array[11])[1];
      $_SESSION['status'] = explode('=',$break_array[12])[1];
      $_SESSION['adtype'] = explode('=',$break_array[13])[1];
      $_SESSION['precertificate'] = explode('=',$break_array[14])[1];
      $_SESSION['gradfrom'] = explode('=',$break_array[15])[1];
      $_SESSION['advisor'] = explode('=',$break_array[16])[1];
      $_SESSION['creditattempt'] = explode('=',$break_array[17])[1];
      $_SESSION['creditsatisfy'] = explode('=',$break_array[18])[1];
      $_SESSION['gpax'] = explode('=',$break_array[19])[1];
      //$_SESSION['pid'] = explode('=',$break_array[20])[1];
    } else {
      echo "no bibilo";
    }
  }
}

function check_login2($user,$pass){
  if($myfile=@fopen($user.".txt","r") and $myfile!=false){
    $check_pass = explode('=',fgets($myfile))[1];
    if($check_pass == $pass){
      echo "if";
      if($user=="admin"){
        header ('Location: admin.php');
      } else {
        header ('Location: main.html');
      }
    } else {
      echo "wrong password";
    }
  } else {
    echo "user not found";
  }
}

function newpass2($Opass,$Npass,$Cpass){
  if($_SESSION['pass']!=$Opass){
    echo "Wrong old password";
  } else {
    if($Npass!=$Cpass){
      echo "Passwords do not match";
    } else {
      $read = fopen($_SESSION['user'].".txt","r");
      $write = fopen("temp.txt","w");
      while(!feof($read)){
        $line = explode('=',fgets($read));
        $var = $line[0];
        $value = $line[1];
        if($var=="password"){
          $line[1]=$Npass;
          $new = implode('=',$line);
          fwrite($write,$new);
        }else{
          $new = implode('=',$line);
          fwrite($write,$new);
        }
      }
      fclose($read);
      fclose($write);
      echo $_SESSION['user'].'.txt';
      rename('temp.txt',$_SESSION['user'].'.txt');
      header ('Location:main.html');
    }
  }
}

function get_biblio2($user){
  $myfile = fopen($user.'.txt','r');
  $i=0;
  $var = array('perid','nameeng','nameth','school','campus',
  'program','minor','level','degreename','adyear','status','adtype',
  'precertificate','gradfrom','advisor','creditattempt',
  'creditsatisfy','gpax','bday','bplace','nation','religion',
  'blood','address','father','mother','guard','rel','gaddress',
  'contactp','cname','caddress','wstatus','company','position',
  'waddress','adgroup','group','adcon');
  fgets($myfile);
  while(!feof($myfile) and $i<count($var)){
    $line = explode('=',fgets($myfile));
    $_SESSION[$var[$i]] = $line[1];
    $i++;
  }
}
 ?>