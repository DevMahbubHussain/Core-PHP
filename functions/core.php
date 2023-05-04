<?php 
// variable function 

function sum(int | float ...$a): int|float{
    return array_sum($a);
}



$x = 'sum';

if(is_callable($x)){
    echo $x(1, 2, 5, 2);
}
else{
    echo "Not Callable";
}

// anonymous function 
echo "<br/>";
$cc = 10;
$ano = function (int | float ...$a) use ($cc): int|float{
    echo $cc;
    return array_sum($a);
};


echo $ano(1,2);

echo "Array function with lambda function";
echo "<br/>";
echo "<pre>";

$arrrr = [1, 2, 5, 3, 5];

$arr_ano = array_map(fn($n) => $n * $n, $arrrr);

print_r($arr_ano);