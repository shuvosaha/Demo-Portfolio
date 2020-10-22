<?php
	$dbname="login";
	$hostname="localhost";
	$db_password="";
	$db_username="root";
	
	
	//$connect= mysql_connect($hostname, $db_username, $db_password) or die("couldn't connect to server");

	/*if ($connect) {
	mysql_select_db($dbname) or die("Couldn't select $db :".mysql_error());
}*/

	$conn=mysqli_connect($hostname, $db_username, $db_password,$dbname);
	
	if(!$conn)
		{
		die('Connection Fail: '.mysqli_connect_errno());
			
		}
	else
		{
		
	//echo "success";
		}
	
    
?>