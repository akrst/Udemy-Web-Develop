<?php
//making the connection to mysql
$hostname = "localhost";
$username = "root";
$password1 = "root";
$dbname = "myfirstdatabase";


$dbc = mysqli_connect($hostname, $username, $password1, $dbname) OR die("could not connect to database, ERROR:".mysqli_connect_error());

//set encoding
mysqli_set_charset($dbc, "utf8");


 ?>
