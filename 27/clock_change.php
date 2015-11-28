<?php
$id = 'Asia/Tehran';
$tz = new DateTimeZone($id);
// create a DateTime object with the same time zone
// to display the results
$date = new DateTime($id);

// get transitions for the current year and following 3 years
$transitions = $tz->getTransitions(strtotime('1/1'), strtotime('12/31 +3 years'));
$length = count($transitions);

// if the array has more than 1 element, daylight saving is observed
if ($length > 1) {
    // get the abbreviations from the second and third elements
    $abbreviations = [$transitions[1]['abbr'], $transitions[2]['abbr']];
    // find whether clocks go forward or back
    // in the first half of the year
    if ($transitions[1]['isdst']) {
        $directions = ['Forward', 'Back'];
    } else {
        $directions = ['Back', 'Forward'];
    }
    // get the next transition from the current date
    $next = $tz->getTransitions(time(), strtotime('+1 year'))[1];
    $nextchange = empty($next['isdst']) ? 'back' : 'forward';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Daylight Saving Time</title>
    <style>
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            color: #1B1B1B;
        }
        #highlight {
            text-align: center;
            background-color: #ff8000;
            color: #fff;
            font-weight: bold;
            width: 375px;
            padding: 1em;
            margin-left: 50px;
        }
        #highlight em {
            display: block;
            font-size: 2em;
            font-style: normal;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border-bottom: 1px solid;
            padding: 0.5em 1em;
        }
    </style>
</head>
<body>
<h1>When Do the Clocks Change?</h1>
<p>Location: <?php
    // format the time zone ID as the location
    echo str_replace(['/', '_'], [', ', ' '], $id);
    // if only one array element is returned, DST not used
    if ($length === 1) {
        echo ' does not observe daylight saving time.';
    }
    ?></p>
<?php
// display the table only if DST is observed
if ($length > 1) { ?>
<p id="highlight">The clocks go <?= $nextchange ?> on
<em><?php
    // set the timestamp of the DateTime object
    // to the next transition and display
    $date->setTimestamp($next['ts']);
    echo $date->format('F j'); ?></em></p>
<table>
    <tr>
        <th>Year</th>
        <th>Clocks Go <?=
            // display the direction and abbreviation
            "$directions[0] ($abbreviations[0])";
            ?></th>
        <th>Clocks Go <?=
            "$directions[1] ($abbreviations[1])";
            ?></th>
    </tr>
    <?php
    // loop through the transitions from the second one
    // to display the years and dates
    for ($i = 1; $i < $length; $i += 2) {
        $date->setTimestamp($transitions[$i]['ts']);
    ?>
    <tr>
        <td><?= $date->format('Y'); ?></td>
        <td><?= $date->format('F j'); ?></td>
        <td><?php
            // reset the timestamp to the next transition
            $date->setTimestamp($transitions[$i+1]['ts']);
            echo $date->format('F j');
            ?></td>
    </tr>
    <?php } // end of for loop ?>
</table>
<?php } // end of conditional statement ?>
</body>
</html>