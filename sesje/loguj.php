<?php
    session_start();
    if(isset($_SESSION['log'])){
        header('location: strona.php');
        exit();
    }
    elseif (isset($_POST['nazwa'])&&isset($_POST['haslo'])) {
        if($_POST['nazwa']=='admin'&& $_POST['haslo']=='admin123')
    {
        $_SESSION['log']=$_POST['nazwa'];
        header('location : strona.php');
        exit();
    }
    else
    {
        echo "nieprawidlowe dane logowania";
    }
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
    <form action="http://localhost/2pb/sesje/strona.php" method="post">
        <p>logowanie</p>
        Nazwa uzytkownika: <input type="text" name="nazwa" id=""><br><br>
        <input type="password" name="haslo" id=""><br><br>
        <input type="submit" value="zaloguj sie">
    </form>
</body>
</html>