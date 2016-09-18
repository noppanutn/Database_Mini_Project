<html>
  <head>
    <title>SIIT Grade Calculator</title>
    <link rel="stylesheet"  href="main.css">
	<style type="text/css">
	.tables { background: #FFFFF; color:#000CB5; width:700px; text-align:center; margin-top:10px;}
	.tabletop { background: #9E8ABE; color:#000000;}
	.t1 { background: #E5E0FF; width:200px; height:25px; color:#000000;}
	.t2 { background: #F0F1FF;}
	.t3 { background: #E5E0FF; width:200px; height:25px; color:#000000;}
	.t4 { background: #F0F1FF;}
	.semester { background: #000658; color:#FFFFFF;}
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
          <form action="gradecal.php" method="POST">
			      <input type="hidden"  name="cre1" value='3'>

      <?php
        $r=102;$c=82;$gp=317.5;
        if(isset($_POST['n1'])&&isset($_POST['n2'])&&isset($_POST['n3'])&&
        isset($_POST['n4'])&&isset($_POST['n5'])&&isset($_POST['n6'])&&
        isset($_POST['n7'])&&isset($_POST['n8'])){
        if($_POST['n1']!='w'and $_POST['n1']!=' '){$c=$c+3;$gp=$gp+$_POST['n1']*3;}
        if($_POST['n2']!='w'and $_POST['n2']!=' '){$c=$c+3;$gp=$gp+$_POST['n2']*3;}
        if($_POST['n3']!='w'and $_POST['n3']!=' '){$c=$c+3;$gp=$gp+$_POST['n3']*3;}
        if($_POST['n4']!='w'and $_POST['n4']!=' '){$c=$c+1;$gp=$gp+$_POST['n4']*1;}
        if($_POST['n5']!='w'and $_POST['n5']!=' '){$c=$c+3;$gp=$gp+$_POST['n5']*3;}
        if($_POST['n6']!='w'and $_POST['n6']!=' '){$c=$c+3;$gp=$gp+$_POST['n6']*3;}
        if($_POST['n7']!='w'and $_POST['n7']!=' '){$c=$c+3;$gp=$gp+$_POST['n7']*3;}
        if($_POST['n8']!='w'and $_POST['n8']!=' '){$c=$c+1;$gp=$gp+$_POST['n8']*1;}
        }

        function select($n,$v){
          $num=array('n1','n2','n3','n4','n5','n6','n7','n8');
          if(isset($_POST['n1'])&&isset($_POST['n2'])&&isset($_POST['n3'])&&
          isset($_POST['n4'])&&isset($_POST['n5'])&&isset($_POST['n6'])&&
          isset($_POST['n7'])&&isset($_POST['n8'])){
            if($_POST[$num[$n-1]]==$v){
              echo "selected";
            }
          }
        }
      ?>


			<center>
			<table border='1' Class='tables'>
			<tr><th colspan="4"  class='tabletop'>Grade Trial Program</th></tr>
			<tr class='t1'><td>COURSE CODE</td><td>COURSE NAME</td><td>CREDIT</td><td>GRADE</td></tr>
			<tr class='t2'>
        <td>CSS226</td>
        <td>Scientific Computing</td>
        <td>3</td>
        <td>
        <select name="n1">
          <option value=" " <?php select(1,' ')?>> </option>
          <option value="4" <?php select(1,'4')?>>A</option>
          <option value="3.5" <?php select(1,'3.5')?>>B+</option>
          <option value="3" <?php select(1,'3')?>>B</option>
          <option value="2.5" <?php select(1,'2.5')?>>C+</option>
          <option value="2" <?php select(1,'2')?>>C</option>
          <option value="1.5" <?php select(1,'1.5')?>>D+</option>
          <option value="1" <?php select(1,'1')?>>D</option>
          <option value="0" <?php select(1,'0')?>>F</option>
          <option value="w" <?php select(1,'w')?>>W</option>
        </select>
      </td></tr>
			<tr class='t2'>
        <td>CSS321</td>
        <td>Theory of Computation</td>
        <td>3</td>
        <td><select name="n2">
          <option value=" " <?php select(2,' ')?>> </option>
          <option value="4" <?php select(2,'4')?>>A</option>
          <option value="3.5" <?php select(2,'3.5')?>>B+</option>
          <option value="3" <?php select(2,'3')?>>B</option>
          <option value="2.5" <?php select(2,'2.5')?>>C+</option>
          <option value="2" <?php select(2,'2')?>>C</option>
          <option value="1.5" <?php select(2,'1.5')?>>D+</option>
          <option value="1" <?php select(2,'1')?>>D</option>
          <option value="0" <?php select(2,'0')?>>F</option>
          <option value="w" <?php select(2,'w')?>>W</option>
        </select></td></tr>
			<tr class='t2'>
        <td>CSS331</td>
        <td>Fundamentals of Data Communications</td>
        <td>3</td>
        <td><select name="n3">
          <option value=" " <?php select(3,' ') ?>> </option>
          <option value="4" <?php select(3,'4') ?>>A</option>
          <option value="3.5" <?php select(3,'3.5') ?>>B+</option>
          <option value="3" <?php select(3,'3') ?>>B</option>
          <option value="2.5" <?php select(3,'2.5') ?>>C+</option>
          <option value="2" <?php select(3,'2') ?>>C</option>
          <option value="1.5" <?php select(3,'1') ?>>D+</option>
          <option value="1" <?php select(3,'1.5') ?>>D</option>
          <option value="0" <?php select(3,'0') ?>>F</option>
          <option value="w" <?php select(3,'w') ?>>W</option>
        </select></td></tr>
			<tr class='t2'>
        <td>ECS204</td>
        <td>Basic Electrical Engineering Laboratory</td>
        <td>1</td>
        <td><select name="n4">
          <option value=" " <?php select(4,' ') ?>> </option>
          <option value="4" <?php select(4,'4') ?>>A</option>
          <option value="3.5" <?php select(4,'3.5') ?>>B+</option>
          <option value="3" <?php select(4,'3') ?>>B</option>
          <option value="2.5" <?php select(4,'2.5') ?>>C+</option>
          <option value="2" <?php select(4,'2') ?>>C</option>
          <option value="1.5" <?php select(4,'1') ?>>D+</option>
          <option value="1" <?php select(4,'1.5') ?>>D</option>
          <option value="0" <?php select(4,'0') ?>>F</option>
          <option value="w" <?php select(4,'w') ?>>W</option>
        </select></td></tr>
			<tr class='t2'>
        <td>GTS202</td>
        <td>English Language Structures</td>
        <td>3</td>
        <td><select name="n5">
          <option value=" " <?php select(5,' ') ?>> </option>
          <option value="4" <?php select(5,'4') ?>>A</option>
          <option value="3.5" <?php select(5,'3.5') ?>>B+</option>
          <option value="3" <?php select(5,'3') ?>>B</option>
          <option value="2.5" <?php select(5,'2.5') ?>>C+</option>
          <option value="2" <?php select(5,'2') ?>>C</option>
          <option value="1.5" <?php select(5,'1') ?>>D+</option>
          <option value="1" <?php select(5,'1.5') ?>>D</option>
          <option value="0" <?php select(5,'0') ?>>F</option>
          <option value="w" <?php select(5,'w') ?>>W</option>
        </select></td></tr>
			<tr class='t2'>
        <td>ITS322</td>
        <td>Database Systems</td>
        <td>3</td>
        <td><select name="n6">
          <option value=" " <?php select(6,' ') ?>> </option>
          <option value="4" <?php select(6,'4') ?>>A</option>
          <option value="3.5" <?php select(6,'3.5') ?>>B+</option>
          <option value="3" <?php select(6,'3') ?>>B</option>
          <option value="2.5" <?php select(6,'2.5') ?>>C+</option>
          <option value="2" <?php select(6,'2') ?>>C</option>
          <option value="1.5" <?php select(6,'1') ?>>D+</option>
          <option value="1" <?php select(6,'1.5') ?>>D</option>
          <option value="0" <?php select(6,'0') ?>>F</option>
          <option value="w" <?php select(6,'w') ?>>W</option>
        </select></td></tr>
			<tr class='t2'>
        <td>ITS336</td>
        <td>Artificial Intelligence</td>
        <td>3</td>
        <td><select name="n7">
          <option value=" " <?php select(7,' ') ?>> </option>
          <option value="4" <?php select(7,'4') ?>>A</option>
          <option value="3.5" <?php select(7,'3.5') ?>>B+</option>
          <option value="3" <?php select(7,'3') ?>>B</option>
          <option value="2.5" <?php select(7,'2.5') ?>>C+</option>
          <option value="2" <?php select(7,'2') ?>>C</option>
          <option value="1.5" <?php select(7,'1') ?>>D+</option>
          <option value="1" <?php select(7,'1.5') ?>>D</option>
          <option value="0" <?php select(7,'0') ?>>F</option>
          <option value="w" <?php select(7,'w') ?>>W</option>
        </select></td></tr>
			<tr class='t2'>
        <td>ITS351</td>
        <td>Database Programming Laboratory</td>
        <td>1</td>
        <td><select name="n8">
          <option value=" " <?php select(8,' ') ?>> </option>
          <option value="4" <?php select(8,'4') ?>>A</option>
          <option value="3.5" <?php select(8,'3.5') ?>>B+</option>
          <option value="3" <?php select(8,'3') ?>>B</option>
          <option value="2.5" <?php select(8,'2.5') ?>>C+</option>
          <option value="2" <?php select(8,'2') ?>>C</option>
          <option value="1.5" <?php select(8,'1') ?>>D+</option>
          <option value="1" <?php select(8,'1.5') ?>>D</option>
          <option value="0" <?php select(8,'0') ?>>F</option>
          <option value="w" <?php select(8,'w') ?>>W</option>
        </select></td></tr>
			</table>
			<table border='1' Class='tables'>
			<tr class='t1'>
        <td width=250px>Current Grade Status</td>
        <td width=50px>C.Register<br>102</td>
        <td width=50px>C.Earn<br>82</td>
        <td width=50px>CL<br>82</td>
        <td width=50px>GP<br>317.5</td>
        <td width=50px>GPA<br>3.87</td>
        <td rowspan='2'><input type='submit' value='CALCULATE' width=50px></td></tr>
			<tr class='t2'>
        <td>Result From Grade Simulation</td>
        <td><?php echo $r; ?></td>
        <td><?php echo $c; ?></td>
        <td><?php echo $c; ?></td>
        <td><?php echo $gp; ?></td>
        <td><?php echo number_format($gp/$c,2); ?><br>
        </td></tr>
			</table>
			</center>
			</form>

        </div>
      </div>

    </div>
  </body>
</html>
