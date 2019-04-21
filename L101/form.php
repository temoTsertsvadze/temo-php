<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table  border="1px">
<tr >
<td>name: </td>
<td ><?php echo $_GET["name"]; ?><br /></td>
</tr>

<tr>
<td>last name:</td>
<td><?php echo $_GET["lastname"]; ?><br /></td>
</tr>

<tr>
<td>salary:</td>
<td><?php echo $_GET["salary"]; ?><br /></td>
</tr>

<tr>
<td>position:</td>
<td><?php echo $_GET["position"]; ?><br /></td>
</tr>

</table>

</body>
</html>