<?php
$id1 = 'Europe/London';
$id2 = 'Asia/Tehran';
$tz1 = new DateTimeZone($id1);
$tz2 = new DateTimeZone($id2);
$offset1 = $tz1->getOffset(new DateTime());
$offset2 = $tz2->getOffset(new DateTime());
$diff = $offset1 - $offset2;

if ($diff === 0) {
    echo "$id1 and $id2 are in the same time zone.";
} else {
    if ($diff > 0) {
        $direction = 'ahead of';
    } else {
        $direction = 'behind';
    }
    echo "$id1 is " . convertOffset($diff) . " $direction $id2.";
}

function convertOffset($seconds) {
    // use absolute value
    $seconds = abs($seconds);
    $hour = 60 * 60;
    // calculate whole hours
    $hours = floor($seconds / $hour);
    // if there is a remainder, calculate minutes
    $remainder = $seconds % $hour;
    if ($remainder) {
        $remainder = $remainder / 60 . ' minutes';
    } else {
        $remainder = '';
    }
    if ($hours == 1) {
        $h = 'hour';
    } else {
        $h = 'hours';
    }
    return "$hours $h $remainder";
}