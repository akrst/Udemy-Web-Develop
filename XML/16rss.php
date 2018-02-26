<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function  getFeed($url){
	$x = simplexml_load_file($url);
	echo "<ul>";

	foreach ($x->channel->item as $entry){
		echo "<li><a href='$entry->link' title='$entry->title'>". $entry->title ."</a></li>";
	}
	echo "</ul>";
}
echo getFeed("https://news.yahoo.co.jp/pickup/computer/rss.xml");
?>

</body>
</html>