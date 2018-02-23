<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="post" action="21grab.php"> <!-- actionでファイルを指定すると、そのファイルへ遷移する -->
		<!-- getはURLを介して情報をやり取りするため、見える。セキュリティが甘い方法 -->
		<p>First Name: <input type="text" name="fname"></p>
		<p>Last Name: <input type="text" name="lname"></p>
		<p>Password: <input type="hidden" name="secret1" value="password is 12345"></p>
		<p><input type="submit" name="submit" value="send"></p>

	</form>

</body>
</html>

