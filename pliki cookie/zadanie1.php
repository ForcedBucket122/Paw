<?php
if (isset($_POST['imie']) && isset($_POST['nazwisko'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

    setcookie('imie_nazwisko', "$imie $nazwisko", time() + 30 * 24 * 60 * 60);
    
}
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
        if (isset($_COOKIE['liczba_odwiedzin'])) {
            $liczbaOdwiedzin = $_COOKIE['liczba_odwiedzin'];
            $liczbaOdwiedzin++;
        } else {
            $liczbaOdwiedzin = 1;
        }
    
        setcookie('liczba_odwiedzin', $liczbaOdwiedzin, time() + 12 * 30 * 24 * 60 * 60);
    
        if (isset($_COOKIE['imie_nazwisko'])) {
            $imieNazwisko = $_COOKIE['imie_nazwisko'];
            echo "Witamy ponownie! Ostatni raz odwiedziłeś nas: $imieNazwisko.";
        } else {
            echo '<form method="post">
                Imię: <input type="text" name="imie"><br>
                Nazwisko: <input type="text" name="nazwisko"><br>
                <input type="submit" value="Zapisz">
            </form>';
        }

        echo " W ciągu ostatniego roku odwiedziłeś naszą stronę $liczbaOdwiedzin razy.";
    ?>
</body>
</html>
