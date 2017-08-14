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
    background-color:#F5F6CE;
    padding: 50px;
	width: 50%;
	position: absolute;
	left: 300px;
	top: 100px;
}
input[type=text], [type=password], [type=number], [type=date], select {
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

<div>

<?php


if(isset($_GET["data"]) && isset($_GET["data2"]))
{
	$data=$_GET["data"];
	$data2=$_GET["data2"];
	
}

print "<head><b><p align=center><font size=6>SELECT YOUR PREFERENCES</p></b></font></head>";
print "<br>";
print "<b>Hotel Selected:</b> &nbsp &nbsp &nbsp &nbsp $data";
print "<br><br>";
print "<b>Price of Hotel: </b>&nbsp &nbsp &nbsp &nbsp $data2";

$_SESSION["Hotel_price"]="$data2";

//print $_SESSION["name"];

?>

<form action="calculate.php" method=post>
<b>
No. of Guest: </b> &nbsp &nbsp &nbsp &nbsp &nbsp   <input type=number name=p2 required=true><br><br>
<b> Date: </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type=date name=p3 required=true><br><br>

<b> Equipments: </b> &nbsp &nbsp &nbsp &nbsp &nbsp <input type=checkbox name="DJ" value="50000"> DJ 
			<input type=checkbox name="Stage" value="20000"> Stage
			<input type=checkbox name="Mike and Speakers" value="32000"> Mike and Speakers <br><br>
			
<b> Food: </b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp	<input type=radio name="v1" value="150000"> Veg
		<input type=radio name="v1" value="300000"> Veg & Non Veg<br><br>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<input type=checkbox name="breakfast" value="10000"> BreakFast
	<input type=checkbox name="lunch" value="34000"> Lunch
	<input type=checkbox name="tea" value="5000"> Tea & Snacks
	<input type=checkbox name="dinner" value="40000"> Dinner <br><br>
	
<b> Lunch Type: </b> &nbsp &nbsp &nbsp &nbsp &nbsp <select name=s1>
	<option value=normal>Normal</option>
	<option value=deluxe>Deluxe</option>
	<option value=royal>Royal</option>
	</select><br><br>
<b> Dinner Type: </b>  &nbsp &nbsp &nbsp &nbsp &nbsp<select name=s2>
	<option value=normal>Normal</option>
	<option value=deluxe>Deluxe</option>
	<option value=royal>Royal</option>
	</select>
			
<h2><p align=center>Decoration</p></h2> 

<b> Lightnings: </b> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp	<select name=s3>
	<option value=0>No</option>
	<option value=10000>Normal</option>
	<option value=18000>Deluxe</option>
	<option value=32000>Royal</option>
	</select><br>
<b> Flowers: </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <select name=s4>
	<option value=0>No</option>
	<option value=5000>Yes</option>
	</select><br>
	
<b> Seating: </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <select name=s5>
	<option value=0>No</option>
	<option value=15300>Chair</option>
	<option value=22000>Chair & Sofa</option>
	</select> <br><br>
	
<input type=submit value=Calculate> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type=reset value=Clear>
</form>
</div>
</body>
</html>