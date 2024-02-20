<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body><center>

<h3>Deeling with DYNAMIC PAGE:</h3>
        <form method="post" action="data.php">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="number" name="mobile" placeholder="Mobile"><br>
            <input type="text" name="address" placeholder="Address"><br>
            <select name="dept">
                <option value="CM">Computer Technology</option>
                <option value="ME">Mechanical</option>
                <option value="CE">Civil</option>
                <option value="Mc">Mechatronics</option>
            </select><br>
            <input type="radio" name="gender" value="M"> Male
            <input type="radio" name="gender" value="F"> Female <br>
            <input type="submit" value="Submit">
        </form>
    </center>


</body>
</html>