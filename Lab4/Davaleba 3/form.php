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
    $rkodi = $_SESSION['rkodi'];
    $kodi = $_POST['kodi'];
    if($kodi == $rkodi){
        echo "კოდი სწორია";
    }
    else{
        echo "კოდი არასწორია";
    }
?>

</body>
</html>