<?php
include 'connect.php';

?>
<html>
<link href="style.css" rel="stylesheet" type="text/css" />
<body>
<div class="data">
<h2> Users List </h2>
<table width="832" border="1" align="center" cellpadding="5">
  <tr>
    <td width="50">ID </td>
    <td width="137">Name</td>
    <td width="252">Password</td>
    <td width="165">Email</td>
    <td width="154">Mobile Number</td>
    <td width="154">Action</td>
  </tr>
  <?php
  	//$sql = "select user_id,username, address, created_at, modified_at from tb_users";
	$sql = "select * from user";
	
	$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
	//$a=mysqli_fetch_array($result);
	//echo $result["username"];
	if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_assoc($result))	
			{
  //echo $row["username"];
  
  
  ?>
  
  <tr>
 	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['mobile'] ?></td>
    <td> 
    	<a href="update.php ? id= <?php echo $row['id'] ?> "> Update</a>
        <a href="delete.php ? id= <?php echo $row['id'] ?> "> Delete</a>
    </td>
    
  </tr>
<?php

			
			}
		}

?>
</table>
</div>
<div class="link">
  <a href="login1.php"> Logout </a> 
</div>


</body>
</html>