<?php
$date = new DateTime();
echo $date->format('g:i:s a, F j, Y') . '<br>';
echo $date->setDate(2012, 17, 27)->setTime(31, 90)->format('g:i:s a, F j, Y') . '<br>';