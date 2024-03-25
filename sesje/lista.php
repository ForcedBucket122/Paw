
<!DOCTYPE html>
<html>
<head>
    <title>Wybór produktów</title>
</head>
<body>
    <h1>Wybierz produkty:</h1>
    <form action="lista.php" method="post">
        <label for="produkt">Wybierz produkt:</label>
        <select name="produkt" id="produkt">
            <option value="jabłko">Jabłko</option>
            <option value="banan">Banan</option>
            <option value="gruszka">Gruszka</option>
            <option value="karabin maszynowy">Karabin Maszynowy</option>
        </select>
        <input type="submit" value="Dodaj do koszyka">
    </form>
    <a href="koszyk.php"><button>KOSZYK</button></a>
</body>
</html>
<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $wyb_produkt = $_POST['produkt']; 
    
        if (!isset($_SESSION['kosz'])) {
            $_SESSION['kosz'] = array();
        }
    
        $_SESSION['kosz'][] = $wyb_produkt;
        echo "<br>Wybrany produkt: ".$wyb_produkt." został dodany do koszyka!";
        // header('Location: koszyk.php');
        exit;
    }
?>