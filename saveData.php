  <?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	
include ('config.php');
$name=$_POST['n'];
$gender=$_POST['gender'];
$email=$_POST['em'];
$phone=$_POST['p'];
$password=$_POST['pass'];
$con_password=$_POST['pwd'];
$address=$_POST['addr'];
$aadhar=$_POST['aadh'];
$pan=$_POST['pan'];
if(!empty($_FILES['picture']['name'])){
	$filename =$_FILES['picture']['name'];
	$filesize =$_FILES['picture']['size'];
	$filetype =$_FILES['picture']['type'];
#server directory where the file will get uploaded
# create a directory first

if(!file_exists("cust_pic")){
	#creates a directory
	mkdir("cust_pic");
}
#set server path
$serverpath="cust_pic/".rand(000,999).$filename;
#file upload
$tmp_file=$_FILES['picture']['tmp_name'];
$move=move_uploaded_file($tmp_file,$serverpath) or die($_FILES['picture']['error']);
}else{
	$serverpath='';}
#prepare SQL Statement
$execute="SELECT EMAIL FROM customer_details WHERE EMAIL = '$email'";
$x=mysqli_query($con,$execute);
if(mysqli_num_rows($x)>0)
{
	echo 'Email Already Registered';
	 
	
}else{

$sql="INSERT INTO customer_details(ID,NAME,GENDER,EMAIL,MOBILE,PASSWORD,ADDRESS,PATH,AADHAR,PAN) VALUES('0','$name','$gender','$email','$phone','$password','$address','$serverpath','$aadhar','$pan')";
#execute above sql
$exec=mysqli_query($con,$sql) or die(mysqli_error($con));
if($exec==1)
{
	
	header('location:signup.php?done=true'); 
}
}
}

else{
	echo 'FORBIDDEN ACCESS';
}


?>