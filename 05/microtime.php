<?php
//echo microtime(true);

$val = 'bananas';
$array = array_fill(0, 1000000, $val);
$size = count($array);
for ($i = 0; $i < $size; $i++) {
    $val .= $i;
}

echo 'Time taken: ' . (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) . ' seconds';