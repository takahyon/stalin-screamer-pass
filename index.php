<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StalinScreamerReleaser</title>
    <?php
    date_default_timezone_set('Asia/Tokyo');

    function time_diff($time_from, $time_to)
    {
        // get the diff from unit of the day
        $dif = $time_to - $time_from;

        // get diff days
        $dif_days = (strtotime(date("Y-m-d", $dif)) - strtotime("1970-01-01")) / 86400;
        return "{$dif_days}days";
        echo $dif;
    }

    ?>
</head>
<body>

<h1>StalinScreamerReleaser</h1>

<?php
//day which accesess this site
$today = date("Y-m-d");

$from = strtotime("1922-12-30");
$to = strtotime($today);

print ("Today is");
print("<h2>$today</h2>");
print ("Release Passcode is ");
//print the result
$result = time_diff($from, $to);
print("<h1>$result</h1>");

?>

</body>
</html>