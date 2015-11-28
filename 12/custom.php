<?php
require_once 'FormattedDate.php';
$date = new FormattedDate('7/4/1776');
$date->mdy();
echo $date;