<?php
session_start();
if(!isset($_SESSION['log']))
{
    header('location: loguj.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $imie=ucfirst($_SESSION['log']);
    echo "witaj ". $imie;
    ?>
    <p>Jestes na stronie glownej</p>
    <p>przed opuszczeniem strony wyloguj sie</p>
    <a href="./wyloguj.php">Wyloguj</a>
</body>
</html>