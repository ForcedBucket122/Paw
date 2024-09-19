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
        require "dbconnect.php";
        $conn = mysqli_connect($host,$user,$pass,$db) or die("Błąd połączenia");
        // if(!$conn){
        //     echo "Błąd połączenia z bazą!";
        // }
        // else{
        //     echo "Połączono z bazą";
        // }
        mysqli_close($conn);
    ?>
</body>
</html>