<?php
require('function.php');
if(!isset($_SESSION['user'])){
  die("No user");
} else {
  get_biblio2($_SESSION['user']);
    //echo $_SESSION['adyear'];
}

 ?>
<html>
  <head>
    <title>SIIT Registration Login Page</title>
    <link rel="stylesheet"  href="main.css">

	<style type="text/css">
	.tables { background: #FFFFF; color:#000CB5; width:600px;}
	.tabletop { background: #9E8ABE; color:#000000;}
	.t1 { background: #E5E0FF; width:200px; height:25px; color:#000000;}
	.t2 { background: #F0F1FF;}
</style>



  </head>
  <body>
    <div id="wrapper">

      <div id="div_main">
        <h1> &nbsp; MAIN <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MENU</h1>
        <div id="div_menu">
          <ul id="menu">
            <li><a href="logout.php">LOG OUT</a></li>
            <li><a href="change_password.php">Change Password</a></li>
            <li><a href="timetable.php">Study Timetable</a></li>
            <li><a href="biblio.php">Student Biblio</a></li>
            <li><a href="grade.html">Grade Result</a></li>
            <li><a href="faq.html">FAQ</a></li>
          </ul>
        </div>
      </div>

      <div id="div_content">

        <div id="div_banner">
          <img src="banner.jpg">
        </div>
        <div id="div_news">
			<br>
			<table border='0' Class='tables'>
			<tr><th colspan="2"  class='tabletop'>Education Data</th></tr>
			<tr><td class='t1'>STUDENT ID:</td>		   <td class='t2'><?php echo $_SESSION['user'];?></td><tr>
			<tr><td class='t1'>PERSONAL ID:</td>	   <td class='t2'><?php echo $_SESSION['perid'];?></td><tr>
			<tr><td class='t1'>NAME(ENG):</td>		   <td class='t2'><?php echo $_SESSION['nameeng'];?></td><tr>
			<tr><td class='t1'>NAME:</td>			       <td class='t2'><?php echo $_SESSION['nameth'];?></td><tr>
			<tr><td class='t1'>SCHOOL:</td>			     <td class='t2'><?php echo $_SESSION['school'];?></td><tr>
			<tr><td class='t1'>CAMPUS:</td>			     <td class='t2'><?php echo $_SESSION['campus'];?></td><tr>
			<tr><td class='t1'>PROGRAM:</td>		     <td class='t2'><?php echo $_SESSION['program'];?></td><tr>
			<tr><td class='t1'>MINOR:</td>		  	   <td class='t2'><?php echo $_SESSION['minor'];?></td><tr>
			<tr><td class='t1'>LEVEL:</td>	  		   <td class='t2'><?php echo $_SESSION['level'];?></td><tr>
			<tr><td class='t1'>DEGREE NAME:</td>	   <td class='t2'><?php echo $_SESSION['degreename'];?></td><tr>
			<tr><td class='t1'>ADMISSION YEAR:</td>	 <td class='t2'><?php echo $_SESSION['adyear'];?></td><tr>
			<tr><td class='t1'>STATUS:</td>		  	   <td class='t2'><?php echo $_SESSION['status'];?></td><tr>
			<tr><td class='t1'>ADMISSION TYPE:</td>	 <td class='t2'><?php echo $_SESSION['adtype'];?></td><tr>
			<tr><td class='t1'>PRE CERTIFICATE:</td> <td class='t2'><?php echo $_SESSION['precertificate'];?></td><tr>
			<tr><td class='t1'>GRADUATED FROM:</td>	 <td class='t2'><?php echo $_SESSION['gradfrom'];?></td><tr>
			<tr><td class='t1'>ADVISOR:</td>		     <td class='t2'><?php echo $_SESSION['advisor'];?></td><tr>
			<tr><td class='t1'>aaa</td>				       <td class='t2'>bbb</td><tr>
      <tr><td class='t1'>aaa</td>			     	   <td class='t2'>bbb</td><tr>
			</table>



			<table border='1' Class='tables'>
			<tr><th colspan="2"  class='tabletop'>Academic Status</th></tr>
			<tr><td class='t1'>CREDIT ATTEMPT	:</td>		<td class='t2'><?php echo $_SESSION['creditattempt'];?></td><tr>
			<tr><td class='t1'>CREDIT SATISFY</td>			<td class='t2'><?php echo $_SESSION['creditsatisfy'];?></td><tr>
			<tr><td class='t1'>GPAX</td>					      <td class='t2'><?php echo $_SESSION['gpax'];?></td><tr>
			</table>



			<table border='1' Class='tables'>
			<tr><th colspan="2"  class='tabletop'>Education Data</th></tr>
			<tr><td class='t1'>BIRTHDAY:</td>				  <td class='t2'><?php echo $_SESSION['bday'];?></td><tr>
			<tr><td class='t1'>BIRTH PLACE:</td>			<td class='t2'><?php echo $_SESSION['bplace'];?></td><tr>
			<tr><td class='t1'>NATIONALITY:</td>			<td class='t2'><?php echo $_SESSION['nation'];?></td><tr>
			<tr><td class='t1'>RELIGION:</td>				  <td class='t2'><?php echo $_SESSION['religion'];?></td><tr>
			<tr><td class='t1'>BLOOD GROUP:</td>			<td class='t2'><?php echo $_SESSION['blood'];?></td><tr>
			<tr><td class='t1'>ADDRESS:</td>				  <td class='t2'><?php echo $_SESSION['address'];?></td><tr>
			<tr><td class='t1'>FATHER NAME:</td>			<td class='t2'><?php echo $_SESSION['father'];?></td><tr>
			<tr><td class='t1'>MOTHER NAME:</td>			<td class='t2'><?php echo $_SESSION['mother'];?></td><tr>
			<tr><td class='t1'>GUARDIAN:</td>			   	<td class='t2'><?php echo $_SESSION['guard'];?></td><tr>
			<tr><td class='t1'>RELATION:</td>				  <td class='t2'><?php echo $_SESSION['rel'];?></td><tr>
			<tr><td class='t1'>ADDRESS(GUARDIAN):</td><td class='t2'><?php echo $_SESSION['gaddress'];?></td><tr>
			<tr><td class='t1'>CONTACT PERSON:</td>		<td class='t2'><?php echo $_SESSION['contactp'];?></td><tr>
			<tr><td class='t1'>NAME:</td>					    <td class='t2'><?php echo $_SESSION['cname'];?></td><tr>
			<tr><td class='t1'>ADDRESS:</td>				  <td class='t2'><?php echo $_SESSION['caddress'];?></td><tr>
			<tr><td class='t1'>WORK STATUS:</td>			<td class='t2'><?php echo $_SESSION['wstatus'];?></td><tr>
			<tr><td class='t1'>COMPANY:</td>				  <td class='t2'><?php echo $_SESSION['company'];?></td><tr>
			<tr><td class='t1'>POSITION:</td>				  <td class='t2'><?php echo $_SESSION['position'];?></td><tr>
			<tr><td class='t1'>ADDRESS:</td>				  <td class='t2'><?php echo $_SESSION['waddress'];?></td><tr>
			</table>

			<table border='1' Class='tables'>
			<tr><th colspan="2"  class='tabletop'>Admission Information</th></tr>
			<tr><td class='t1'>Admission Group</td>			<td class='t2'><?php echo $_SESSION['adgroup'];?></td><tr>
			<tr><td class='t1'>Group</td>					      <td class='t2'><?php echo $_SESSION['group'];?></td><tr>
			<tr><td class='t1'>Admission Condition</td>	<td class='t2'><?php echo $_SESSION['adcon'];?></td><tr>
			</table>
        </div>
      </div>

    </div>
  </body>
</html>
