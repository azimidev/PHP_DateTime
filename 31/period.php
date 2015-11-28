<?php
$start = new DateTime('July 1, 2015');
$interval = new DateInterval('P4W');
$end = new DateTime('Dec 17, 2015');
$period = new DatePeriod($start, $interval, $end, DatePeriod::EXCLUDE_START_DATE);
echo '<ol>';
foreach ($period as $p) {
    echo '<li>' . $p->format('l, F j, Y') . '</li>';
}
echo '</ol>';