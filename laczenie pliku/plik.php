<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    function sprawdz(f, x) {
      if (f.value.length>x-1) {
        // alert("mozesz wpisac tylko "+x+" znakow");
        f.value = f.value.substr(0,x);
        // f.disabled=true;
      }
    }
    </script>
    <form action="plik.php" method="post">
        <h1>Dodaj opinię na temat ryb</h1><br>
        max.255 znaków <br>
        <textarea name="opinia" cols="30" rows="10" onkeyup="sprawdz(this,255)"></textarea> <br>
        <input type="submit" value="Prześlij opinię">
    </form>
<?php
    $tekst=$_POST['opinia']."<br>\n";
    if(!$p=fopen('opinie.txt','a')){
        echo 'Nie można otworzyć pliku opinie.txt';
    }else{
        if(fwrite($p,$tekst)===false){
            echo 'Zapis do pliku nie powiódł sie';
        }else{
            {
                echo 'Dodane opinie:';
                $fp=fopen("opinie.txt","r");
                echo "<p>".$txt=fread($fp,1000)."<p>";
            }
        }
        fclose($p);
        fclose($fp);
    }
?>
</body>
</html>