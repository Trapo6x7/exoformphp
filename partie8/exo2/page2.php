<?php
session_start();
?>

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
        echo $_SESSION["firstname"] . " " . $_SESSION["lastname"] . " " . $_SESSION["age"] . " ans". "<br>" ;
        ?></p>
</body>

</html>