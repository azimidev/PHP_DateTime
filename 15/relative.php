<?php
$date = new DateTime('1/31/2016');
echo $date->format('F j, Y') . '<br>';
echo $date->modify('last day of +1 month')->format('F j, Y') . '<br>';
echo $date->modify('last day of -1 month')->format('F j, Y') . '<br>';
