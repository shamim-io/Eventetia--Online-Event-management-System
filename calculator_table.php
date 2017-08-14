<?php

$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");


mysql_select_db("eventetia")
or die ("could not connect to database");


$res=mysql_query("select * from calculator");


$nr=mysql_num_rows($res);

print "There are currently <b>$nr</b> number of rows";
print "<table border=1>";
print "<tr><th>Bill No</th><th>DJ</th><th>Stage</th><th>Mike and Speaker</th><th>Breakfast</th><th>Lunch</th><th>Tea and Snack</th><th>Dinner</th><th>Lightning</th><th>Flowers</th><th>Seating</th><th>Name</th><th>Hotel Price</th><th>Date</th><th>Total</th></tr>";

while ($ar=mysql_fetch_row($res))
{
print "<tr><td>$ar[0]</td><td>$ar[1]</td><td>$ar[2]</td><td>$ar[3]</td><td>$ar[4]</td><td>$ar[5]</td><td>$ar[6]</td><td>$ar[7]</td><td>$ar[8]</td><td>$ar[9]</td><td>$ar[10]</td><td>$ar[11]</td><td>$ar[12]</td><td>$ar[13]</td><td>$ar[14]</td></tr>";
}
print "</table>";
?>