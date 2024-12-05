<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    var_dump("hello");
    header('location: ./index.php');
    // die();
    return;
}


var_dump($_POST);