<?php
// 課題１
function test($num) {
    return $num * 2;
}
echo test(3);
echo "\n";

// 課題２
function add($a, $b) {
    return $a + $b;
    
}
echo add(8, 10);
echo "\n";

// 課題３
// function sum($arr){
//     $arr = [1, 3, 5, 7, 9];
//     return 
//     $result = sum($arr);
    
// }
// echo $result(945);


// $arr という配列の仮引数を持ち、
// 数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
// その要素をすべてかけた結果を返す関数を作成してください
function mul($arr) {
//           ^^^^ 仮引数 $arr
//       ^^^ 関数名 sum
    //$arr = [10, 30, 50, 70, 90];// ✕今回は不必要な処理
    // $result = mul($arr);// ✕関数から抜け出せない非常に危険な処理

    // その要素をすべてかけた結果を返す
    $result = 1;// 結果として $result という変数を用意する
    for ($i = 0; $i < count($arr) ; $i++) {
        echo "変数 \$arr の". $i . "番目の要素は" . $arr[$i];
        echo "\n";
        
        $result = $result * $arr[$i];
        
        
    }
    return $result;// $result に入っている値を返す
}
echo mul([1, 3, 5, 7, 9]);
//       ^^^^^^^^^^^^^^^ 配列 array(1, 3, 5 ,7, 9) を引数として渡す

echo "\n";
echo "\n";

echo mul([1, 3, 5]);
echo "\n";
echo "\n";

echo mul([1, 3, 5, 7, 9, 11]);
echo "\n";
echo "\n";
