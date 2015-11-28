<?php
$tokyo = new DateTimeZone('Asia/Tokyo');

$date1 = new DateTime('12/25/2015 1200 America/Los_Angeles', $tokyo);
echo 'Date 1: ' . $date1->format('g:i a, F j, Y') . '<br>';

$date2 = new DateTime('12/25/2015 1200 -0800', $tokyo);
echo 'Date 2: ' . $date2->format('g:i a, F j, Y') . '<br>';

echo 'Date 1: ' . $date1->getTimestamp() . '<br>';
echo 'Date 2: ' . $date2->getTimestamp() . '<br>';
echo 'Date 1: ' . $date1->getTimezone()->getName() . '<br>';
echo 'Date 2: ' . $date2->getTimezone()->getName() . '<br>';

$date1->setTimezone($tokyo);
$date2->setTimezone($tokyo);

$date1->modify('12/25/2015 1200');

echo 'Date 1: ' . $date1->getTimestamp() . '<br>';
echo 'Date 2: ' . $date2->getTimestamp() . '<br>';
echo 'Date 1: ' . $date1->getTimezone()->getName() . '<br>';
echo 'Date 2: ' . $date2->getTimezone()->getName() . '<br>';

echo 'Date 1: ' . $date1->format('g:i a, F j, Y') . '<br>';
echo 'Date 2: ' . $date2->format('g:i a, F j, Y') . '<br>';