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
    $a = $_POST['a'];
    $b = $_POST['b'];

    function cxrili($a,$b, $M){
        global $masivi;
         $masivi = array();
         for($z = 0; $z < 100; $z++){
         $random = rand($a, $b);
         $masivi[] = $random;
        }  
        $index = rand($a, $b);
         echo $masivi[$index];
         
     }

    echo "<table border = 1 width = 500>";
    for($x = 0; $x < $M; $x++){
        echo "<tr>";
        for($j = 0; $j < $M; $j++){
            echo   "<td>";
            cxrili($a,$b, $M);
            echo   "</td>";
        }
       
    echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>