<?php
$adminID=$_POST["p1"];
$pass=$_POST["p2"];


$l=mysql_connect("localhost","root","root");

if(!$l)
	die ("couldnt connect to the mysql");

mysql_select_db("eventetia")
or die("couldnt connect to the database");

$res=mysql_query("select password from admin where userID='$adminID'");

$nr=mysql_num_rows($res);
if($nr==0)
{
	header("Location:admin.php?a1=1");
}

$ar=mysql_fetch_row($res);

//print "$nr[0]";
//<div style="position:relative;left:80px;top:2px;background-color:yellow;">

if($pass==$ar[0])
{	
	print "";
}
else
	//print "nothing";
	header("Location:admin.php?a1=1");

?>


<html>
<head>
<title>Eventetia Welcome User</title>

<style>
/*------------------------------------css UL ------------------------------------*/

ul {
    list-style-type: none;
    margin: 0;
    padding: 10;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

li a:hover {
    background-color: 808C89;
}

li {
    border-right: 1px solid #bbb;
}

div {
    border-radius: 5px;
    background-color: #CEF6E3;
    padding: 50px;
	width: 50%;
	position: absolute;
	left: 300px;
	top: 170px;
}
input[type=text], [type=password], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit], [type=reset] {
    width: 30%;
    background-color: #21610B;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #688A08;
}

input[type=reset]:hover {
    background-color: #688A08;
}

</style>
</head>
<body>

<ul>
		<li><a href="">Contact</a></li>
		<li><a href="">About</a></li>
		
		<li><a href="index.html">Home</a></li>
</ul><br>

<h2><a href="registration_table.php"><p align=center>Customer Registration Details</p></a></h2>
<h2><a href="calculator_table.php"><p align=center>Customer Booking and Payment Details</p></a></h2>
<h2><a href="message_table.php"><p align=center>Customer Queries and Messages</p></a></h2>

</body>
</html>