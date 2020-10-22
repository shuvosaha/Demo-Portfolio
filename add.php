<?php 
	include 'connect.php';
	
	if(isset($_POST['button_input'])){
		
		$sql = "insert into user(username,password,email,mobile)
				values('".$_POST['add_username']."',
					'".$_POST['add_password']."',
					'".$_POST['add_email']."',
					'".$_POST['add_mobile']."'					
				)";
				
		if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			{
			header ('Location:login1.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
		
		}	
?>

<h2>Please register to login !!</h2>

<form action="" method="post">
	<table>
    	<tr>
        	<td>Username</td>
            <td><input name="add_username"></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td><input name="add_password"></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input name="add_email"></td>
        </tr>
        <tr>
        	<td>Mobile</td>
            <td><input name="add_mobile"></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="submit" name="button_input"></td>
        </tr>
    </table>
<form>