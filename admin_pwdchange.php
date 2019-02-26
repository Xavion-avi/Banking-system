<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Password Change</title>
<link href="animation4.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action ="pwdchange.php" method="post">
<div class="imgcontainer">
     <img src="bank.jpg" alt="bank" class="bank">
  </div>
  

  <div class="container" align="center">
<table>
	<tr>
    	<td><b>Enter old password</b></td>
        <td><input type="password" name="op"></td>
    </tr>
    <tr>
    	<td><b>Enter new password</b></td>
        <td><input type="password" name="np"></td>
    </tr>
     <tr>
    	
        <td><button type="submit" name="k" >Submit</button></td>
    </tr>
    </table>
    </form>
</body>
</html>