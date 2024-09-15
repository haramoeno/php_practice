<?php
//課題4
//【応用】　下記のプログラムは、配列の中で
//1番大きい値を返す max_array という関数を
//実装しようとしています。
//途中の部分を完成させてください


function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if($a > $max_number) {
      $max_number = $a;
    }
  
  }

  return $max_number;
}
echo max_array([10, 20, 30, 40, 50]);