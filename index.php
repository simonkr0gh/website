<?php

class Calendar {
    public function getCurrentDate(): DateTime
    {
        $now = new DateTime();
        return $now;
    }
    public function formatDate(DateTime $date, string $format): string {
        return $date->format($format);
    }
}
$date = new Calendar();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="main-container">
        <?php
        $today = $date->formatDate($date->getCurrentDate(),"D, d M Y");
        $currentTime = $date->formatDate($date->getCurrentDate(),"h:i:s");
        ?>
        <div class="time-container">
        <h3>Today is <?= $today; ?> </h3>
        <h4>The current time is <?= $currentTime ?></h4>
        </div>
        <br>
    </div>
</body>
</html>