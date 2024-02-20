<?php

// above 5.6 version
//$conn = mysqli_connect("localhost","root","","sanjivani");


$conn = mysql_connect("localhost","root","");
mysql_select_db("sanjivani", $conn) or die("Could not select database");


?>