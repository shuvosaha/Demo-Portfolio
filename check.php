<?php
	
	include 'connect.php';
	
	
	$sql= "select * from users";
	
	$result=mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	
	$row= mysqli_fetch_array($result);
	
	//$row= mysqli_fetch_assoc($result);
	

	$sql="select * from users";
	$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	
if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_assoc($result))	
			{
  echo $row["username"];
  echo  "\r\n";
  echo $row["userpass"];
  echo "<br>";
			}
		}
	
?>