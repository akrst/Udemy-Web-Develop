<?php
// 目的:PHPで設定したエラーやアラートをJSONを使用する方がシンプルだから
$msg = array(
	"text"=>"Hi there Victor!",
	"date"=>"Monday 21th Feb 2010"
);

$mymsg = json_encode($msg);

echo $mymsg;

?>
