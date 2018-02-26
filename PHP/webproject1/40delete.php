<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('32connection.php');
		$id_user = mysqli_real_escape_string($dbc, trim($_POST['user_id']));

		mysqli_query($dbc, "DELETE FROM users WHERE id ='$id_user'");

		echo "The users has been sucessfully deleted!";

	}else{
		echo "Please Login";
	}
?>

<h3>Are you sure you want to delete this user? </h3>
<form method="post" action="40delete.php">
	<p>User ID:<input type="text" name="user_id" value="<?php echo $_GET['user_id']; ?>"></p>
	<p>Fisrt Name:<input type="text" name="first_name" value="<?php echo $_GET['fname']; ?>"></p>
	<p>Last Name:<input type="text" name="last_name" value="<?php echo $_GET['lname']; ?>" ></p>
	<p><input type="submit" name="" value="Yes"></p>
	<a href="35output.php" >Go Back</a>
</form>