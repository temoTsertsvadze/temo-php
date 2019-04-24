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
 

$correct = 0;

    if($_POST["pasuxi1"] === "a"  ) {
         
        $correct = $correct + 1;
    }

    if($_POST["pasuxi2"] === "d"  ) {
         
        $correct = $correct + 1;
    }

    if($_POST["pasuxi3"] === "a"  ) {
         
        $correct = $correct + 1;
    }
   
    if($_POST["pasuxi4"] == '$'  ) {
         
        $correct = $correct + 1;
    }
   
    if($_POST["pasuxi5"] == "Hello, World"  ) {
         
        $correct = $correct + 1;
    }
   
    
echo "სწორი პასუხების რაოდენობაა:  $correct"; 
?>
</body>
</html>