<!DOCTYPE html>
<html>
<head>
    <title>Functions of PHP</title>
</head>
<body>


<?php 

$num;
function primecheck($b,$num =0){
   for ($i = 2; $i <= $b/2; $i++){
    if ($b% $i == 0)
    {
        $num= 1;
        
    }      
}
if ( $num > 0 )
{
    echo  $b ." is NOT PRIME<br>" ;
}
else{
    echo  $b ." is PRIME<br>" ;
}

}
echo "<h3>PRIME CHECK:</h3><br>";
primecheck(45);
primecheck(893);
primecheck(5456);
echo "<hr>";

function evenoddcheck($a){
    if ($a % 2 == 0 )
{
    echo  $a." is EVEN<br>" ; 
}
else{
    echo  $a ." is ODD<br>" ; 
}
}
echo "<h3>EVEN OR ODD CHECK:</h3><br>";
evenoddcheck(54);
evenoddcheck(19);
evenoddcheck(4938);
echo "<hr>";

function PNcheck($a){
    if ($a< 0 )
{
    echo  $a." NEGATIVE<br>" ; 
}
else{
    echo  $a." POSITIVE<br>"  ; 
}
}
echo "<h3>POSITIVE OR NEGATIVE CHECK:</h3><br>";
PNcheck(-666);
PNcheck(255);
PNcheck(-99);
echo "<hr>";

function GScheck($a,$b){
    if ( $a > $b){
    echo $a . " is GREATER <br>";
}
else{
    echo  $b ." is GREATER<br>"  ; 
}
}
echo "<h3>GREATER NUMBER CHECK CHECK:</h3><br>";
GScheck(5,8);
GScheck(256,1034);
GScheck(12,4570);
echo "<hr>";
?>

</body>
</html>

