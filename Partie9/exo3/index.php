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
        $date = new DateTime();
        $formatter = new IntlDateFormatter(
            'fr_FR', // Format : jour semaine string, jour int, mois string, année int
        );
        $formatter->setPattern('EEEE d MMMM y');

        echo $formatter->format($date);
        ?>
    </p>
</body>

</html>