<html>
<head>
<style type="text/css">
.tables { background: #FFFFF; color:#000CB5; width:700px; text-align:center;}
.tabletop { background: #9E8ABE; color:#000000;}
.t1 { background: #E5E0FF; width:200px; height:25px; color:#000000;}
.t2 { background: #F0F1FF;}
.t3 { background: #E5E0FF; width:200px; height:25px; color:#000000;}
.t4 { background: #F0F1FF;}
.semester { background: #000658; color:#FFFFFF;}


</style>
</head>
<body>
<form action="calc.php" method="POST">
<input type="hidden"  name="cre1" value='3'>




<?php $r=102;$c=82;$gp=317.5;?>
<?php if($_POST['n1']!=0){$r=$r+3;$c=$c+3;$gp=$gp+$_POST['n1']*3;} ?>
<?php if($_POST['n2']!=0){$r=$r+3;$c=$c+3;$gp=$gp+$_POST['n2']*3;} ?>
<?php if($_POST['n3']!=0){$r=$r+3;$c=$c+3;$gp=$gp+$_POST['n3']*3;} ?>
<?php if($_POST['n4']!=0){$r=$r+1;$c=$c+1;$gp=$gp+$_POST['n4']*1;} ?>
<?php if($_POST['n5']!=0){$r=$r+3;$c=$c+3;$gp=$gp+$_POST['n5']*3;} ?>
<?php if($_POST['n6']!=0){$r=$r+3;$c=$c+3;$gp=$gp+$_POST['n6']*3;} ?>
<?php if($_POST['n7']!=0){$r=$r+3;$c=$c+3;$gp=$gp+$_POST['n7']*3;} ?>
<?php if($_POST['n8']!=0){$r=$r+1;$c=$c+1;$gp=$gp+$_POST['n8']*1;} ?>





<center>
<table border='1' Class='tables'>
<tr><th colspan="4"  class='tabletop'>Grade Trial Program</th></tr>
<tr class='t1'><td>COURSE CODE</td><td>COUSENAME</td><td>CREDIT</td><td>GRADE</td></tr>
<tr class='t2'><td>CSS226</td>	<td>Scientific Computing</td>						<td>3</td>	<td><select name="n1"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
<tr class='t2'><td>CSS321</td>	<td>STheory of Computation</td>						<td>3</td>	<td><select name="n2"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
<tr class='t2'><td>CSS331</td>	<td>Fundamentals of Data Communications</td>		<td>3</td>	<td><select name="n3"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
<tr class='t2'><td>ECS204</td>	<td>Basic Electrical Engineering Laboratory</td>	<td>1</td>	<td><select name="n4"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
<tr class='t2'><td>GTS202</td>	<td>English Language Structures</td>				<td>3</td>	<td><select name="n5"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
<tr class='t2'><td>ITS322</td>	<td>Database Systems</td>							<td>3</td>	<td><select name="n6"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
<tr class='t2'><td>ITS336</td>	<td>Artificial Intelligence</td>					<td>3</td>	<td><select name="n7"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
<tr class='t2'><td>ITS351</td>	<td>Database Programming Laboratory</td>			<td>1</td>	<td><select name="n8"><option value="0"> </option><option value="4">A</option><option value="3.5">B+</option><option value="3">B</option><option value="2.5">C+</option><option value="2">C</option><option value="1.5">D+</option><option value="1">D</option><option value="0">F</option><option value="0">W</option></select></td></tr>
</table>

<table border='1' Class='tables'>
<tr class='t1'><td width=250px>Current Grade Status</td><td width=50px>C.Register<br>102</td><td width=50px>C.Earn<br>82</td><td width=50px>CL<br>82</td><td width=50px>GP<br>317.5</td><td width=50px>GPA<br>3.87</td><td rowspan='2'><input type='submit' value='CALCULATE' width=50px></td>></tr>
<tr class='t2'><td>Result From Grade Simulation</td><td><?php echo $r; ?></td><td><?php echo $c; ?></td><td><?php echo $c; ?></td><td><?php echo $gp; ?></td><td><?php echo $gp/$c; ?><br></td></tr>
</table>
</center>






</form>
</body>
</html>