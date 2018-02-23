<?php
//making the connection to mysql
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "myfirstdatabase";


$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("could not connect to database, ERROR:".mysqli_connect_error());

//set encoding
mysqli_set_charset($dbc, "utf8");

echo "You are connected to ".$dbname." database";

 ?>
