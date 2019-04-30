<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

    <label>შეიყვანეთ რიცხვი:</label>
    <input type="number" name="ricxvi">
    <button type="submit" name="submit">დადასტურება</button>
    
    </form>

    <?php
    
    if(isset($_POST["submit"])){
        $ricxvi = $_POST["ricxvi"];
        echo "რიცხვი არის ".strlen($ricxvi)." ნიშნა";
    }

    ?>
</body>
</html>