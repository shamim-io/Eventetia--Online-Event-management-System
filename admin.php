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
    background-color: #F5F6CE;
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

<?php
$a1=$_GET["a1"];

if($a1==1)
	print "<font color=red><b> <p align=center>Username or password is incorrect.</p> </font>";
unset($a1);

$_SESSION["EVENT"]="$data";

?>
<div>

<p align= center><b><font size=6 face="Times New Roman">Hello Administrator</font> </b></p><br><br>
<form action="admin_check.php" method=post>
<b><font size=5>Admin ID &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp <input type=text name="p1" required="true" size=20 placeholder="Enter Admin ID"><br><br>
Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type=password name="p2" required="true" size=20 placeholder="Enter Password"><br><br>
<input type=submit>&nbsp &nbsp &nbsp &nbsp
<input type=reset> &nbsp &nbsp &nbsp &nbsp

</b>
</font>

</div>
</form>
</body>
</html>