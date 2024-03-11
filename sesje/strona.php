<?php
    session_start();
    if(isset($_SESSION['log'])){
        header('location: strona.php');
        exit();
}
elseif(isset($_POST['nazwa'])&&isset($_POST['haslo'])){
    if($_POST['nazwa']=='admin'&&$_POST['haslo']=='admin123'){
        $_SESSION['log']=$_POST['nazwa'];
        header('location: strona.php');
        exit();
    }else{
        echo "Nieprawidlowe dane logowania";
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
    
</body>
</html>