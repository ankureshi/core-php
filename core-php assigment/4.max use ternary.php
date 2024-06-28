<?php 
$x=20;
$y=40;
$z=35;

$max= ($x>$y) ? ($x>$z? $x:$z): ($y>$z ? $y:$z);

echo "$max number is max";
?>