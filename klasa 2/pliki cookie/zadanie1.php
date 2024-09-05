<?php
    $data=date("Y-m-d H:i");
    setcookie('data',$data,time() + 30 * 24 * 60 * 60);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja Strona</title>
</head>
<body>
    <h1>Witaj na naszej stronie!</h1>
    <?php
        if(isset($_COOKIE['data'])){
            echo " Witamy ponownie! Ostatni raz odwiedziłeś nas: ".$_COOKIE['data'];
        }
    ?>
</body>
</html>
