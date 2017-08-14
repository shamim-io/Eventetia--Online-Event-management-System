<?php
session_start();
?>

<?php

$p1=$_POST["p1"];
$p2=$_POST["p2"];

$l=mysql_connect("localhost","root","root");

if(!$l)
	die ("couldnt connect to the mysql");

mysql_select_db("eventetia")
or die("couldnt connect to the database");

$res=mysql_query("select password from register where ID='$p1'");

$nr=mysql_num_rows($res);
if($nr==0)
{
	header("Location:verify1.php?a1=1");
}

$ar=mysql_fetch_row($res);

//print "$nr[0]";


if($p2==$ar[0])
{	
	print "Welcome ";
}
else
	//print "nothing";
	header("Location:verify1.php?a1=1");
	
$res1=mysql_query("select name from register where ID='$p1'");

$arr=mysql_fetch_row($res1);

print " $arr[0]";

$_SESSION["name"]="$arr[0]";
?>

<html>
<head>
	BOOK AN EVENT
</head>
<body>
<form action="require.php" method=get>
Event type <select name=p1>
<option value=Marraige>Marraige</option>
<option value=Family>Family Function</option>
<option value=Birthday>Birthday Party</option>
<option value=Anniversary>Anniversary Party</option>
<option value=Farewell>Farewell Party</option>
<option value=College>College Party</option>
</select><br><br>

No. of Guest <input type=number name=p2><br><br>
Date <input type=date name=p3><br><br>
<input type=submit >
</form>


</body>
</html>