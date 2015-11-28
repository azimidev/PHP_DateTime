<?php
$date 		= new DateTime('July 7, 2015 Asia/Tehran');
$lat 			= 35.689197;
$long 		= 51.388974;
$carp 		= date_sun_info($date->getTimestamp(), $lat, $long);
$sunrise 	= $date->setTimestamp($carp['sunrise'])->format('g:i a');
$sunset 	= $date->setTimestamp($carp['sunset'])->format('g:i a');
echo $date->format('F j, Y') . ": the sun rises in Tehran at $sunrise and sets at $sunset.";