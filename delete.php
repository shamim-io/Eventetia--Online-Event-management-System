<html>
<body>
<?php
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");


mysql_select_db("eventetia")
or die ("could not connect to database");



if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from register where ID='$id'");
if($query1)
{
header('location:registration_table.php');
}
}
?>
</body>
</html>