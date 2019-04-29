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
 function cxrili(){
    global $masivi;
     $masivi = array();
     for($n = 0; $n < 100; $n++){
     $random = rand(10,99);
     $masivi[] = $random;
    }  
    $index = rand(0, 99);
     echo $masivi[$index];
     
 }

echo "<table border = 1 width = 500>";

for($x = 0; $x < 10; $x++){
    echo "<tr>";

    for($j = 0; $j < 10; $j++){
        echo   "<td>";
        cxrili();
        echo   "</td>";
    }
   
echo "</tr>";

}
echo "</table>";
?>
   
</body>
</html>