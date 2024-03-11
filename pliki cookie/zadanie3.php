<?php
    if (isset($_COOKIE['liczba_odwiedzin'])) {
        $liczbaOdwiedzin = $_COOKIE['liczba_odwiedzin'];
        $liczbaOdwiedzin++;
    } else {
        $liczbaOdwiedzin = 1;
    }

    setcookie('liczba_odwiedzin', $liczbaOdwiedzin, time() + 12 * 30 * 24 * 60 * 60);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja Strona</title>
</head>
<body>
    <h1>Witaj na naszej stronie!</h1>
    <?php
        echo " W ciągu ostatniego roku odwiedziłeś naszą stronę $liczbaOdwiedzin razy.";
    ?>
</body>
</html>
