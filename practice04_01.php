<?php
// 利用不可の変数名
// $記号がないからNG
// abc

// 変数名のはじめが数字だからNG
// $123_ABC



// 変数　$integer に 20 を代入
$integer = 20;

// 変数 $string　に "abc" を代入
$string = "abc";

// 変数 $integer を出力
echo $integer;
// => 20 と表示される

// 変数 $string を出力
echo $string;
// => abc と表示される。

// 変数を使った計算
// 変数 $integer と 10 を足した結果を 変数 $new_integer に代入する。
$new_integer = $integer + 10;

// 変数 $new_integer を出力する
echo $new_integer;
// => 30 と表示される



//配列の例
// 変数 $array に 配列 [2017, 2018, 2019, 2020] を代入する
$array = [2017, 2018, 2019, 2020];

// $array から 2017 を取り出して表示する
echo $array[0];
// => 2017 と表示される

// $array から 2019 を取り出して表示する
echo $array[2];

// $array2 に spring, summer, autumn, winterを代入する。
echo $array2 = ["spring", "summer", "autumn", "winter"];
// $array2 から autumn を取り出して表示する。
echo $array2[2];
//=> autumn と表示される



// 連想配列の例
// $animals という連想配列を定義する
$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
];

// $animals から "猫" を取り出して表示する。
echo $animals["cat"];
// => 猫 と表示される

// $animals から　"鳥" を取り出して表示する。
echo $animals["bird"];
// => 鳥 と表示される



// 論理型は真か偽かを表す型で
// 真の場合は true 、偽の場合は false と表す
// 論理型の例
// $result に true を代入する。
$result = true;

// もし $result が true であれば、 成功しました。 が表示される
// そうでなければ、　失敗しました が表示される
if ($result == true) {
  echo "成功しました。";
} else {
  echo "失敗しました。";
}
// => 成功しました。 が表示される