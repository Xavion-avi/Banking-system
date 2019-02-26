<?php session_start(); ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin home page</title>
<link href="animation1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="imgcontainer">
    <img src="bank.jpg" alt="bank" class="bank">
  </div>
  <div class="container" align="center">
</body>
<?php 
echo "<p style='color: blue' align='center'>Welcome Mr/Mrs ". $_SESSION['admin']['NAME'] . ". You are logged in as admin";
?>
<table bgcolor="#CCCCCC" cellpadding="1px" border="1"  bordercolor="#00CC00"  align="center" >
<tr>
<td><a href="admin_view.php"><p style="color:#003">View all customer details</p></a></td>
<td><a href="transactions.php"><p style="color:#003">View all transactions</p></a></td>
<td><a href="admin_pwdchange.php"><p style="color:#003">Change Password</p></a></td>
<td><a href="admin_logout.php"><p style="color:#003">Logout</p></a></td>

</tr>
</table>
<?php
	if(isset ($_GET['loggedout'])){
		echo"<p style='color:green;background-color:lightyellow'>You have been successfully logged out</p>";
	}
	?> 

</html>