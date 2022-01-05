<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "corephp";
	$conn = mysqli_connect($server,$username,$password,$db_name);
		if($conn!= true){
			echo "false". mysqli_connect_error();
		}
?>