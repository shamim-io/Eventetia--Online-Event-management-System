<?php

$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];

$l=mysql_connect("localhost","root","root");
if(!$l)
	die("couldnt connect");

mysql_select_db("eventetia")
or die("couldnt conect to the database");

$res=mysql_query("insert into register (name, address, mobile, email, password) 
					values('$p1', '$p2', '$p3', '$p4', '$p5')");
					
$res1=mysql_query("select ID from register where password='$p5'");
$nr=mysql_fetch_row($res1);

	print "<b><p align=center>Login Successful. Your Login ID is $nr[0]";

	//print "<a href="verify1.php">Back to LOGIN page</a>";

?>
<br><br>
<a href="verify1.php">Back to LOGIN page</a></p>
