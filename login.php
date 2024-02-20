<?php
if(isset($_POST["btnlogin"])){
	$uname = $_POST["username"];
	$pass = $_POST["password"];
	if ($uname == "SANJIVANI" && $pass == "2000340") {
		header("Location:idcarddata.php");
	} else {
		echo "Invalid Username & Password!!";
	}
	
	
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form method="post">
	<table width="30%" align="center">
		<tr><h2><center>Student Login Form:</center></h2></tr>
		
		<tr>
			<td>Username </td>
				
			<td><input type="text" name="username"> </td>
		</tr>
		<tr>
			<td>Password </td>
				
			<td><input type="password" name="password"> </td>
		</tr>
		<tr>
			<td colspan="2"> <input type="submit" value="Login" name="btnlogin"> <a href="regist.php"> Signup?</td>
		</tr>
		
	</table>
	</form>

</body>
</html>