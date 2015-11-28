<?php
$launch = new DateTime('07:17 March 2, 2004 UTC');
$landing = new DateTime('16:03 Nov 12, 2014 UTC');
$duration = $launch->diff($landing);
echo $duration->format('%y years %m months %d days %h hours %i minutes');