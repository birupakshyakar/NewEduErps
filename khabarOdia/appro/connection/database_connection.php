<?php
	function OpenCon(){

		$dbhost= "localhost";
		$dbuser= "root";
		$dbpassword= "";
		$dbname= "khabaraodia";
		$con = new mysqli($dbhost, $dbuser, $dbpassword, $dbname) or die("connection Failed");
		return $con;
	}
	function CloseCon($con){
		$con->close();
	}
	

	
?>

