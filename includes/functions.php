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

		}

		function fechcatid($cdd)

		{

			global $conn1;

			 $sql="SELECT * FROM `category` where `id`='$cdd'";

			$sqlexicute = mysqli_query($conn1,$sql);

			return $sqlexicute;

		}
		
		function fechpro()

		{

			global $conn1;

			 $sql="SELECT * FROM `product`";

			$sqlexicute = mysqli_query($conn1,$sql);

			return $sqlexicute;

		}
		function fechbook($pid,$uid)

		{

			global $conn1;

			 $sql="SELECT * FROM `test_book` where `p_id` = '$pid' and `user_id`= '$uid'";

			$sqlexicute = mysqli_query($conn1,$sql);

			return $sqlexicute;

		}
		function fechproid($pid)

		{

			global $conn1;

			 $sql="SELECT * FROM `product` WHERE `id` = '$pid'";

			$sqlexicute = mysqli_query($conn1,$sql);

			return $sqlexicute;

		}
		function fechprocat($cid)

		{

			global $conn1;

			 $sql="SELECT * FROM `product` where pcategory='$cid'";

			$sqlexicute = mysqli_query($conn1,$sql);

			return $sqlexicute;

		}

			function fechorgdetails($orid)

		{

			global $conn1;

			 $sql="SELECT * FROM `organization` where `id`='$orid'";

			$sqlexicute = mysqli_query($conn1,$sql);

			return $sqlexicute;

		}

		function fechemp($oid)

		{

			global $conn1;

			 $sql="SELECT * FROM `employee` WHERE org_id='$oid'";

			$sqlexicute = mysqli_query($conn1,$sql);

			return $sqlexicute;

		}

		

	}



?>