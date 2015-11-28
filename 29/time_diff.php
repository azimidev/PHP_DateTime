<?php
$ny = new DateTime('1200 America/New_York');
$iran = new DateTime('1200 Asia/Tehran');
$diff = $ny->diff($iran);
echo $diff->invert ? '-' : '+';
echo "$diff->h hours $diff->i minutes.";
echo '<br>';
echo $iran->getTimestamp() - $ny->getTimestamp();