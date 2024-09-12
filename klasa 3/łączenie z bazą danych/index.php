<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="Post">
        <label>
            Podaj nazwę klasy: <input type="text" name="klasa">
        </label>
        <input type="submit" value="Pokaż oceny">
    </form>
    <?php
        echo "Hello World!";
    ?>
</body>
</html>