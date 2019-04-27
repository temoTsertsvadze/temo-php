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
    $masivi = array
    (
        array(10, 11, 14, 20),
        array(20, 32, 45, 50),
        array(60, 62, 74, 70),
        array(80, 82, 84, 90),
    );

?>
    <table border = "1" width = "500px">
    <caption>4x4 რიცხვითი მატრიცა</caption>
    
    <tr>
    <td><?php echo $masivi[0] [0];?>
    <td><?php echo $masivi[0] [1];?>
    <td><?php echo $masivi[0] [2];?>
    <td><?php echo $masivi[0] [3];?>
    </tr>

    <tr>
    <td><?php echo $masivi[1] [0];?>
    <td><?php echo $masivi[1] [1];?>
    <td><?php echo $masivi[1] [2];?>
    <td><?php echo $masivi[1] [3];?>
    </tr>

    <tr>
    <td><?php echo $masivi[2] [0];?>
    <td><?php echo $masivi[2] [1];?>
    <td><?php echo $masivi[2] [2];?>
    <td><?php echo $masivi[2] [3];?>
    </tr>

    <tr>
    <td><?php echo $masivi[3] [0];?>
    <td><?php echo $masivi[3] [1];?>
    <td><?php echo $masivi[3] [2];?>
    <td><?php echo $masivi[3] [3];?>
    </tr>

    </table>


    <table border = "1" width = "500px">
    <caption>მატრიცის მთავარი დიაგონალის ზემოთ მდგომი ელემენტები</caption>

    <td><?php echo $masivi[0] [0];?>
    <td><?php echo $masivi[1] [1];?>
    <td><?php echo $masivi[2] [2];?>
    <td><?php echo $masivi[3] [3];?>

    </table>

    <form action="index.php" method="post">
    <label>შეიტანეთ X რიცხვი</label>
    <input type = "text" name = "ricxvi">
    <button type="submit" name="submit">შეტანა</button>
</form>

<?php

$jeradi = 0;
$jami = 0;
$namravli = 1;
$elemntebisRaodenoba = 0;
$ricxvi = $_POST["ricxvi"];

echo "მატრიცაში არსელუბული x რიცხვის ($ricxvi -  ის) ჯერადი რიცხვებია: ";
for($x = 0; $x < 4; $x++){
    for($j = 0; $j < 4; $j++){
        $elementi = $masivi[$x][$j];
        if(($elementi % $ricxvi) == 0)
        echo $elementi.", ";
    }       
 }

for($x = 0; $x < 4; $x++){
    for($j = 0; $j < 4; $j++){
        $elementi = $masivi[$x][$j];
        $jami = $jami + $elementi;
    }       
 }

    for($x = 0; $x < 4; $x++){
      for($j = 0; $j < 4; $j++){
          $elementi = $masivi[$x][$j];
          $namravli = $namravli * $elementi;
      }
    }

    for($x = 0; $x < 4; $x++){
        $xRaodenoba = count($masivi[$x]);
        $elemntebisRaodenoba = $elemntebisRaodenoba + $xRaodenoba;
        
    }

    
    echo "<br>";
    echo "მატრიცის ელემნტების ჯამია: $jami ";
    echo "<br>";
    echo "მატრიცის ელემნტების ნამრავლია: $namravli ";
    echo "<br>";
    echo "მატრიცის ელემნტების საშუალო არითმეტიკულია: ".$jami / $elemntebisRaodenoba;
    echo "<br>";
   
   
?>
</body>
</html>
