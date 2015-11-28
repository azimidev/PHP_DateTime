<?php
$date = new DateTime('March 21, 2016 Asia/Tehran');
$lat 	= 35.689197;
$long = 51.388974;
$carp = date_sun_info($date->getTimestamp(), $lat, $long);

var_dump($carp);
