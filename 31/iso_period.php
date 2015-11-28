<?php
$iso_string = 'R6/2015-08-01T00:00:00Z/P4W';
$period = new DatePeriod($iso_string, DatePeriod::EXCLUDE_START_DATE);
echo '<ol>';
foreach ($period as $p) {
    echo '<li>' . $p->format('l, F j, Y') . '</li>';
}
echo '</ol>';