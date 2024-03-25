
<!DOCTYPE html>
<html>
<head>
    <title>Wybór produktów</title>
</head>
<body>
    <h1>Wybierz produkty:</h1>
    <form action="lista.php" method="post">
        <label for="product">Wybierz produkt:</label>
        <select name="product" id="product">
            <option value="jabłko">Jabłko</option>
            <option value="banan">Banan</option>
            <option value="gruszka">Gruszka</option>
        </select>
        <input type="submit" value="Dodaj do koszyka">
    </form>
    <a href="koszyk.php"><button>KOSZYK</button></a>
</body>
</html>
<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedProduct = $_POST['product']; 
    
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
    
        $_SESSION['cart'][] = $selectedProduct;
        echo "<br>Wybrany produkt: ".$selectedProduct." został dodany do koszyka!";
        // header('Location: koszyk.php');
        exit;
    }
?>