<?php
session_start();
if(!isset($_SESSION['log'])){
    header('location: wyloguj.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BAZINGA</h1>
    <?php
        $imie = ucfirst($_SESSION['log']);
        echo "Witaj ".$imie;
    ?>
    <p>Jesteś na stronie głównej</p>
    <p>Przed opuszczeniem strony wyloguj się!</p>
    <a href="wyloguj.php">Wyloguj</a>
</body>
</html>