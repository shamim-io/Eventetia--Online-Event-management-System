<?php

$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");


mysql_select_db("eventetia")
or die ("could not connect to database");


$res=mysql_query("select * from register");


$nr=mysql_num_rows($res);

print "There are currently <b>$nr</b> number of rows";
print "<table border=1>";
print "<tr><th>UserID</th><th>Customer Name</th><th>Address</th><th>Mobile No</th><th>Email</th><th>Password</th>";
print "<th>Edit</th>";
print "<th><font color='Red'>Delete</font></th></tr>";

while ($ar=mysql_fetch_array($res))
{
print "<tr><td>$ar[0]</td><td>$ar[1]</td><td>$ar[2]</td><td>$ar[3]</td><td>$ar[4]</td><td>$ar[5]</td>";
echo "<td><a href='edit.php?id=" . $ar['ID'] . "'>Edit</a></td>";

echo "<td><a href='delete.php?id=" . $ar['ID'] . "'>Delete</a></td>";

echo "</tr>";
}
print "</table>";
?>