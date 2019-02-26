<?php
//connection code
$username ='root';
$password = '';
$host='localhost';
$dbname='e_banking';
#create the linker
$con=mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($con));
if($con){
		echo 'Connection Established';
}
?>
<br />
