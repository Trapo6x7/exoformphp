<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./user.php" method="post">

        <label for="Login"> Login :</label>
        <input type="text" name="Login" id="Login" required maxlength="10">

        <label for="Password"> Password :</label>
        <input type="password" name="Password" id="Password" required maxlength="10">

        <input type="submit" value="Envoyer">

    </form>
</body>

</html>