<?php
$launch = new DateTimeImmutable('0717 2 March 2004 UTC');

// using DateTime::add() with DateInterval
$duration = new DateInterval('P10Y8M10DT8H46M');
$landing = $launch->add($duration);

// using a relative date string with DateTime::modify()
$date_string = '10 years 8 months 10 days 8 hours 46 minutes';
$landing2 = $launch->modify($date_string);

echo $landing->format('l, F j, Y H:i e') . '<br>';
echo $landing2->format('l, F j, Y H:i e');