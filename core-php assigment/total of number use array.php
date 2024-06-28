<!--use a for loop total the contents of an integer array called numbers which has 5 elements 
.store the result in an integer it called total--> 

<?php
$number=[20,30,40,50,60];
$total=0;

for($i=0;$i<$number;$i++)
{
    $total=$total+$number[$i];
    
}
echo "sum of total number is".$total;

?>  