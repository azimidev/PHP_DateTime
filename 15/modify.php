<?php
$date = new DateTime();
echo $date->modify('Nov 11, 1918 11:00')->format('g:i:s a, F j, Y');