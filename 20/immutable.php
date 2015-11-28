<?php
$formatString = 'l, F j, Y';
$date1 = new DateTimeImmutable('12/25/2015');
$date2 = $date1->modify('+1 month');
echo 'Date 1: ' . $date1->format($formatString) . '<br>';
echo 'Date 2: ' . $date2->format($formatString) . '<br>';