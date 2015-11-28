<?php
$date = new DateTime();
//$date->setTimezone(new DateTimeZone('America/Los_Angeles'));
echo $date->format('g:i a') . '<br>';
echo $date->getTimezone()->getName() . '<br>';

$la = clone $date;
$la->setTimezone(new DateTimeZone('America/Los_Angeles'));
echo $la->format('g:i a') . '<br>';
echo $la->getTimezone()->getName() . '<br>';