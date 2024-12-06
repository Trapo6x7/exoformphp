<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./user.php" method="post">

        <select name="gender" id="gender">
            <option value="">-- Quel est votre genre? --</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>

        <label for="firstName"> Prenom :</label>
        <input type="text" name="firstName" id="firstName" required maxlength="10">

        <label for="lastName"> Nom de famille :</label>
        <input type="text" name="lastName" id="lastName" required maxlength="10">

        <label for="avatar">Choose a profile picture:</label>
        <input type="file" id="avatar" name="avatar"/>

        <input type="submit" value="Envoyer">

    </form>
</body>

</html>