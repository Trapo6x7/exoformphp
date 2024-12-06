<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php

        $date = DateTimeImmutable::createFromFormat("Y-d-m", "2016-16-05");
        $dateNow = new DateTime();

        $dateTime = $date->getTimestamp();
        $dateNowTime = $dateNow->getTimestamp();

        $passDays = $dateNowTime - $dateTime;

        $passMin = $passDays / 60;
        $passHours = $passMin / 60;
        $passDays = $passHours / 24;

        echo "Le nombre de jours passés depuis le 16 mai 2016 est de : " . $passDays . " jours.";

        date_default_timezone_set("Europe/Paris");

        ?>
    </p>
</body>

</html>