<?php
    $host="localhost";
    $login="root";
    $haslo="";
    $db="karp";
    $con=mysqli_connect($host,$login,$haslo,$db) or die("error");
    if(mysqli_connect_errno()){
        echo "błąd połączenia".mysqli_connect_error();
    }else{
        echo"połączono z bazą";
    }
    mysqli_close($con);
