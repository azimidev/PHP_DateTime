<?php
$identifiers = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'IR');
echo '<p>' . count($identifiers) . ' identifiers found:</p>';
echo '<ul>';
foreach ($identifiers as $id) {
    echo '<li>';
    echo $id;
    $tz = new DateTimeZone($id);
    $comments = $tz->getLocation()['comments'];
    if ($comments) {
        echo ' : ' . $comments;
    }
    echo '</li>';
}
echo '</ul>';