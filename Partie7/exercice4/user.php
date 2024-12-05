<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    // die();
    return;
}

if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
        echo "Prénom : " . $_POST['firstName'] . "<br>" ;
        echo "Nom : " . $_POST['lastName'] . "<br>" ;
}

