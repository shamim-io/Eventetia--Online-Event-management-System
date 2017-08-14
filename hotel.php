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
//<div style="position:relative;left:80px;top:2px;background-color:yellow;">

if($p2==$ar[0])
{	
	print "";
}
else
	//print "nothing";
	header("Location:verify1.php?a1=1");
	
$res1=mysql_query("select name from register where ID='$p1'");

$arr=mysql_fetch_row($res1);

//print " $arr[0]";

$_SESSION["name"]="$arr[0]";
?>



<html>
<head>
<title>Eventetia Locations</title>

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


/* -------------------------------- css gallery -------------------------------------------- */
div.gallery {
    margin: 9px;
    border: 2px solid #ccc;
    float: left;
    width: 300px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: 25%;
}

div.desc {
    padding: 20px;
    text-align: center;
}

</style>
</head>
<body>
	<ul>

		<li><a href="">Contact</a></li>
		<li><a href="">About</a></li>
		
		<li><a href="index.html">Home</a></li>
	</ul><br>
	
	<?php print "<p align=right><font size=5>Welcome $arr[0] </p> </font>"; ?>
	
	<b><marquee><font size=52 face="Edwardian Script ITC"> ------------------- Select a Location -------------------- </font></marquee><br>
	
	<div class="gallery">
  <a target="_blank" href="place_pics/1.jpg">
    <img src="place_pics/1.jpg" alt="Fjords" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Live Destination & data2=150000 ">Live Destination</a></font> &nbsp &nbsp <font color=red> Rs 1,50,000</font></div>
	</div>

<div class="gallery">
  <a target="_blank" href="place_pics/2.jpeg">
    <img src="place_pics/2.jpeg" alt="Forest" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Connect Residentia & data2=120000 ">Connect Residentia</a></font> &nbsp &nbsp <font color=red> Rs 1,20,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/3.jpg">
    <img src="place_pics/3.jpg" alt="Northern Lights" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Scarda International & data2=150000 ">Scarda International</a></font> &nbsp &nbsp <font color=red> Rs 1,50,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/4.jpg">
    <img src="place_pics/4.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Maurya Lok & data2=250000 ">Maurya Lok</a></font> &nbsp &nbsp <font color=red> Rs 2,50,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/5.jpg">
    <img src="place_pics/5.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Meenakshi Inn & data2=100000 ">Meenakshi Inn.</a></font> &nbsp &nbsp <font color=red> Rs 1,00,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/6.jpg">
    <img src="place_pics/6.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Greenland Inn. & data2=200000 ">Greenland Inn.</a></font> &nbsp &nbsp <font color=red> Rs 2,00,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/7.jpg">
    <img src="place_pics/7.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Wonderland Inn & data2=800000 ">Wonderland Inn.</a></font> &nbsp &nbsp <font color=red> Rs 8,00,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/8.jpg">
    <img src="place_pics/8.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Holly Cruise & data2=450000 ">Holly Cruise</a></font> &nbsp &nbsp <font color=red> Rs 4,50,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/9.jpg">
    <img src="place_pics/9.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=My World & data2=550000 ">My World</a></font> &nbsp &nbsp <font color=red> Rs 5,50,000</font></div>
</div>

<div class="gallery">
  <a target="_blank" href="place_pics/10.jpg">
    <img src="place_pics/10.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc"><font face="Times New Roman"><a href="./require.php?data=Dreamland Palace & data2=1000000 ">Dreamland Palace</a></font> &nbsp &nbsp <font color=red> Rs 10,00,000</font></div>
</div>

</body>
</html>




