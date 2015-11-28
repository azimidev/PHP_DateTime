<?php
// create a DatePeriod for every day of the current week
$start    = new DateTime('Monday this week Asia/Tehran');
$interval = new DateInterval('P1D');
$days     = new DatePeriod($start, $interval, 6);
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
    </style>
</head>
<body>
<h1>Sunrise and Sunset This Week in Tehran</h1>
<table>
    <tr>
        <th>Date</th>
        <th>Sunrise</th>
        <th>Sunset</th>
    </tr>
    <?php
    // loop over the DatePeriod
    foreach ($days as $day) {
        // get the sun's movements for the current day
        $carp = date_sun_info($day->getTimestamp(), $lat, $long);
        // get the times of sunrise and sunset as strings
        $sunrise = $day->setTimestamp($carp['sunrise'])->format('g:i a');
        $sunset = $day->setTimestamp($carp['sunset'])->format('g:i a');
        ?>
        <tr>
            <td><?= $day->format('D M j') ?></td>
            <td><?= $sunrise; ?></td>
            <td><?= $sunset; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
