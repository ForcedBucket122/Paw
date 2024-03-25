<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo '<h1>Twój koszyk:</h1><br>';
    echo 'Ilość produktów w koszyku: '.count($_SESSION['cart']);
    echo '<br><ul><form>';
    $i=0;
    foreach ($_SESSION['cart'] as $product) {
        echo '<li>' . $product . '<input type="checkbox" name="produkt" value="'.$i.'"></li>';  
        $i++;
    }
    echo '</ul></form><br><a href="lista.php"><button>DODAJ WIECEJ PRODUKTOW</button></a>';
} else {
    echo '<p>Koszyk jest pusty.</p><br><a href="lista.php"><button>DODAJ PRODUKTY</button></a>';
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
    <form action="koszyk.php" method="post">
        <input type="submit" value="Usuń">
    </form>
</body>
</html>
<?php

?>