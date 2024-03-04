<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadaj Przesyłkę</title>
   <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class= "main">
        <section class="forms">
        <section class="form1">
            <form method = "POST">
                <table>
                    Rodzaj Przesyłki:
                    <tr><td><input type="radio" name="rodzaj" value="Cena: 1zł">Pocztówka</td></tr>
                    <tr><td><input type="radio" name="rodzaj" value="Cena: 1.5zł">List</td></tr>
                    <tr><td><input type="radio" name="rodzaj" value="Cena: 10zł">Paczka</td></tr>
                    <tr><td><input type="submit" value="Sprawdź Cenę"></td></tr>
                   
                </table>
            </form>
            <?php
                if(!isSet($_POST['rodzaj'])){
                    echo "nie podano rodzaju przesyłki! <br>";
                }
                else{
                    $rodzaj = $_POST['rodzaj'];
                    echo "<b>".$rodzaj."</b> <br>";
                }
                ?>

        </section>
        <section class = "form2">
            <form method = "GET">
                <table>
                    Dane Adresowe:
                    <tr><td>Ulica z numerem<br><input type="text" name="ulica"></td></tr>
                    <tr><td>Kod pocztowy<br><input type="text" name="Kpocztowy"></td></tr>
                    <tr><td>Miasto<br><input type="text" name="Miasto"></td></tr>
                    <tr><td><input type="submit" class="zatw" value="Zatwierdź"></td></tr>
                </table>
            </form>
            </section>
            </section>
    </section>
    <?php
                    // if(isset($_GET["Kpocztowy"])){
                    //     if(strlen($_GET["Kpocztowy"]) == 5 && is_numeric($_GET["Kpocztowy"]) && isset($_GET['ulica']) && isset($_GET['Miasto'])){
                        if(empty($_GET["Kpocztowy"]) || empty($_GET['ulica']) || empty($_GET['Miasto']) || isSet($_POST['rodzaj'])){
                            echo "Nie wprowadzono wszystkich danych!";
                        }
                        else{
                            echo "Dane przesyłki zostały wprowadzone";
                            echo "<br>";
                            echo"Ulica: ".$_GET["ulica"]."<br>"."Kod pocztowy: ".$_GET["Kpocztowy"]."<br>"."Miasto: ".$_GET["Miasto"];
                            
                        }
                           
                    //     }
                    //     else{
                    //         echo"Nieprawidłowa liczba cyfr w kodzie pocztowym";
                    //     }
                    // }
                    ?>
</body>
</html>