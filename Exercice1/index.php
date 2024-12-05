
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

if (isset($_GET["lastname"], $_GET["firstname"])){
    echo "C'est ok :) <br>";
} else {
    echo "C'est pas ok :( <br>";
}

if (isset($_GET["age"])){
    echo $_GET["age"];
} else {
    echo "Rentrez un age svp bg :( <br>";
}

if (isset($_GET["startDate"]) && isset($_GET["endDate"])){
    echo $_GET["startDate"] . "<br>" . $_GET["endDate"] . "<br>";
} else {
    echo "Rentrez une date svp bg :( <br>";
}

if (isset($_GET["language"]) && isset($_GET["server"])){
    var_dump($_GET["language"] . $_GET["server"]) ;
} else {
    echo "Je trouve rien bg :( <br>";
}

if (isset($_GET["weeks"]["week"])){
    echo $_GET["weeks"]["week"];
} else {
    echo "Je trouve rien bg :( <br>";
}

if (isset($_GET["building"]) && isset($_GET["room"])){
    echo $_GET["building"] . $_GET["room"];
} else {
    echo "Je sais pas t'es ou bg :( <br>";
}

?>

</body>

</html>