<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Customer update details</title>

</head>

<body >

<?php include ('config.php');
 
	#connection code
	
	$id=$_GET['id'];
	$statement="SELECT * FROM customer_details WHERE ID='$id'";
	
	$exec=mysqli_query($con,$statement) or die(mysqli_error($con));
	
	$row=mysqli_fetch_array($exec);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Informations</title>
<link href="animation6.css" rel="stylesheet" type="text/css">
</head>

<body background="piggy_bank_image_via_shutterstock.jpg>
<form  method="post">
<div class="imgcontainer">
    <img src="bank.jpg" alt="bank" class="bank">
  </div>
  <div class="container" align='center'
  >
<table>
	<tr>
    	<td><b>Name</b></td>
        <td><input type="text" name="n" value="<?php echo $row['NAME']?>"></td>
    </tr>
    <tr>
    	<td><b>Gender</b></td>
        <td><input type="radio" name="gender" value="male">Male
         <input type="radio" name="gender" value="female">Female 
        <input type="radio" name="gender" value="others">Others</td>
       
    </tr>
    <tr>
    
    	<td><b>Email</b></td>
        <td><input type="email" name="em" value="<?php echo $row['EMAIL']?>"></td>
    </tr>
    <tr>
    	<td><b>Phone</b></td>
        <td><input type="text" name="p" value="<?php echo $row['MOBILE']?>"></td>
    </tr>
    
    
    <tr>
    	<td><b>Address</b></td>
        <td><textarea name="addr"></textarea></td>
    </tr> <tr>
    <td><b>Profile Picture</b></td>
    <td><input type="file" name ="picture"></td>
    </tr>
    <tr>
    	<td><b>Aadhaar No</b></td>
        <td><input type="text" name="aadh" value="<?php echo $row['AADHAR']?>"></td>
    </tr>
     <tr>
    	<td><b>Pan No</b></td>
        <td><input type="text" name="pan" value="<?php echo $row['PAN']?>"></td>
    </tr>
   
    <tr>
    
    
        <td><button type="submit" name="k" value="UPDATE">UPDATE</button></td>
        <td><button type="submit" name="k1" value="RESET">RESET</button></td>
        
    </tr>
    </table>
    </form>
    <?php
    if(isset($_POST['k'])){
	#connction
	include ('config.php');
	
	$name = $_POST['n'];
	$gender = $_POST['gender'];
	$email = $_POST['em'];
	$phone = $_POST['p'];
	$address = $_POST['addr'];
	$aadhar = $_POST['aadh'];
	$pan= $_POST['pan'];
	
	
	 #update code
	 #prepare statement
	 $prepare = "UPDATE customer_details SET NAME = '$name' , GENDER = '$gender',EMAIL = '$email',MOBILE = '$phone',ADDRESS= '$address',AADHAR = '$aadhar',PAN = '$pan' WHERE ID = '$id'";
	 #execute
	 $exec = mysqli_query($con,$prepare) or die(mysqli_error($con));
	if($exec==1){
		?><script>
		alert('Data Updated Successfully');
		window.location.href="view.php";
		
		</script><?php
	}
}
	 



?>

</body>
</html>
</body>
</html>

    
    
