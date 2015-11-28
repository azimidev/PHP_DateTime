<?php
$id = 'America/New_York';
$tz = new DateTimeZone($id);
$offset = $tz->getOffset(new DateTime('4/1/2015'));
echo $offset;
