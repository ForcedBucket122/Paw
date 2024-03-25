<?php
    error_reporting(0);
        $uzytkownicy=['admin'=>'admin123','nieAdmin'=>'nieAdmin123','jeden'=>'jeden123'];
        session_start();
        if(isset($_SESSION['log'])){
            header('location: strona.php');
            exit();
        }
        elseif(isset($_POST['nazwa']) && isset($_POST['haslo'])){
            if(sprawdz($uzytkownicy)==true){
                $_SESSION['log'] = $_POST['nazwa'];
                header('location: strona.php');
                exit();
            }
            else{
                echo "Nieprawidłowe dane logowania";
            }
        }
        function sprawdz($uzytkownicy){
            if(!empty($_POST['nazwa']) && !empty($_POST['haslo'])){
                if($_POST['haslo'] == $uzytkownicy[$_POST['nazwa']]){
                    return true;
                }
            }
        }
    ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesje</title>
</head>
<body>
<form method="post" >
        <p>Logowanie</p>
        Nazwa użytkownika: <input type="text" name="nazwa" value="" size="25"><br><br>
        Hasło: <input type="password" name="haslo" value="" size="25"><br><br>
        <input type="submit" value="Zaloguj się">
    </form>
</body>
</html>