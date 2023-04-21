<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

   $server = "localhost";
   $username = "root";
   $password = "";
   $db = "project_cloud";
   


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