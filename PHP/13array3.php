<?php
/* (indexed array)
VALUES  KEY
John    0
Joe     1
Juan    2
Jamie   3
Chris   4
*/

$names = array("John", "Joe", "Jamie", "Chirs");

// foreach ($names as $key => $value) {
// 	echo "the name is ".$value."<br>";
// }

foreach ($names as $key => $value) {
	echo $key.".".$value."<br>";
}

?>
