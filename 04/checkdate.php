<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Check Date Validity</title>
</head>
<body>
<h1>Check Date</h1>
<form method="post">
    <p>
        <label for="month">Month: </label>
        <select name="month" id="month">
            <?php
            // Only the key for January is set explicitly.
            // The other months increment the key automatically.
            $months = [1 => 'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'];
            foreach ($months as $key => $value) {
                echo "<option value='{$key}'>{$value}</option>";
            }
            ?>
        </select>
        <label for="day">Day: </label>
        <select name="day" id="day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option>$i</option>";
            }
            ?>
        </select>
        <label for="year">Year: </label>
        <input type="text" name="year" id="year" list="year_list">
        <!-- A datalist creates an editable drop-down menu in HTML5 browsers. -->
        <datalist id="year_list">
            <?php
            $thisyear = date('Y');
            $limit = $thisyear + 5;
            while ($thisyear <= $limit) {
                echo "<option value='$thisyear'></option>";
                $thisyear++;
            }
            ?>
        </datalist>
    </p>
    <p>
        <input type="submit" name="check" value="Check Date">
    </p>
</form>
<?php
if (isset($_POST['check'])) {
    $month = $_POST['month'];
    $day   = $_POST['day'];
    $year  = $_POST['year'];
    echo "<p>Date submitted: $months[$month] $day, $year";
    if (checkdate($month, $day, $year)) {
        echo ' is valid.</p>';
    } else {
        echo ' is not valid.</p>';
    }
}
?>
</body>
</html>