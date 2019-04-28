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
    
    $masivi = array(
        array(10, 13, 15, 16, 17,36),
        array(23, 43, 65, 12, 76, 43),
        array(76, 45, 23, 43, 45, 65),
        array(76, 43, 23, 32, 23, 43),
        array(74, 12, 21, 43, 54, 65)
    );
?>
    <table border = "1" width = "500px">
    <caption>4x4 რიცხვითი მატრიცა</caption>
    
    <tr>
    <td><?php echo $masivi[0] [0];?>
    <td><?php echo $masivi[0] [1];?>
    <td><?php echo $masivi[0] [2];?>
    <td><?php echo $masivi[0] [3];?>
    <td><?php echo $masivi[0] [4];?>
    <td><?php echo $masivi[0] [5];?>
    </tr>

    <tr>
    <td><?php echo $masivi[1] [0];?>
    <td><?php echo $masivi[1] [1];?>
    <td><?php echo $masivi[1] [2];?>
    <td><?php echo $masivi[1] [3];?>
    <td><?php echo $masivi[1] [4];?>
    <td><?php echo $masivi[1] [5];?>
    </tr>

    <tr>
    <td><?php echo $masivi[2] [0];?>
    <td><?php echo $masivi[2] [1];?>
    <td><?php echo $masivi[2] [2];?>
    <td><?php echo $masivi[2] [3];?>
    <td><?php echo $masivi[2] [4];?>
    <td><?php echo $masivi[2] [5];?>
    </tr>

    <tr>
    <td><?php echo $masivi[3] [0];?>
    <td><?php echo $masivi[3] [1];?>
    <td><?php echo $masivi[3] [2];?>
    <td><?php echo $masivi[3] [3];?>
    <td><?php echo $masivi[3] [4];?>
    <td><?php echo $masivi[3] [5];?>
    </tr>

    
    <tr>
    <td><?php echo $masivi[4] [0];?>
    <td><?php echo $masivi[4] [1];?>
    <td><?php echo $masivi[4] [2];?>
    <td><?php echo $masivi[4] [3];?>
    <td><?php echo $masivi[4] [4];?>
    <td><?php echo $masivi[4] [5];?>
    </tr>

    </table>
</body>
</html>