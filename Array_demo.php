<!DOCTYPE html>
<html>
<head>
	<title>Array of PHP</title>
</head>
<body>
<?php

//Addition of two numbers
$a = 2;
$b= 5;
$c= $a + $b;
echo "Addition is: ",$c;
echo "<pre>";
echo "<hr>";

//Indexed Array

     echo "Indexed Array: ";
     $z= array("Summer","winter","spring");
     print_r($z);
     echo "<hr>";


//Associative Array
    echo "Associative Array: ";
	$student1 = array('a' => 'Pragati','b' => 'Mitali','c' => 'Radhika','d' => 'Shalmali');
	echo "<pre>";
	print_r($student1);	
	echo "<hr>";


//Multidimentional Array
	echo "Multidimentional Array: ";
	$student2 =array
	(
		array(1,'Pragati','Kopargaon'),
		array(2,'Mitali','Yeola'),
		array(3,'Radhika','Shirdi'),
		array(4,'Shalmali','Rahata')
	);
	print_r($student2);
	echo "<hr>";



?>
</body>
</html>