<?php
try {
    $date = new DateTime('25/12/2015');
    echo $date->format('F j, Y') . '<br>';
    echo $date->modify('0000 1918')->format('F j, Y') . '<br>';
    echo $date->modify('last day -1 month')->format('F j, Y') . '<br>';
} catch (Exception $e) {
    DateTime::getLastErrors();
    echo $e->getMessage();
}

var_dump(date_parse('25/12/2015'));