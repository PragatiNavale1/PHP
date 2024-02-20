
<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
</head>
<style type="text/css">
	input[type=text], input[type=password] {
   width: 60%;
   font-size: 18px;
   padding: 10px;
   margin: 5px 0 22px 0;
   display: inline-block;
   border: none;
   background: #f1f1f1;
}
.signup {
   padding: 14px 20px;
   background-color: #3174cc;
   border-style: none;
   box-shadow: 5px 10px;
}
	
</style>
<body>
	<center>
		<h3>Sign Up</h3>
        <form method="post" action="idcarddata.php">
            <input type="text" name="name" placeholder="First Name" required><br>
            <input type="text" name="name" placeholder="Last Name" required><br>
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <label>
                    <input type="checkbox" checked="checked" name="remember" style="marginbottom: 15px"> Remember me
            </label><br><br>
            <input class="signup" type="submit" value="Sign up"><br>
            
            <p>By creating an account you agree to our <a href="#"
            style="color:dodgerblue">Terms & Privacy</a></p>
            <hr>
            <?php echo "Already a member?";?> <a href="login.php"> Log In
            
           
        </form>
    </center>


</body>
</html>
