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

$numbers = array(10, 15, 20, 25, 30, 40, 50, 60, 70, 80, 90, 100);
$metia = 0;
$naklebia = 0;
$arrlength = count($numbers);
$x = $_POST["number"];
print_r($numbers);
echo "<br>";

for($i=0; $i<$arrlength; $i++){
    if($x > $numbers[$i]){
        $metia = $metia + 1;
    }
    else{
        $naklebia =$naklebia +1;
    }
}

echo "$x რიცხვი მეტია $metia რიცხვზე<br>";
echo "$x რიცხვი ნაკლებია $naklebia რიცხვზე<br>";

?>
</body>
</html>