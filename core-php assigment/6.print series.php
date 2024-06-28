<?php
//$rows=4;
//$cols=3;
$start=[5,2,3,4];
for($i=0;$i<4;$i++)
{
    for($j=0;$j<3;$j++)
    {
     $result=$start[$i] + $j * 4;
     echo "<br>";
     echo "$result";
    }
     
}
?>