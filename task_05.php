<?php
$name = 'haramoeno';
if ($name ='haramoeno') {
    echo '私はharamoenoです';
} else {
    echo 'haramoenoではありません';
}



$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;



$fruits = array("apple", "banana", "orange", "strawberry", "grape");
foreach($fruits as $fruits) {
    echo $fruits;
}