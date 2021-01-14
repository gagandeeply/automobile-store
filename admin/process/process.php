<?php
define('DbHost' , 'localhost');
define('DbUser' , 'kaviuafe_shop');
define('DbPass' , 'hardwork@123');
define('DbName' , 'kaviuafe_shop');
$conn1 = mysqli_connect(DbHost,DbUser,DbPass,DbName) or die('Could not connect: '. mysqli_error());
session_start();
if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'login')
{
	$uname= $_REQUEST['uname'];
	$password=$_REQUEST['pssw'];
	 $gh = "select * from `admin` where `username`='$uname' and `password`='$password'";
    $result =  mysqli_query($conn1,$gh);
	$fetch=mysqli_fetch_assoc($result);
	 $uname1 = $fetch['username'];
	$pass1 = $fetch['password'];
	if($uname==$uname1 && $password==$pass1)
	{
		 $_SESSION['uname']=$uname1;
        $_SESSION['id']=$fetch['id'];		 
		echo '1';
	
	}
	else 
	{
		echo '0';
	
	}
}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'create_cat')
{
	$cname= $_REQUEST['cname'];

	
	$gh1 = "select * from `category` where `cname`='$cname'";
    $result1 =  mysqli_query($conn1,$gh1);
	$fetch1 = mysqli_fetch_assoc($result1);
	 $cname1 = $fetch1['cname'];
	 if($cname1 == $cname)
	 {
		 echo '2';
	 }
	 else
	 {
		 
    $gh2 = "INSERT INTO `category` SET cname='$cname'";
    $result2 =  mysqli_query($conn1,$gh2);
	  echo '1';
	 }
}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'removecat')
{	
$cid= $_REQUEST['id'];	
	$gh1 = "DELETE FROM `category` WHERE `id`='$cid'";  
	$result1 =  mysqli_query($conn1,$gh1);	
	if($result1)	
		{	
	echo '1';	
	}	
	else
		{	
	echo '0';	
	}
	}
	else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'removeuser')
{	
$cid= $_REQUEST['id'];	
	$gh1 = "DELETE FROM `users` WHERE `id`='$cid'";  
	$result1 =  mysqli_query($conn1,$gh1);	
	if($result1)	
		{	
	echo '1';	
	}	
	else
		{	
	echo '0';	
	}
	}
	
	else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'inactemp')
{
	
	
		$emp_id= $_REQUEST['id'];

$gh2 = "UPDATE `users` SET status = '0' WHERE id='$emp_id'";
   
 $result2 =  mysqli_query($conn1,$gh2);
	

echo '1';
}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'actemp')
{
	
	
		$emp_id= $_REQUEST['id'];
 
$gh2 = "UPDATE `users` SET status = '1' WHERE id='$emp_id'";
   
 $result2 =  mysqli_query($conn1,$gh2);
	

echo '1';
}
	
	else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'removepr'){	$cid= $_REQUEST['id'];		$gh1 = "DELETE FROM `product` WHERE `id`='$cid'";    $result1 =  mysqli_query($conn1,$gh1);		 if($result1)	 {		 echo '1';	 }	 else	 {		 	  echo '0';	 }}else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'cemployee')
{
	
	include('src/autoload.php');
	$faker = Faker\Factory::create();
		$org_id= $_REQUEST['org_id'];
		$emp_id=$_REQUEST['emp_id'];
	$em_id = $emp_id - 1;
		for ($i=0; $i <= $em_id; $i++) 
{ 
 
	 $gh2 = "INSERT INTO `employee` SET `username`='".$faker->firstName."',`email`='".$faker->email."',`password`='".$faker->password."',`org_id`='".$org_id."'";
   
 $result2 =  mysqli_query($conn1,$gh2);
	
 
} 
echo '1';
}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'dempl')
{
	$oid= $_REQUEST['oid'];
	
	
	$sql = "select `id`,`username`,`email`,`password` from `employee` where `org_id`='$oid'";
	$setRec = mysqli_query($conn1, $sql);  
	$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "User Name" . "\t" . "Email" . "\t" . "Password" . "\t"; 
$setData = ''; 
	
    while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
}
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>