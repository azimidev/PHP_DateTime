<?php
$duration = new DateInterval('P1001D');
echo $duration->format('%y years %m months %d days') . '<br>';
echo "{$duration->y} years {$duration->m} months {$duration->d} days";