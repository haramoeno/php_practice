<?php

function sum($max){
    
    $result = 0;
    
    for($i = 1; $i<= $max; $i++){
        
        $result += $i;
    }
    
    return $result;
}
$num = sum(100);
echo $num;

// echo sum(100);
function sum2($max){
    
    $result = 0;
    
    for($i = 1; $i<= $max; $i++){
        
        $result += $i;
    }
    
    echo $result;
}
sum2(100);


function print_number(){
    
    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}



$string = "ABCDEF";
echo strlen($string);



$string = "I love Ruby!";

$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;



$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);



$array = array(2,5,9,7,3,1,8,6,4);

asort($array);

print_r($array);

arsort($array);

print_r($array);