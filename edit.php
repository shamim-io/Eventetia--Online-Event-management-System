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
	$ID=$_GET['id'];
	echo "Customer ID: $ID";
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$query3=mysql_query("update register set name='$name', address='$address', mobile='$mobile', email='$email', password='$password' where ID='$ID'");

		if($query3)
		{
			header('location:registration_table.php');
		}
	}

$query1=mysql_query("select * from register where id='$ID'");
$query2=mysql_fetch_array($query1);

?>


<form method="post" action="">
<pre>
Customer Name:		<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br /> <br />
Address:		<input type="text" name="address" value="<?php echo $query2['address']; ?>" /><br /><br />

Mobile No:		<input type="number" name="mobile" value="<?php echo $query2['mobile']; ?>" /><br /><br />

Email:			<input type="email" name="email" value="<?php echo $query2['email']; ?>" /><br /><br />

Password:		<input type="password" name="password" value="<?php echo $query2['password']; ?>" /><br /><br />

			<input type="submit" name="submit" value="update" />
</form>

</pre>
<?php
}
?>
</body>
</html>