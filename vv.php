<?php
$t1 = new DateTime("09:00:00");

$t2 = new DateTime("12:23:45");

$no_of_hours;

$interval = $t1->diff($t2);
$diffInSeconds = $interval->s;
$diffInMinutes = $interval->i;
$diffInHours   = $interval->h;

if ($t1 >= new DateTime("08:00:00") && $t2 <= new DateTime("15:00:00")) {

    $no_of_hours = print('number of hours = ' . $diffInHours . ':' . $diffInMinutes . ':' . $diffInSeconds);
} else {
    $no_of_hours = 0;
}


?>