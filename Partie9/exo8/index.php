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

        $dateNow = new DateTime();
        $dateNowTime = $dateNow->getTimestamp();

        $passDays = 22;
        $passHours = $passDays * 24;
        $passMin = $passHours * 60;
        $passSec = $passMin * 60;

        $result22jours = $dateNowTime - $passSec;

        echo "La date du jour - 22 jours est de " . date('d/m/Y', $result22jours) . ".";
        // echo "Le nombre de jours passés depuis le 16 mai 2016 est de : " . $passDays . " jours.";

        // date_default_timezone_set("Europe/Paris");

        ?>
    </p>
</body>

</html>