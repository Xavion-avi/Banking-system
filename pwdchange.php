<?php session_start();
include ('config.php');
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pwd Change</title>
</head>

<body background="piggy_bank_image_via_shutterstock.jpg >

<?php 
$op=$_POST['op'];
$np=$_POST['np'];
$id=$_SESSION['user']['ID'];
$ops=$_SESSION['user']['PASSWORD'];

if($op==$ops)
{
	$sql="UPDATE customer_details SET PASSWORD = '$np' WHERE ID='$id' ";
	$exec = mysqli_query($con,$sql) or die(mysqli_error($con));
	echo'Password changed successfully';

}?>
<br/><a href="home.php">Go Back to Home Page</a>
    <?php










?>
</body>
</html>