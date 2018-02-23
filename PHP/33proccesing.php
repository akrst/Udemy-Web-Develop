<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	// Processing form values
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $comments = $_POST['comments'];
    $password = $_POST['password'];

	if  (isset($fname, $lname, $email, $gender, $age, $comments, $password)){
		include('32connection.php');
		
	}else{
		echo "Please fill all values of the form!";
	}
}else{
	echo "No form has been submitted";
}
?>

