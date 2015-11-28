<?php
$date1 = new DateTime('1200 Asia/Tehran');
$date2 = new DateTime('1100 Europe/London');

if ($date1 === $date2) {
    echo '$date1 and $date2 are the same object.';
} elseif ($date1 == $date2) {
    echo '$date1 and $date2 represent the same date and time.';
} elseif ($date1 < $date2) {
    echo '$date1 is less than $date2. It represents an earlier date and time.';
} elseif ($date1 > $date2) {
    echo '$date1 is greater than $date2. It represents a later date and time.';
}
