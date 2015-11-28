<?php
$id = 'Asia/Tehran';
$tz = new DateTimeZone($id);
$transitions = $tz->getTransitions(strtotime('1/1'), strtotime('12/31 +4 years'));

var_dump($transitions);