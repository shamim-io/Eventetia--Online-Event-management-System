<?php
SESSION_START();
?>


<?php 

$name=$_SESSION["name"];
print "<p align=center> <b> <font size=6>";
print " Thank you for Choosing us $name <br><br>";

$l=mysql_connect("localhost","root","root");

if(!$l)
	die("couldnt connect to mysql");

mysql_select_db("eventetia")
or die("couldnt connect to the databsse");

$res=mysql_query("select Bill_no from calculator where name='$name' order by Bill_no desc limit 1  ");

print "Payment Successful! ";

$nr=mysql_fetch_row($res);
print "Your Booking ID is</b> <font color=red> $nr[0] </font> <br>";

$res1=mysql_query("select total from calculator where name='$name' order by Bill_no desc limit 1");
$nr1=mysql_fetch_row($res1);

print " <b>You payed a sum of</b> <font color=red> Rs. $nr1[0] </font> <br><br>";
print "</p></font>";

	//print "<a href="index.html">Back to LOGIN page</a>";
?>

<b><p align=center><font color="blue"><a href="index.html">LOGOUT</font></b></p></a>