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
session_start(); 
$_SESSION['kodi1']= rand(10, 99);
$_SESSION['kodi2']= rand(10, 99);
echo $_SESSION['kodi1'];
echo '+';
echo $_SESSION['kodi2'];
    ?>

    <form action="form.php" method="post">

    <label>შეიტანეთ 5 ნიშნა კოდი:</label>
    <input type="number" name="kodi"></input>
    <button type="submit" name="submit">გაგზავნა</button>
    
    </form>

</body>
</html>