<?php
$start = new DateTime('Dec 31, 2014');
$interval = DateInterval::createFromDateString('first Thursday of next month');
$end = new DateTime('Jan 1, 2016');

$meetings = new DatePeriod($start, $interval, $end, DatePeriod::EXCLUDE_START_DATE);

foreach ($meetings as $meeting) {
    if ($meeting->format('n/j') == '1/1') {
        $meeting->modify('+1 week');
    }
    echo $meeting->format('l, F j, Y') . '<br>';
}