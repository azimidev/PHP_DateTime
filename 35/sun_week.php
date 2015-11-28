<?php
// create a DatePeriod for every day of the current week
$start 		= new DateTime('Monday this week Asia/Tehran');
$interval = new DateInterval('P1D');
$days 		= new DatePeriod($start, $interval, 6);
$lat 			= 35.689197;
$long 		= 51.388974;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Using date_sun_info with DatePeriod</title>
    <style>
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            color: #1B1B1B;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            padding: 0.5em 1em;
            border-bottom: solid 1px;
        }
        td:last-child {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Sunrise and Sunset This Week in Tehran</h1>
<table>
    <tr>
        <th>Date</th>
        <th>Sunrise</th>
        <th>Sunset</th>
        <th>Hours of Daylight</th>
    </tr>
    <?php
foreach ($days as $day) {
    // get details of the sun's movement for the current day
    $carp = date_sun_info($day->getTimestamp(), $lat, $long);
    // clone the DateTime object to store the time of sunrise
    $sunrise = clone $day->setTimestamp($carp['sunrise']);
    // set the original DateTime object to sunset
    // and calculate the difference from sunrise
    $daylight = $sunrise->diff($day->setTimestamp($carp['sunset']));
    ?>
    <tr>
        <td><?= $day->format('D M j') ?></td>
        <td><?= $sunrise->format('g:i a'); ?></td>
        <td><?= $day->format('g:i a'); ?></td>
        <td><?= $daylight->format('%h:%I') ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
