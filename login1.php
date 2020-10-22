<?php
include 'connect.php';
if (isset($_POST['login_btn'])) {

$username=$_POST['username'];
$password=$_POST['password'];
$query= "select*from user where username='$username' AND password='$password'";
$result= mysqli_query($conn,$query);
if($result){
if(mysqli_num_rows($result)>0){
echo"
<script>
alert('Logged in Successfull');
window.location.href='index.php';
</script>  
";


}else{
	echo"
<script>
alert('wrong Username and Password');
</script>  
";

}


}else{
	echo"
<script>
alert('daabase error');
</script>  
";
}




}else{

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="header">
		<h1><mark>Registration</mark></h1>
	</div>
	<form method="post" action="login1.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>

			
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" class="textInput"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="login_btn" value="Login"></td>
			</tr>
			<td> 
    	<a href="add.php "> Create</a>
    </td>
    <td> 
    	<a href="index.html"> About Us</a>
    </td>
		</table>
	</form>

</body>
</html>