<?php

define('DbHost' , 'localhost');

define('DbUser' , 'kaviuafe_shop');

define('DbPass' , 'hardwork@123');

define('DbName' , 'kaviuafe_shop');

$conn1 = mysqli_connect(DbHost,DbUser,DbPass,DbName) or die('Could not connect: '. mysqli_error());

session_start();

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'regi')

{

	$fname= $_REQUEST['fname'];

	$email=$_REQUEST['email'];
	$phone= $_REQUEST['phone'];

	$passw=$_REQUEST['passw'];

	 $gh = "select * from `users` where `email`='$email'";

    $result =  mysqli_query($conn1,$gh);

	$fetch=mysqli_fetch_assoc($result);

	 $email1 = $fetch['email'];
	 
	 if($email==$email1)
	 {
		 echo '2';
	 }
     else
	 {
		  $_SESSION['uname']=$fetch['name'];
        $_SESSION['email']=$fetch['email'];
        $_SESSION['id']=$fetch['id'];
		
		  $gh2 = "INSERT INTO `users`(`name`, `email`, `phone`, `password`) VALUES ('$fname','$email','$phone','$passw')";

        $result2 =  mysqli_query($conn1,$gh2);

	  echo '1';
	 }
	

	

}
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'login')

{

	$uname= $_REQUEST['uname'];

	$password=$_REQUEST['pssw'];

	 $gh = "select * from `users` where `email`='$uname' and `password`='$password'";

    $result =  mysqli_query($conn1,$gh);

	$fetch=mysqli_fetch_assoc($result);

	 $uname1 = $fetch['email'];

	$pass1 = $fetch['password'];

	if($uname==$uname1 && $password==$pass1)

	{

		  $_SESSION['uname']=$fetch['name'];
        $_SESSION['email']=$fetch['email'];
        $_SESSION['id']=$fetch['id'];	 

		echo '1';

	

	}

	else 

	{

		echo '0';

	

	}

}



?>