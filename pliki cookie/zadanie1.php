<?php
    $date=date("Y-m-d H:i");
    setcookie("pismo", $date, time()+3600,"/","localhost",false);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["pismo"])){
        echo "<p>Jestes naszym stalym klientem.</p>";
        echo "Ostatni raz byles na naszej stronie: ".$_COOKIE["pismo"];
        }
        else{
        echo "<p>Witamy po raz pierwszy na naszej stronie </p>";
        }
    ?>    
</body>
</html>