<?php
/* 多次元配列
多次元配列は、配列の中に配列がある配列

*/

$names = array("Victor", "Alex", "John");

$cities = array("Miami", "Madrid", "Paris");

$data = array("names"=> $names,"cities"=>$cities);

echo $data["cities"][1]; //多次元配列の呼び出し

$data2 = array("data" => $data);

echo $data2["data"]["cities"][1];
?>
