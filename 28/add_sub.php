<?php
$date = new DateTime('1/31/2015');
echo $date->format('l, F j, Y') . '<br>';
$interval = new DateInterval('P1M');
echo $date->add($interval)->format('l, F j, Y') . '<br>';
echo $date->sub($interval)->format('l, F j, Y') . '<br>';