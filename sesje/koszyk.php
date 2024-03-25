<?php
session_start();

if (isset($_SESSION['kosz']) && !empty($_SESSION['kosz'])) {
    echo '<h1>Twój koszyk:</h1>';
    echo '<p>Liczba produktów w koszyku: ' . count($_SESSION['kosz']) . '</p>';
    echo '<form action="usun_produkt.php" method="post">';
    echo '<ul>';
    foreach ($_SESSION['kosz'] as $produkt) {
        echo '<li>';
        echo '<input type="checkbox" name="usun[]" value="' . $produkt . '">';
        echo $produkt;
        echo '</li>';
    }
    echo '</ul>';
    echo '<input type="submit" value="Usuń zaznaczone produkty">';
    echo '</form><br><a href="lista.php"><button>DODAJ WIECEJ PRODUKTOW!</button></a>';
} else {
    echo '<p>Koszyk jest pusty.</p><a href="lista.php"><button>DODAJ PRODUKTY!</button></a>';
}
?>
