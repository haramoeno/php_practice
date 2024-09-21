<?php
// 二項演算の例
// + は数値を加算する演算子
$value = 6;
echo $value + 2;
//=> 8 が表示される

// - は数値を減算する演算子
$value = 6;
echo $value - 2;
//=> 4 が表示される

// * は数値を積算する演算子
$value = 6;
echo $value * 2;
// 12 が表示される

// / は数値を除算する演算子
$value = 6;
echo $value / 2;
//=> 3 が表示される


// . は文字列を連結する演算子
$value = "AAA";
echo $value . "BBB";
//=> "AAABBB" が表示される



// 論理演算の例
// 論理演算結果をターミナルで表示するときは
// echo ではなく var_dump() を使う
// == は左項と右項が等しいか判定する
$value = 10;
$result = $value == 20;
var_dump($result);
//=> bool(false) が表示される

// < は左項が右項より小さいか判定する
$value = 10;
$result = $value < 20;
var_dump($result);
//=> bool(true) が表示される

// > は左項が右項より大きいか判定する
$value = 10;
$result = $value > 20;
var_dump($result);
//=> bool(false) が表示される

// === は左項と右項が同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;

$result = $a == $b;    
var_dump($result);
//=> true が表示される

$result = $a === $b;
var_dump($result);
// false が表示される



//　単項演算の例
// ++ は変数の値をひとつ増加させる
$value = 10;
// $value に1を足した結果が$valueに代入される
++$value;
echo $value;
//=>11 と表示される

// — は変数の値をひとつ減少させる
$value = 10;
// $value から1引いた結果が$valueに代入される
--$value;
echo $value;
//=> 9 と表示される



// 複合演算の例
// += は変数の値を増加させる
$value = 10;
// $value に　５足した結果が$valueに代入される
$value += 5;
echo $value;
//=> 15 と表示される

// -= は変数の値を減少させる
$value = 10;
// $value に　５足した結果が$valueに代入される
$value -= 5;
echo $value;
//=> 5 と表示される

// .= は変数に文字列を連結する
$value = 'apple';
$value .= ' orange';
echo $value;
//=> apple orange と表示される



// 三項演算の例
// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、 :より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';

echo $result;
//=> $value は 20 より小さい と表示される