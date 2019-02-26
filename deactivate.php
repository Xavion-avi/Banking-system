<?php
session_start(); include  ('config.php')?>
<?php 

if($_SERVER['REQUEST_METHOD']==="GET")
{
	
	$id = $_GET['id'];
	#delete record by id
	$statement = "UPDATE customer_details SET STATUS=0 WHERE ID='$id'";
	$execute_statement = mysqli_query($con,$statement) or die(mysqli_error($con));
	if($execute_statement==1){
		?><script>
		alert('Status changed successfully');
		window.location.href="admin_view.php";
		</script><?php
	}
}
?>
