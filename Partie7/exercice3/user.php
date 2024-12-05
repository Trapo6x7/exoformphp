<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ./index.php');
    // die();
    return;
}

if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
        echo "Prénom : " . $_GET['firstName'] . "<br>" ;
        echo "Nom : " . $_GET['lastName'] . "<br>" ;
}

