<?php
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");


mysql_select_db("eventetia")
or die ("could not connect to database");

$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];

$query1=mysql_query("insert into message values('$p1','$p2','$p3','$p4')");
if($query1)
{
header('location:index.html');
}