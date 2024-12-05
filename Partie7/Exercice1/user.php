<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    var_dump("hello");
    header('location: ./index.php');
    // die();
    return;
}


var_dump($_GET);