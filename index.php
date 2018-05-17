<!-- Takamasa Iijima-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StalinScreamerReleaser</title>
    <?php
    date_default_timezone_set('Asia/Tokyo');

    function getResult($now){
        $Y = (int)date("Y");
        $m = (int)date("m");
        $d = (int)date("d");

        $stalin ="1922.12.30";
        $result = $now - (double)("1922.12.30");
        print($now);
        return $result;
    }

    ?>

</head>
<body>

<h1>StalinScreamerReleaser</h1>

<?php

#date which open website
$today = date("Y.m.d");
$doubletoday = (double)$today;
$pass = getResult($doubletoday);
print ("Today is");
print("<h2>$today</h2>");
print ("Release Passcode is ")
print("<h1>$pass</h1>");

?>


</body>
</html>