<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>customer Password Change</title>
</head>

<body >
<form action ="pwdchange.php" method="post">
<table>
	<tr>
    	<td>Enter old password</td>
        <td><input type="password" name="op"></td>
    </tr>
    <tr>
    	<td>Enter new password</td>
        <td><input type="password" name="np"></td>
    </tr>
     <tr>
    	
        <td><input type="submit" name="k" ></td>
    </tr>
    </table>
    </form>
</body>
</html>