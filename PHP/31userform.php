<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="33proccesing.php" method="post">
		<p>Fisrt Name: <input type="text" name="fname" size="20" maxlength="50" ></p>
		<p>Last Name: <input type="text" name="lname" size="20" maxlength="50" ></p>
		<p>Email: <input type="text" name="email" size="40" maxlength="50" ></p>
		<p>Gender: <input type="radio" name="gender" value="M" >Male
		<input type="radio" name="gender" value="F" >Female</p>
		<p>Age: <select name ="age">
				<option value="0-29">Under 30</option>
				<option value="30-60">Between30 and 60</option>
				<option value="60+">Over 60</option>
				</select>
		</p>
		<p>Comments: <br><textarea name="comments" rows="3" cols="40" maxlength="200"></textarea></p>
		<p>Password: <input type="password" name="password" maxlength="20"></p>
		<p><input type="submit" name="submit" value="Submit"></p>

	</form>

</body>
</html>

