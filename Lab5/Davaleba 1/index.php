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
    ?>
    <form action="index.php" method="post">
    <input type = "text" name = "mail" placeholder = "e-mail"> <br>
    <input type = "password" name = "pwd" placeholder = "პაროლი"> <br>
    <input type = "password" name = "rpwd" placeholder = "გაიმეორე პაროლი"> <br>
    <button type = "submit" name = "submit"> შესვლა </button>
    </form>

    <?php
    if (isset($_POST["submit"])){
    $email = $_POST["mail"];
    $password = $_POST["pwd"];
    $rPassword = $_POST["rpwd"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "ჩაწერეთ სწორი e-mail<br>";
    }

    if($password != $rPassword){
        echo "პაროლები ერთმანეთს არ ემთხვევა<br>";
    }
    }
    ?>
</body>
</html>