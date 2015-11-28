<?php
$departure = new DateTime('8pm March 27, 2015 America/New_York');
$arrival = new DateTime('7:20am March 28, 2015 Europe/London');

$departure->add(new DateInterval('PT23H'));
$arrival->add(new DateInterval('PT24H'));

$flight_time = $departure->diff($arrival);
echo "$flight_time->h hours $flight_time->i minutes";