<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php
	$first_name = $_POST["fname"]; //input nameを入れる
	$last_name = $_POST["lname"]; //input nameを入れる
	$secret = $_REQUEST["secret1"];
	echo $first_name." ".$last_name."<br>";
	echo "the hidden info is ".$secret;

	?>

</body>
</html>

