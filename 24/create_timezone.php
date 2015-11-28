<?php
$local = new DateTime('12/25/2015 1200');
echo 'Local: ' . $local->format('g:i a, F j, Y') . '<br>';

$date2 = new DateTime('12/25/2015 1200 Asia/Tokyo');
echo 'Date 2: ' . $date2->format('g:i a, F j, Y') . '<br>';

$tokyo = new DateTimeZone('Asia/Tokyo');
$date3 = new DateTime('12/25/2015 1200', $tokyo);
echo 'Date 3: ' . $date3->format('g:i a, F j, Y') . '<br>';

$date4 = new DateTime('12/25/2015 1200 America/Los_Angeles', $tokyo);
echo 'Date 4: ' . $date4->format('g:i a, F j, Y') . '<br>';

$date5 = new DateTime('12/25/2015 1200 -0800', $tokyo);
echo 'Date 5: ' . $date5->format('g:i a, F j, Y') . '<br>';

echo 'Local: ' . $local->getTimestamp() . '<br>';
echo 'Date 2: ' . $date2->getTimestamp() . '<br>';
echo 'Date 3: ' . $date3->getTimestamp() . '<br>';
echo 'Date 4: ' . $date4->getTimestamp() . '<br>';
echo 'Date 4: ' . $date4->getTimezone()->getName() . '<br>';
echo 'Date 5: ' . $date5->getTimestamp() . '<br>';
echo 'Date 5: ' . $date5->getTimezone()->getName() . '<br>';