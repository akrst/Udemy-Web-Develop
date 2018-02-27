<?php
	$name = $_GET['name'];
	$password = $_GET['password'];

	if($name && $password){
		$dbc = mysqli_connect("localhost", "root", "root","testlogin") or die("could not connect to database, ERROR:".mysqli_connect_error());
		// mysqli_select_db($dbc, "testlogin");

		$query = mysqli_query($dbc, "SELECT * FROM users WHERE username='".$name."'");
		$numrows = mysqli_num_rows($query);

		if($numrows != 0){
			while($row = mysqli_fetch_assoc($query)){
				$dbname = $row['username'];
				$dbpassword = $row['password'];
			}
			if($name == $dbname){
				if ($password == $dbpassword){
					echo "You are in!";
				}else{
					echo "your password is incorrect!";
				}
			}else{
				echo "your name is incorrect!";
			}
		}else{
			echo "This name is not registered";
		}
	}else{
		echo "You have to type a username and password";
	}
?>