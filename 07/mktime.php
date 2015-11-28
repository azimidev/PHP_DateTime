<?php
//$ts = mktime(16,38,0,6,21,2015);
$ts = gmmktime(16,38,0,6,21,2015);
echo date('g:i:s a, l, F j, Y', $ts);
