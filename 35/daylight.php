<?php
$date     = new DateTime('June 21, 2015 Europe/London');
$lat      = 51.507351;
$long     = -0.127758;
$london   = date_sun_info($date->getTimestamp(), $lat, $long);
$sunrise  = clone $date->setTimestamp($london['sunrise']);
$daylight = $sunrise->diff($date->setTimestamp($london['sunset']));
echo $daylight->format('%h:%I hours of daylight') . ' in London on ' . $date->format('F j, Y');