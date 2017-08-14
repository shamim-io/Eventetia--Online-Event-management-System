<?php
session_start();
?>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 10;
    overflow: hidden;
    background-color: #2E2E2E;
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
    background-color:#F5F6CE;
    padding: 50px;
	width: 50%;
	position: absolute;
	left: 300px;
	top: 100px;
}
</style>
</head>
<body>
<ul>

		<li><a href="">Contact</a></li>
		<li><a href="">About</a></li>
		
		<li><a href="index.html">Home</a></li>
</ul><br>
<div>

<p align =center><font size=6><b>INVOICE</b></font></p>
<?php

$p11=$_SESSION["name"];

$guest=$_POST["p2"];
$date=$_POST["p3"];
$p1=$_POST["DJ"];
$p2=$_POST["Stage"];
$p3=$_POST["Mike and Speakers"];
$p4=$_POST["breakfast"];
$p5=$_POST["lunch"];
$p6=$_POST["tea"];
$p7=$_POST["dinner"];
$p8=$_POST["s3"];
$p9=$_POST["s4"];
$p10=$_POST["s5"];

$price= $_SESSION["Hotel_price"];



$total=($price+$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10);

$l=mysql_connect("localhost","root","root");
if(!$l)
	die("couldnt connect to the mysql");

mysql_select_db("eventetia")
or die("couldnt connect to the database");


$res=mysql_query("insert into calculator (DJ, Stage, Mike_and_Speaker, Breakfast, Lunch, Tea_and_Snack, Dinner, Lightning, Flowers, Seating, name, hotel_price,date,total) 
				values('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10', '$p11','$price','$date','$total')");
				
$res1=mysql_query("select * from calculator where name='$p11'");

$event= $_SESSION["EVENT"];

/*while($ar=mysql_fetch_row($res1))
{
print "<tr><td>$ar[0]</td><td>$ar[1]</td></tr>";
}*/
print " <b>Event Selected:</b> $event"; print "<br><br>";
print " <b>No of Guest:</b> $guest"; print "<br><br>";
print "<b> Date of Event:</b> $date"; print "<br><br>";
print "<b> DJ:</b> Rs. $p1"; print "<br><br>";
print "<b> Stage opted: </b>Rs. $p2"; print "<br><br>";
print "<b> Mike & Speakers: </b>Rs. $p3"; print "<br><br>";
print "<b> Breakfast: </b> Rs. $p4"; print "<br><br>";
print "<b> Lunch:</b>Rs. $p5"; print "<br><br>";
print "<b> Tea: </b> Rs. $p6"; print "<br><br>";
print "<b> Dinner:</b> Rs. $p7"; print "<br><br>";
print "<b> Lightning:</b> Rs. $p8"; print "<br><br>";
print "<b> Flowers: </b> Rs. $p9"; print "<br><br>";
print "<b> Seating: </b> Rs. $p10"; print "<br><br>";

print "<b> Your total Expenditure: </b> Rs. $total  INR"; print "<br><br>";
//print "$price";
		
?>

<a href="payment.html"><b><p align=center> SECURE PAY </p></b></a>
</div>
</body>
</html>