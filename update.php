<?php 
	include 'connect.php';
	
	if(isset($_POST['button_update'])){
		
		$sql="update user set username='".$_POST['update_username']."',
				password='".$_POST['update_password']."',
				email='".$_POST['update_email']."',
				mobile='".$_POST['update_mobile']."' where id='".$_POST['user_id']."'";
	
		if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			{
			header ('Location:index.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
		}
			
	$id='';
	$username='';
	$password='';
	$email='';
	$mobile='';
	//echo "Tushar";
	if(isset($_GET['id'])){
		//echo "Tushar";
		$sql="select id, username, password, email, mobile from user where id=".$_GET['id'];
		$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
		
		if(mysqli_num_rows($result) > 0)
		{
			//echo "Hanif";
		$row = mysqli_fetch_assoc($result);
		$id=$row['id'];
		//echo $id;
		$username=$row['username'];
		$password=$row['password'];
		$email=$row['email'];
		$mobile=$row['mobile'];
			
		}
		
		}
			
			
	//$id=
	
?>

<h2> Add User </h2>

<form action="" method="post">
	<table>
    	<tr>
        	<td>Username</td>
            <td><input name="update_username" value="<?php echo $username; ?>"></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td><input name="update_password" value="<?php echo $password; ?>"></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input name="update_email" value="<?php  echo $email; ?>"></td>
        </tr>
        <tr>
        	<td>Mobile</td>
            <td><input name="update_mobile" value="<?php echo $mobile; ?>"></td>
        </tr>
        <tr>
        	<td><input type="hidden" name="user_id" value="<?php echo $id; ?>"</td>
            <td><input type="submit" name="button_update"></td>
        </tr>
    </table>
<form>