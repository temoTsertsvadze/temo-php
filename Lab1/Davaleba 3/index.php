<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
    
    <form action="form.php" method="POST">
		
        <label>1) რას უდრის 5+10?</label><br>
        <input type="radio" name="pasuxi1" value="a">15-ს
        <input type="radio" name="pasuxi1" value="b">9-ს
        <input type="radio" name="pasuxi1" value="c">8-ს
		<input type="radio" name="pasuxi1" value="d">7-ს<br>
		
		<label>2) რომელი არ არის დაპროგრამების ენა?</label><br>
		<input type="radio" name="pasuxi2" value="a">C++
		<input type="radio" name="pasuxi2" value="b">C# 
		<input type="radio" name="pasuxi2" value="c">Java
		<input type="radio" name="pasuxi2" value="d">CSS<br>

		<label>3) რომელია საქართველოს დედაქალაქი?</label><br>
		<input type="radio" name="pasuxi3" value="a">თბილისი
		<input type="radio" name="pasuxi3" value="b">ლონდონი 
		<input type="radio" name="pasuxi3" value="c">კიევი
		<input type="radio" name="pasuxi3" value="d">სტოკჰოლმი<br>

		<label>4) რომელი სიმბოლოთი იწყება ცვლადის აღწერა php-ში?</label><br>
		<input type="text" name="pasuxi4" placeholder="შეიყვანეთ სიმბოლო"><br>
		
        <label>5) რა დაიბეჭდება ეკრანზე მოცემულ მაგალითში? 'echo "Hello, World";' </label><br>
		<input type="text" name="pasuxi5" placeholder="შეიყვანეთ ტექსტი"><br>

   
        <button type="submit" name="send">გაგზავნა</button><br>
    </form>


</body>
</html>