<?php

$today = $_GET["today"]

//Christmas Day
$christmasDay = date("Y") . "-12-25";

if(date("m") == 12 && date("d") > 25){
    //we set the christmasday for next year
    $christmasDay = (date("Y") + 1) . "-12-25";
}

//Create DateTime object for Christmas Day.
$christmasDay = new DateTime($christmasDay);

//here we get the difference between the two dates.
$interval = $today->diff($christmasDay);

//here we print the number of days between
echo $interval->days . ' days until next Christmas!';

?>