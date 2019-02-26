<?php include ('config.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
<link href="animation.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" enctype = "multipart/form-data">
<div class="imgcontainer">
    <img src="bank.jpg" alt="bank" class="bank">
  </div>
  <div class="container" align='center'
  >
<table align="center">
<tr>
<td><b>Email</b></td>
<td>
<input type="email" name="em">
</td>
</tr>
<tr>
<td><b>Password</b></td>
<td>
<input type="password" name="pass">
</td>
</tr>
<tr>
<td>
<input type="submit" name="login" value="Login" border="3" style="background-color:#093" >
</td>
</tr>
</table>

</form>
<?php
if(isset($_POST['login']))
{
	$email=$_POST['em'];
	$pwd=$_POST['pass'];
	if(empty($_POST))
	{
		die("All fields are required");
	}
	//verify user
	$verify=mysqli_query($con, " SELECT * FROM customer_details WHERE EMAIL='$email' AND PASSWORD='$pwd'") or die(mysqli_error($con));
	//check if user valid or not
	if(mysqli_num_rows($verify)==1)
	{
		//start the session
		session_start();
		//stores the user data in servr temporary cache i.e. SESSION
		$_SESSION['user']=NULL;
		$userData=mysqli_fetch_array($verify);
		$_SESSION['user']=$userData;
		//rediect the user to home page
		header('location:home.php');
		exit;
	}
	else
	{
		echo"<p style='color:red'> Invalid email or password</p>";
	}
}
?>
<?php
	if(isset ($_GET['loggedout'])){
		echo"<p style='color:green;background-color:lightyellow'>You have been successfully logged out</p>";
	}
	?> 
</body>
</html>