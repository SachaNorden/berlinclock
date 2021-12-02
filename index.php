<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require("BerlinClock.php");
date_default_timezone_set('Europe/Brussels');

$clock = new BerlinClock(new DateTime("now"));
echo "<p>".$clock->getActualDate()."</p>";

echo "<p>";
echo $clock->getSecondes();
echo "</p>";

echo "<p>".$clock->getFiveHours()."</p>";
echo "<p>".$clock->getHours()."</p>";
echo "<p>".$clock->getFiveMinutes()."</p>";
echo "<p>".$clock->getMinutes()."</p>";

?>
</body>
<meta http-equiv="refresh" content="0.5;url=http://localhost/2022/berlinclock"/>
</html>