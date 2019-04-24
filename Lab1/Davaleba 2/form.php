<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="width:100%" border="2px" >
<tr>
<caption>მონაცემები</caption>
<td>სტუდენტის სახელი:&nbsp; <?php echo  $_POST['name'];?></td>
</tr>
<tr>
<td>გვარი:&nbsp; <?php echo $_POST['lastName'];?></td>
</tr>
<tr>
<td>კურსი:&nbsp; <?php echo $_POST['course'];?></td>
</tr>
<tr>
<td>სემესტრი:&nbsp; <?php echo $_POST['semester'];?></td>
</tr>

<tr>
<td>ნიშანი:&nbsp; <?php echo $_POST['mark'];
$mark = $_POST['mark'];
if($mark>=90){
    echo "A-ფრიადი";
    
}
elseif($mark>=80){
    echo "B-ძალიან კარგი";
}
else{
    echo "c კარგი";
}
?>

</td>
</tr>

<tr>
<td>ლექტორი:&nbsp; <?php echo $_POST['lectour'];?></td>
</tr>
<tr>
<td>ლექტორის გვარი:&nbsp; <?php echo $_POST['lectourLastname'];?></td>
</tr>

</table>
</body>
</html>

