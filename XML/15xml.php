<?php
$x = simplexml_load_file('10dom.xml');

 foreach ($x->book as $book) {
 	echo "<p></p><b>Book title:</b>".$book->title."<br>".
 		"<b>Book Author:</b>".$book->author."<br>".
 		"<b>Book Year:</b>".$book->year."<br>".
 		"<b>Book Price:</b>".$book->price."<br></p>";
 }
?>