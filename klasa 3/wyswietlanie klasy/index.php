<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                $query = "SELECT Imie, Nazwisko, Srednia_ocen from uczen,klasa where nazwa='$klasa' and klasa.id=uczen.id_klasy";
                $result = mysqli_query($conn,$query) or die("Błąd danych");

                $ile = mysqli_num_rows($result);
                if($ile == 0){
                    echo '<span style="color:red">Nie ma takiej klasy!</span>';
                }else{
echo<<<END
    <table>
        <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Średnia ocen</th>
            </tr>
        </thead>
        <tbody>
END;

                    // while($row = mysqli_fetch_row($result)){
                    //     echo $row[0]."<br>";
                    // }
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        foreach($row as $col){
                            echo "<td>".$col."</td>";
                        }
                        echo "</tr>";
                        // echo "<tr><td>".$row['Imie']."</td><td>".$row['Nazwisko']."</td><td>".$row['Srednia_ocen']."</td></tr>";
                    }
                    // while($row = mysqli_fetch_array ($result)){
                    //     echo $row[0]."<br>";
                    // }
echo<<<END
        </tbody>
    </table>
END;

                }

                

                mysqli_close($conn);
            }
            
        }
        
        
    ?>
</body>
</html>