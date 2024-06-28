<!--febonacci series-->
<?php

$a=0;
$b=1;
$n=10;

for($i=1;$i<=10;$i++)
{
echo "$a&nbsp;";

$c=$a+$b;
$a=$b;
$b=$c;
}
?>