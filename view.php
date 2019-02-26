<?php include  ('config.php')?>
<?php session_start();
//check if session(user) is running or not

if(!isset($_SESSION['user']))
{
	//if not  then redirect user block to login page
header('location:index.php?no profile');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View My Profile</title>
</head>

<body  >
<?php
#prepare sql statement
$id=$_SESSION['user']['ID'];

$sql="SELECT * FROM customer_details WHERE ID='$id' ";//change the students details
#execute above sql code
$execute = mysqli_query($con,$sql) or die(mysqli_error($con));
#check if any rows found              
if(mysqli_num_rows($execute)>0){
	echo "No of records found : " .mysqli_num_rows($execute);
	?>
    <table border="1">
    <thead>
    	<tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Address</th>
            <th>Picture view</th>
            <th>Aadhar No</th>
            <th>Pan No</th>
            <th>Account No</th>
            <th>Balance</th>
            <th>Status</th>
           
            
        </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($execute)){?>
        		<tr>
                	<td><?php echo $row[1]?></td>
                    <td><?php echo $row[2]?></td>
                    <td><?php echo $row[3]?></td>
                    <td><?php echo $row[4]?></td>
                    <td><?php echo $row[5]?></td>
                    <td><?php echo $row[6]?></td>
                    <td><img src="<?php echo $row['PATH']?>" width ="80" height="80"></td>
                    <td><?php echo $row[8]?></td>
                    <td><?php echo $row[9]?></td>
                    <td><?php echo $row[10]?></td>
                    <td><?php echo $row[11]?></td>
                 
                    <td><?php echo $row[12]?></td>
                   
                    </tr>
                   <?php } ?>
                    </tbody>
                    </table><?php
                    
}
else 
{
	echo "No data found";
} ?>

<br/><button><a href="home.php">Go Back to Home Page</a></button>
</body>
</html>