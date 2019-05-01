<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $M = $_POST['m'];
    $N = $_POST['n'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    function cxrili($a,$b, $M, $N){
        global $masivi;
     $masivi = array();
    $str = "1234567890abcdefghijklmnopqrstuvwxyz";
    for($n = 0; $n < 100; $n++){
    $randStr = substr(str_shuffle($str), $a, $b);
     $masivi[] = $randStr;
    }
    $index = rand(0, 99);
     echo $masivi[$index];
         
     }
    echo "<table border = 1 width = 500>";
    for($x = 0; $x < $M; $x++){
        echo "<tr>";
        for($j = 0; $j < $N; $j++){
            echo   "<td>";
            cxrili($a,$b, $M, $N);
            echo   "</td>";
        }
       
    echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
