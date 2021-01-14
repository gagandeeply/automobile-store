<?php
//	error_reporting(0);
	session_start();
	define('DbHost' , 'localhost');
	define('DbUser' , 'kaviuafe_shop');
	define('DbPass' , 'hardwork@123');
	define('DbName' , 'kaviuafe_shop');
	 header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
ini_set('session.gc_maxlifetime', 3600);
ini_set('display_errors', 1);
error_reporting(E_ALL);
 $conn1 = mysqli_connect(DbHost,DbUser,DbPass,DbName) or die('Could not connect: '. mysqli_error());
global $conn1;
 class functions
	{ 
	
		function __construct()
		{
			//session_start();
			$conn = mysqli_connect(DbHost,DbUser,DbPass,DbName) or die('Could not connect: '. mysqli_error());
		}
		
		function query($q)
		{
			$sqlquery = mysqli_query($q); 
			return $sqlquery;
			
		}
		
		function fechcat()
		{
			global $conn1;
			 $sql="SELECT * FROM `category`";
			$sqlexicute = mysqli_query($conn1,$sql);
			return $sqlexicute;
		}		function fechcatid($cdd)		{			global $conn1;			 $sql="SELECT * FROM `category` where `id`='$cdd'";			$sqlexicute = mysqli_query($conn1,$sql);			return $sqlexicute;		}		
		function fechpro()		{			global $conn1;			 $sql="SELECT * FROM `product`";			$sqlexicute = mysqli_query($conn1,$sql);			return $sqlexicute;		}

		
		function fechusers()
		{
			global $conn1;
			 $sql="SELECT * FROM `users`";
			$sqlexicute = mysqli_query($conn1,$sql);
			return $sqlexicute;
		}
		
		function fechusersid($id)
		{
			global $conn1;
			 $sql="SELECT * FROM `users` WHERE `id`='$id'";
			$sqlexicute = mysqli_query($conn1,$sql);
			return $sqlexicute;
		}
		function fechord()
		{ 
			global $conn1;
			 $sql="SELECT * FROM `order_table`";
			$sqlexicute = mysqli_query($conn1,$sql);
			return $sqlexicute;
		}
		function fechordid($id)
		{ 
			global $conn1;
			 $sql="SELECT * FROM `order_table` where `id`='$id'";
			$sqlexicute = mysqli_query($conn1,$sql);
			return $sqlexicute;
		}
		 
	}

?>