<?php include('config.php') ;
		session_start();
		?>
<!doctype html>
<html>
<head>
	
<meta charset="utf-8">
<title>Transaction</title>
</head>

<body>
	<form method="post">
		<table>
			<tr>
				<td>Your Account Number</td>
				<td><input type="text" name="ac" ></td>
			</tr>
			<tr>
				<td>Beneficiary &nbsp; Account &nbsp; No.</td>
				<td><input type="number" name="ban"></td>
			</tr>
			<tr>
				<td>Confirm &nbsp; Beneficiary &nbsp; Account No.</td>
				<td><input type="number" name="noo"></td>
			</tr>
            <tr>
				<td>Date</td>
				<td><input type="text" name="date"></td>
			</tr>
			<tr>
				<td>Amount</td>
				<td><input type="number" name="amt"></td>
			</tr>
			<tr>
				<td>Account &nbsp; Type</td>
				<td><input type="radio" name="acc" value="Savings">Savings
                    <input type="radio" name="acc" value="Current">Current</td>
			</tr>
			<tr>
				<td><input type="submit" name="k" value="Transfer"></td>
			</tr>
		</table>
	</form>
    
     <?php 
	 if(isset($_POST['k'])){
 	$id=$_SESSION['user']['ID'];
	$ac=$_POST['ac'];
	$ban=$_POST['ban'];
	$date=$_POST['date'];
	$amt=$_POST['amt'];
	$acc=$_POST['acc'];
	$accbal=$_SESSION['user']['BALANCE'];
	if($accbal>=$amt)
	{
			$rembal=$accbal-$amt;
			$signup="INSERT INTO transactions VALUES('0','$ac','$ban','$date','$amt','$acc')";
   		 	$exec=mysqli_query($con,$signup) or die(mysqli_error($con));
				if($exec==1)
				{
						echo"<p style='color:green;background-color:lightyellow'><strong>TRANSACTION DETAILS SAVED SUCCESFULLY</p>";  
						
	             } 
		     $up="UPDATE customer_details SET BALANCE= '$rembal' WHERE ID ='$id'";
			 $exec1=mysqli_query($con,$up) or die(mysqli_error($con));
			 if($exec==1)
				{
						echo"<p style='color:green;background-color:lightyellow'><strong>BALANCE UPDATEDs</p>";  
						
	             }          
	}
	else
	{
		echo "Insufficient Balance!";
		?>
        <a href="transactions.php"</a>
        <?php
		
	 }}
	?>
    
    
    
    
    
    
    
    
    
    
</body>
</html>