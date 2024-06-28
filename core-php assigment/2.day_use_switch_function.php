<!--Find "thursday" using switch case by function-->
<?php
function switchcase($day)
{
    switch($day)
    {
    case 1:
    echo " The day is sunday";
    break;
    case 2:
    echo " The day is monday";
    break;
    case 3:
    echo " The day is tuesday";
    break;
    case 4:
    echo " The day is wednesday";
    break;
    case 5:
    echo "The day is thursday";
    break;
    case 6:
    echo " The day is friday";
    break;
    case 7:
    echo " The day is saturday";

    default:
    echo "invalid number ";
    }
}
switchcase(5)
?>