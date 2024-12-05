<?php




if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    // die();
    return;
}

if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
    echo "Genre : " . $_POST['gender'] . "<br>";
    echo "Prénom : " . $_POST['firstName'] . "<br>";
    echo "Nom : " . $_POST['lastName'] . "<br>";
}



if (isset($_POST['avatar'])) {

    $avatar = substr($_POST['avatar'], -4);

    if ($avatar !== ".pdf") {

        header('location: ./index.php');
        echo "Je n'accepte que les pdf bro.";
        // die();
        return;
    }
}
