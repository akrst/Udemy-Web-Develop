<?php
$name = $_POST['phpname'];
$password = $_POST['phppassword'];

if ($name && $password){
	echo "your logged in!";
}else{
	echo "you have to type a name and password!";
}


?>