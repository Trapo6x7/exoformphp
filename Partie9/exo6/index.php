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

        $dateFeb = DateTimeImmutable::createFromFormat("Y-d-m - H:i", "2016-01-02 - 00:00");
        $dateMar = DateTimeImmutable::createFromFormat("Y-d-m - H:i", "2016-01-03 - 00:00");

        $dateFebTime = $dateFeb->getTimestamp();
        $dateMarTime = $dateMar->getTimestamp();

        $passFebDays = $dateMarTime - $dateFebTime;

        $passMin = $passFebDays / 60;
        $passHours = $passMin / 60;
        $passDays = $passHours / 24;

        echo "Le nombre de jours en Fevrier 2016 est de : " . $passDays . " jours.";

        date_default_timezone_set("Europe/Paris");

        ?>
    </p>
</body>

</html>