<?php
//課題5

//strip_tags関数の使用
$str = "<p>Hello, world!</p>";
echo strip_tags($str);


//array_push関数の使用
$fruits = ['apple', 'grape', 'banana'];
array_push($fruits, 'orange', 'melon');
var_dump($fruits);


//array_merge関数の使用
$array1 = [10, 20];
$array2 = [30, 40];
$result = array_merge($array1, $array2);
var_dump($result);


//time関数の使用
$tomorrow = time() + (24 * 60 * 60);
echo date("Y-m-d", $tomorrow);


//mktime関数の使用
$timestamp = mktime(0, 0, 0, 9, 15, 2025);
echo $timestamp;



//date関数の使用
$date = date("Y年n月j日G時i分s秒");
echo $date;


