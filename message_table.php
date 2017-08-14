<?php

$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");


mysql_select_db("eventetia")
or die ("could not connect to database");


$res=mysql_query("select * from message");


$nr=mysql_num_rows($res);

print "There are currently <b>$nr</b> number of Messages <br><br>";
print "<table border=1>";
print "<tr><th>Customer Name</th><th>Email ID</th><th>Subject</th><th>Message</th>";
echo "</tr>";

while ($ar=mysql_fetch_array($res))
{
print "<tr><td>$ar[0]</td><td>$ar[1]</td><td>$ar[2]</td><td>$ar[3]</td>";

echo "</tr>";
}
print "</table>";
?>