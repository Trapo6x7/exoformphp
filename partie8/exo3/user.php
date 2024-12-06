<?php




if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    // die();
    return;
}

if (isset($_POST['Login']) && isset($_POST['Password']) && !empty($_POST['Login']) && !empty($_POST['Password'])) {

    $login =  $_POST['Login'];
    $password = $_POST['Password'];

    setcookie("TestLogin", $login, time() + 3600, "/");
    setcookie("TestPass", $password, time() + 3600, "/");
}

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
        echo htmlspecialchars(trim($_COOKIE["TestLogin"])) . "<br>";
        echo htmlspecialchars(trim($_COOKIE["TestPass"])) . "<br>";
        ?>
    </p>

    <a href="index.php"> MODIFIER MES DATA </a>
</body>

</html>