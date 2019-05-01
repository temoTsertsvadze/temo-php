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

 function generateSymbol(){
    global $masivi;
     $masivi = array();
     $keylength = 7;
    $str = "1234567890abcdefghijklmnopqrstuvwxyz";
    for($n = 0; $n < 100; $n++){
    $randStr = substr(str_shuffle($str), 0, $keylength);
     $masivi[] = $randStr;
    }
    $index = rand(0, 99);
     echo $masivi[$index];
    }

echo "<table border = 1 width = 500>";
for($x = 0; $x < 10; $x++){
    echo "<tr>";
    for($j = 0; $j < 10; $j++){
        echo   "<td>";
        generateSymbol();
        echo   "</td>";
    }
   
echo "</tr>";
}
echo "</table>";
?>
   
</body>
</html>