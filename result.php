<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./styles/result.css">
    <link rel="stylesheet" href="./styles/general.css">
</head>

<body>
    <main>
        <div class="result-box">
            <h1>La tua password è:</h1>
            <?php
            echo '<span>';
            echo $_SESSION['finalPassword'];
            echo '</span>';

            ?>
        </div>

        <div class="reset">
            <a href="reset.php">RESET</a>
        </div>
    </main>
</body>

</html>