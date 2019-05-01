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
    $kodi1 = $_SESSION['kodi1'];
    $kodi2 = $_SESSION['kodi2'];
    $rkodi = $kodi1 + $kodi2;
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