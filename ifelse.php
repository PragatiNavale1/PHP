<!DOCTYPE html>
<html>
<head>
	<title>If Else Demo</title>
</head>
<body>

	<?php

	// EVEN-ODD
	$num= 45;
	if ($num %2 == 0) {
		echo $num. " IS EVEN NUMBER <br>";
	}
	else{
    echo  $num ." IS ODD NUMBER <br>" ; 
    }
    echo "<hr>";


    // POSITIVE-NEGATIVE
    $z=-32;
    if ($z<=0) {
    	echo $z. " IS NEGATIVE NUMBER <br>";
    } else {
    	echo $z. " IS POSITIVE <br>";
    }
    echo "<hr>";


    // SMALLER-GREATER
    $n=20;
    $m=65;
    if ($n > $m) {
    	echo $n. " IS GRATER NUMBER <br>";
    } else {
    	echo $m. " IS SMALLER NUMBER <br>";
    }
    echo "<hr>";


    // PRIME NUMBER CHECK
   $num= 0;
   $a=10;
   $b=21;
    for ($i = 2; $i <= $b/2; $i++){
    if ($b% $i == 0)
    {
        $num= 1;
        
    }      
    }
    if ( $num > 0 )
    {
    	echo  $b ." IS NOT PRIME<br>" ;
    }
    else{
    	echo  $b ." IS PRIME<br>" ;
    }


    
    





	?>

</body>
</html>