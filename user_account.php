<?php session_start();
//check if session(user) is running or not

if(!isset($_SESSION['user']))
{
	//if not  then redirect user block to login page
	header('location:index.php?loginagain');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
</head>

<body  background="piggy_bank_image_via_shutterstock.jpg>
<table border="1" bgcolor="#000000">
<tr>
<?php 
echo "Welcome Mr/Mrs. ".$_SESSION['user']['NAME'];
echo "Your Account Number is:".$_SESSION['user']['ACCOUNT'];
?>
<table border="1" bgcolor="#000000">
<tr>
<td><a href="logout.php" style="color:#FFF" >Logout</a></td>
<td><a href="edit_profile.php" style="color:#FFF">Update</a></td>
<td><a href="view.php" style="color:#FFF">Profile</a></td>
<td><a href="password.php" style="color:#FFF">Change Password</a></td>
</tr>
</table>
</tr>
</table>
</body>
</html>