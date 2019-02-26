<?php session_start();
//check if session(user) is running or not
$row=$_SESSION['user'];
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
<link href="animation5.css" rel="stylesheet" type="text/css">
</head>

<body background="piggy_bank_image_via_shutterstock.jpg">
<div class="imgcontainer">
    <img src="bank.jpg" alt="bank" class="bank">
  </div>
  <div class="container" align='center'
  >
<?php 
echo "Welcome Mr/Mrs. ".$_SESSION['user']['NAME'];
//echo "Your Account Number is:".$_SESSION['user']['ACCOUNT'];
?>
<table border="1" bgcolor="#000000">
<tr>
<td><button><a href="logout.php" style="color:#C00" >Logout</a></button></td>
<td><button><a href="edit_profile.php?id=<?php echo $row['ID']?>" >Update</a></button></td>
<td><button><a href="view.php" style="color:#C00">Profile</a></button></td>
<td><button><a href="customer_pwdchange.php" style="color:#C00">Change Password</a></button></td>
<td><button><a href="transactions.php" style="color:#C00">Transactions</a></button></td>
</tr>
</table>
</body>
</html>