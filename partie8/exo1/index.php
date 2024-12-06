<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Informations utilisateur</h1>
    <p>User Agent : <span class="info" id="userAgent">
            <?php

            echo $_SERVER['HTTP_USER_AGENT']

            ?>
        </span></p>
    <p>Adresse IP : <span class="info">
            <?php

            echo $_SERVER['REMOTE_ADDR']

            ?></span></p>
    <p>Nom du serveur : <span class="info">
            <?php

            echo $_SERVER['HTTP_HOST']

            ?></span></p>
</body>

</html>