<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		Judul	: 
		<input type="text" name="judul" placeholder="Judul">
		<br>
		<br>
		Isi	:
		<textarea name="isi" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>