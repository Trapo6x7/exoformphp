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

        $date = DateTimeImmutable::createFromFormat("Y-d-m - H:i", "2016-02-08- 15:00");

        date_default_timezone_set("Europe/Paris");
        echo "NOW :" . time() . "<br>";
        echo "LAST DATE :" . $date->getTimestamp() . "<br>";

        ?>
    </p>
</body>

</html>

<!-- Timestamp of the start of the request is available in $_SERVER['REQUEST_TIME']. -->