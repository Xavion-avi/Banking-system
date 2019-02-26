<?php session_start();
include ('config.php'); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admins view page</title>
<link href="animation3.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="imgcontainer"><img src="bank.jpg" alt="bank" class="bank"></div>
  <div class="container" align="center">
  
<?php
#prepare sql statement
$sql="SELECT * FROM customer_details ";
#execute above sql code
$execute = mysqli_query($con,$sql) or die(mysqli_error($con));
#check if any rows found              
if(mysqli_num_rows($execute)>0){
	echo "Number of records found : " .mysqli_num_rows($execute);
	?><table border="1" bgcolor="#999999" cellpadding="1">
    <thead>
    	<tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Aadhar number</th>
            <th>Pan number</th>
            <th>Account number</th>
            <th>Balance</th>
            <th>Status</th>
            <th>Status</th>
            <th>Picture</th>
        </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($execute)){?>
        		<tr>
                	<td><p style="color:#009"><?php echo $row[1]?></p></td>
                    <td><p style="color: #063"><?php echo $row[2]?></p></td>
                    <td><p style="color: #066"><?php echo $row[3]?></p></td>
                    <td><p style="color:#066"><?php echo $row[4]?></p></td>
                 	<td><p style="color: #066"><?php echo $row[6]?></p></td>
                    <td><p style="color: #066"><?php echo $row[8]?></p></td>
                    <td><p style="color: #066"><?php echo $row[9]?></p></td>
                    <td><p style="color: #066"><?php echo $row[10]?></p></td>
                    <td><p style="color: #066"><?php echo $row[11]?></p></td>
                    <td><?php 
					 $st=$row[12];
					 if($st==0)
					{
						echo "<span style='color:red'>Deactivated</span>"; 
					
					
					}
                    
                    
					 else
					{
						echo "<span style='color:green'>Activated</span>";
					}
					?>
					</td>
                    <td><img src="<?php echo $row['PATH']?>" width ="50" height="50"></td>
                    
                    <td><a href="update.php?id=<?php echo $row['ID']?>" > Update </a></td>
                    <td><a href="delete.php?id=<?php echo $row['ID']?>" > Delete </a></td>
                    <td><a href="activate.php?id=<?php echo $row['ID']?>" > Activate </a></td>
                    <td><a href="deactivate.php?id=<?php echo $row['ID']?>" > Deactivate </a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table><?php
                    
}
else 
{
	echo "No data found";
} ?>
</body>
</html>   