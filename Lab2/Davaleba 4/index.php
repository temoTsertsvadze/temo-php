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

$cars = array(
array("Mark"  => "Toyota",
      "Model" => "Corolla",
      "Color" => "White",
      "Mileage" => 24000,
      "Status" => "Sold"),

array("Mark"  => "Toyota",
      "Model" => "Camry",
      "Color" => "Black",
      "Mileage" => 56000,
      "Status" => "Available"),

array(
    "Mark"  => "Honda",
    "Model" => "Accord",
    "Color" => "White",
    "Mileage" => 15000,
    "Status" => "Sold"
)

);
?>

<table border = "1px" width = "500px">
<caption>მრავალ განზომილებიანი ასოციაციური მასივი</caption>
<tr>
<th>Mark</th>
<th>Model</th>
<th>Color</th>
<th>Mileage</th>
<th>Status</th>

<tr>
<td> <?php echo $cars[0]["Mark"] ?>
<td> <?php echo $cars[0]["Model"] ?>
<td> <?php echo $cars[0]["Color"] ?>
<td> <?php echo $cars[0]["Mileage"] ?>
<td> <?php echo $cars[0]["Status"] ?>

<tr>
<td> <?php echo $cars[1]["Mark"] ?>
<td> <?php echo $cars[1]["Model"] ?>
<td> <?php echo $cars[1]["Color"] ?>
<td> <?php echo $cars[1]["Mileage"] ?>
<td> <?php echo $cars[1]["Status"] ?>

<tr>
<td> <?php echo $cars[2]["Mark"] ?>
<td> <?php echo $cars[2]["Model"] ?>
<td> <?php echo $cars[2]["Color"] ?>
<td> <?php echo $cars[2]["Mileage"] ?>
<td> <?php echo $cars[2]["Status"] ?>

</table> 

</body>
</html>