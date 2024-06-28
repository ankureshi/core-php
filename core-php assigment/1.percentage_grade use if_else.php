<?php
$physics=80;
$chemistry=90;
$biology=88;
$maths=70;
$computer=79;
$result=$physics+$chemistry+$biology+$maths+$computer;
echo "<br>";

echo "total marks of 5 subject is:".$result;
echo "<br>";
$percentage=$result/5;
echo "<br>";
echo "percentage is:".$percentage;
echo"<br>";
if ($percentage>=80)
{
    echo "You are pass with grade A+";
}
elseif($percentage>=70)
{
    echo "You are pass with grade A";
}
elseif($percentage>=60)
{
    echo "You are pass with grade B";
}
elseif($percentage>=50)
{
    echo "You are pass with grade c";
}
elseif($percentage>=40)
{
    echo "You are pass with grade D";
}
else
{
    echo "You are Fail";
}
?>
