<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

   $server = "localhost";
   $username = "root";
   $password = "";
   $db = "cloud_project";
   


	$conn = mysqli_connect($server,$username,$password,$db);
	
	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}
	else
	{
		// echo "Database Connected.";
	}
	
	

?>
