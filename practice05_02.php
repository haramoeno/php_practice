<?php
// 様々な条件の比較
$a = 3;
$b = 3;
$c = "3";

// $a と $b が等しいときに true　そうでなければ false を返す。
var_dump($a == $b);
//=> bool(true) が表示される。

// $a と $b が等しくないときに true
var_dump($a != $b);
//=> bool(false)　が表示される。

// $a が $b　より大きいときに　true、そうでなければ false を返す。
var_dump($a > $b);
//=> bool(false)が表示される

// $a が $b 以上のときtrue、そうでなければ false を返す。
var_dump($a >= $b);
//=> bool(true) が表示される。

// $a が $b より小さいときtrue、そうでなければ false を返す。
var_dump($a < $b);
//=> bool(false)が表示される

//$a が $b より小さいか、または等しいときに true、そうでなければ false を返す。
var_dump($a <= $b);
//=> bool(true) が表示される。

//$a が $c　とデータ型が等しく、かつ値も等しいときに true、そうでなければ false を返す。
var_dump($a === $c);
//=> bool(false)が表示される。

//$a が $c　とデータ型が等しくないか、もしくは値が等しくないときに true、そうでなければ false を返す。
var_dump($a !== $c);
//=> bool(true)が表示される。



// for文
for($i = 0; $i < 10; $i++){
  echo $i;
}
//=> 0123456789 が表示される


$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理をおこなう。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
//=> 5050 と表示される



# 配列のすべての要素を出力
$fruits = array("apple", "orange", "lemon");

echo count($fruits);
//=> 3 と表示される。

for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}
//=> 要素はapple
//=> 要素はorange
//=> 要素はlemon
//=> と表示される



// foreach文
$animals = array("dog", "cat", "panda");
// $animals から一つずつ要素を取り出して、$animal に代入される

foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}

//=> 要素はdog
//=> 要素はcat
//=> 要素はpanda
//=> と表示される