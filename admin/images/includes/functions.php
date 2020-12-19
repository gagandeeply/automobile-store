<?php
//	error_reporting(0);
	session_start();
	define('DbHost' , 'localhost');
	define('DbUser' , 'thegame');
	define('DbPass' , 'hardwork@123');
	define('DbName' , 'thegame');
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
		
		function fechorg()
		{
			global $conn1;
			 $sql="SELECT * FROM `organization`";
			$sqlexicute = mysqli_query($conn1,$sql);
			return $sqlexicute;
		}
		
	}

?>