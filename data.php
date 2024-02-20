<!DOCTYPE html>
<html>
<head>
	<title>dynamic page</title>
</head>
<body>


<table width="50%" border="1">
	<tr>
	    <td>Name</td>
	    <td>Email</td>
	    <td>Mobile</td>
	    <td>Address</td>
	    <td>Department</td>
        <td>Gender</td>
    </tr>

    <?php

        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $address = $_POST["address"];
        $dept = $_POST["dept"];
        $gen = $_POST["gender"];

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$email</td>";
        echo "<td>$mobile</td>";
        echo "<td>$address</td>";
        echo "<td>$dept</td>";
        echo "<td>$gen</td>";
        echo "</tr>";

    ?>

	
</table>

</body>
</html>