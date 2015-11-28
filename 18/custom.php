<?php
$date = DateTime::createFromFormat('!d#m#Y', '25.12.2015');
echo $date->format('g:i a, F j, Y') . '<br>';
$date = DateTime::createFromFormat('!Y*m*d+', '2015年5月5日火曜日');
echo $date->format('g:i a, F j, Y');