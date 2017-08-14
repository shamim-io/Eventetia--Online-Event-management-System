<?php

$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];


$l=mysql_connect("localhost","root","root");
if(!$l)
	die("couldnt connect");

mysql_select_db("eventetia")
or die("couldnt conect to the database");

$res=mysql_query("insert into message values('$p1', '$p2', '$p3', '$p4', '$p5')");
					

	//print "<a href="verify1.php">Back to LOGIN page</a>";
?>