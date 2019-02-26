<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aadhar+PAN+3 minutes=Alfa Savings Account</title>
<link href="animation.css" rel="stylesheet" type="text/css">
</head>

<body >
<form action ="saveData.php" method="post"  enctype = "multipart/form-data">
<div class="imgcontainer">
    <img src="bank.jpg" alt="bank" class="bank">
  </div>
  <div class="container" align="center">
  
<table align="center">
	<tr>
    <td><b>Name</b></td>
        <td><input type="text" name="n" placeholder="Enter your full name in block letter"></td>
    </tr>
    	<td><label for="em"><b>Gender</b></label></td>
        <td><input type="radio" name="gender" value="male">male
       <input type="radio" name="gender" value="female">female 
      <input type="radio" name="gender" value="others">others</td>

    <tr>
    
    	<td><b>Email</b></td>
        <td><input type="email" name="em" placeholder="Enter your email id"></td>
    </tr>
    <tr>
    	<td><b>Phone</b></td>
        <td><input type="text" name="p" placeholder="Enter your mobile no"></td>
    </tr>
    <tr>
    	<td><b>Password</b></td>
        <td><input type="password" name="pass"></td>
    </tr>
    <tr>
    	<td><b>Confirm Password</b></td>
        <td><input type="password" name="pwd"></td>
    </tr>
    <tr>
    	<td><b>Address</b></td>
        <td><textarea name="addr"></textarea></td>
    </tr>
    <tr>
    	<td><b>Aadhaar No</b></td>
        <td><input type="text" name="aadh" placeholder="Enter your aadhar no"></td>
    </tr>
     <tr>
    	<td><b>Pan No</b></td>
        <td><input type="text" name="pan" placeholder="Enter your pan no"></td>
    </tr>
    <tr>
    <tr>
    <td><b>Profile Picture</b></td>
    <td><input type="file" name ="picture"></td>
    </tr>
    <tr>
    
    <td> <button type="submit" value="RESET">REGISTER</button></td>
        
        <td><button type="submit" name="k1" value="RESET">RESET</button></td>
        
        
    </tr>
    </table>
    </form>
 <?php
	if(isset ($_GET['done'])){
		echo"<p style='color:green;background-color:lightyellow'>DATA SAVED SUCCESFULLY</p>";
	}
	?>


</body>
</html>
