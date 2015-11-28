<?php
$timestamp = strtotime('7/4/2015');
$timestamp = strtotime('7-4-2015');
$timestamp = strtotime('7.4.2015');
$timestamp = strtotime('2015-07-04');
$timestamp = strtotime('last day of February 2015');
$timestamp = strtotime('last day of February 2016');
$timestamp = strtotime('next Wednesday');
$timestamp = strtotime('Wednesday next week');
$timestamp = strtotime('+3 weeks');
$timestamp = strtotime('+3 weeks', strtotime('12/25/2015'));
echo date('F j, Y', $timestamp);