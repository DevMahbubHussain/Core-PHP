
<?php 

function odd($n){

    if ($n % 2 != 0)
        return true;
    else
        return false;
}

function even($n){

    if ($n % 2 == 0)
        return true;
    else
        return false;
}



$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//array_map
$output = array_map(function ($n) {
    return $n * $n * $n;
}, $arr);


echo "<pre>";
print_r($output);
echo "<pre>";

echo "Array Reduce";
echo "<br/>";
echo "<pre>";

$data = array_reduce($arr, function ($carry,$item) {
     $carry += $item;
     return $carry;
});

echo $data;

echo "</br>";


echo "Cube";
echo "<br/>";
echo "<pre>";

echo "Odd Numbers";
echo "<br/>";
echo "<pre>";




print_r(array_filter($arr, function ($n) {

    if($n%2==0) return true;

}));

$fn1 = fn($x) => $x%2!=0;

print_r(array_filter($arr,$fn1));


// print_r(array_filter($arr,'odd',));



echo "</pre>";

echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "Even Numbers";
echo "<br/>";
echo "<pre>";

print_r(array_filter($arr, 'even'));

echo "</pre>";
