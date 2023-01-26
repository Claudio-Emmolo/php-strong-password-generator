<?php
session_start();
include_once __DIR__ . '/functions.php';

// $charactersForPassword = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz|\!$%&/()=?^*+-=';
$charactersForPassword = '';
$length = $_GET['passwordLenght'];

$Onlyletters = $_GET['letters'];
$Onlynumbers = $_GET['numbers'];
$Onlyspecials = $_GET['specials'];

//Check user only select
if ($Onlyletters == 'true') {
    $charactersForPassword .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
}

if ($Onlynumbers == 'true') {
    $charactersForPassword .= '0123456789';
}

if ($Onlyspecials == 'true') {
    $charactersForPassword .= '|\!$%&/()=?^*+-=';
}

$repeatCharacters = $_GET['repeatingCharacters'];

//For reditect to result page
if (isset($length)) {
    $_SESSION['finalPassword'] = generatePassword($length, $charactersForPassword, $repeatCharacters);
    header('Location: ./result.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/general.css">

</head>

<body>
    <header>
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
    </header>

    <main>
        <form action="./index.php" method="GET">
            <div class="characterLength">
                <div class="title">
                    <label for="password-lenght">Lunghezza Password:</label>
                </div>
                <div class="box">
                    <input type="number" name="passwordLenght" id="password-lenght">
                </div>
            </div>

            <div class="repeating-characters">
                <div class="title">
                    <span>Consenti ripetizione di uno o più caratteri:</span>
                </div>
                <div class="box">
                    <div class="choose-repeat-characters">
                        <input type="radio" id="yes-repeating-characters" name="repeatingCharacters" value="true">
                        <label for="yes-repeating-characters">Si</label>
                        <br>
                        <input type="radio" id="no-repeating-characters" name="repeatingCharacters" value="false">
                        <label for="no-repeating-characters">No</label>
                    </div>
                    <div class="choose-characters-type">
                        <input type="checkbox" id="letters" name="letters" value="true">
                        <label for="letters"> Lettere</label>
                        <br>
                        <input type="checkbox" id="numbers" name="numbers" value="true">
                        <label for="numbers"> Numeri</label>
                        <br>
                        <input type="checkbox" id="specials" name="specials" value="true">
                        <label for="specials">Caratteri speciali</label>
                    </div>
                </div>
            </div>

            <button type="submit">Invia</button>
        </form>
    </main>

</body>

</html>