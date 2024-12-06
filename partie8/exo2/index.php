<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    session_start();

    $lastname = "Mathias";
    $firstname = "Chambriard";
    $age = 32;

    $_SESSION["lastname"] = $lastname;
    $_SESSION["firstname"] = $firstname;
    $_SESSION["age"] = $age;

    ?>

 <a href="page2.php">SUBMIT</a>

</body>

</html>