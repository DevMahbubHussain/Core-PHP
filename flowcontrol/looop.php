<?php

$name = 'Mahbub Hussain Mamun';
$i = 0;
foreach(str_split($name) as $char):
    echo "The chracter present at ",$i ."  " . "index is : " ."   " . $char."</br>";
    $i = $i + 1;
endforeach;

echo "</br/>";

// $str = 'some text';
// foreach (str_split($str) as $char) {
//     var_dump($char);
// }


$listarray = [10, 20, 30, 40, 50, 60];

print_r($listarray);

$sum = 0;

// for($i = 0; $i<$listarray;$i++)
// {
//     $sum = $sum +$i;
// }


foreach ($listarray as $output):
    $sum += $output;
endforeach;


echo $sum;

///echo array_sum($listarray);


echo "</br/>";
echo "</br/>";


//  while loop 

$ii = 1;

while ($ii <= 10) {
    echo $ii."</br>";
    $ii = $ii + 1;
}


echo "</br/>";
echo "</br/>";

// nested loop 


for ($m = 0; $m < 4;$m++){
    for ($n = 0; $n < 2;$n++){
        echo "M = " . $m . "N= " . $n . "</br>";
   }
}


echo "</br/>";
echo "</br/>";

// break & continuee statments


$cart = [10, 20, 3, 500, 600, 400, 30, 200];

foreach($cart as $items):
   if($items > 500){
        echo "Insurance required for this products" . $items ."</br>";
        break;
   }

    echo $items ."</br>";
endforeach;



$cart1 = [10, 20, 3, 500, 600, 400, 30, 200];

foreach($cart1 as $items):
   if($items > 500){
        echo "Insurance required for this products " . $items ."</br>";
        continue;
   }

    echo $items ."</br>";
endforeach;