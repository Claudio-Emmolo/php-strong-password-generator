<?php
$charactersForPassword = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz|\!£$%&/()=?^*+-=';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <header>
        <form action="./index.php" method="GET">
            <label for="password-lenght">Inserisci lunghezza password</label>
            <input type="number" name="passwordLenght" id="password-lenght">
            <button type="submit">Invia</button>
        </form>
    </header>
</body>

</html>