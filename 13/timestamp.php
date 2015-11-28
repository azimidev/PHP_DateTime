<?php
$string = '2038-01-20';
$date = new DateTime($string);
echo $date->format('l, F j, Y') . '<br>';
$ts = $date->getTimestamp();
var_dump($ts);
echo '<br>';
var_dump($date->format('U'));
echo '<br>';
var_dump(strtotime($string));