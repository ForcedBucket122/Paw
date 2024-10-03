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
        if(isset($_POST["klasa"])){
            if(empty($_POST["klasa"])){
                echo '<span style="color:yellow">Nie podano nazwy klasy!</span>';
            }else{
                require "dbconnect.php";
                $conn = mysqli_connect($host,$user,$pass,$db) or die("Błąd połączenia");
                // if(!$conn){
                //     echo "Błąd połączenia z bazą!";
                // }
                // else{
                //     echo "Połączono z bazą";
                // }
                $klasa=$_POST['klasa'];
                $query = "SELECT Imie, Nzawisko, Srednia_ocen from uczen where nazwa='$klasa' and klasa.id=uczen.id_klasy";
                $result = mysqli_query($conn,$query) or die("Błąd danych");
                while($row = mysqli_fetch_array($result)){
                    
                }
            }
            
            mysqli_close($conn);
        }
        
        
    ?>
</body>
</html>