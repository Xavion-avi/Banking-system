<?php include ('config.php'); ?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin_signup</title>
<link href="animation.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post">
<div class="imgcontainer">
    <img src="bank.jpg" alt="bank" class="bank">
  </div>
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="admin_name" required>

    <label for="psw"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="admin_em" required>
    
    <label for="em"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="admin_pass" required>

    <button type="submit" name="k">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
   <?php 
	 if(isset($_POST['k'])){
 	
	$ad_n=$_POST['admin_name'];
	$ad_em=$_POST['admin_em'];
	$ad_p=$_POST['admin_pass'];
	
	$signup="INSERT INTO admin_details VALUES('$ad_em','$ad_p','$ad_n')";
    $exec=mysqli_query($con,$signup) or die(mysqli_error($con));
	if($exec==1)
	{
		echo"<p style='color:green;background-color:lightyellow'><strong>DATA SAVED SUCCESFULLY</p>";
	}}
	?>
    
</body>
</html>
