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
    
        if (isset($_COOKIE['imie_nazwisko'])) {
            $imieNazwisko = $_COOKIE['imie_nazwisko'];
            echo $imieNazwisko.", Witamy po raz kolejny! ";
        } else {
            echo '<form method="post">
                Imię: <input type="text" name="imie"><br>
                Nazwisko: <input type="text" name="nazwisko"><br>
                <input type="submit" value="Zapisz">
            </form>';
        }
    ?>
</body>
</html>
