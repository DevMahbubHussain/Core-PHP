<?php

// $arr1 = ['A', 'B', 'C'];
// $arr2 = ['A', 'E', 'B'];
// // $arr3 = ['A', 'D', 'C'];

// $dif = array_diff($arr1, $arr2);

// print_r($dif);



function isGmailUsers($value):string
{
   if(strpos($value,'gmail'))
    return true;
    else 
     return false;
}

$emails = [
   'mahbub@gmasil.com',
   'hussain@gmail.com',
   'mamun@yahoo.com'
];

$output = array_filter($emails, "isGmailUsers");

print_r($output);


echo "</br>";
echo "</br>";
echo "</br>";

$capital_cities = [
   'Greenland' => 'Dhaka',
   'Bangladesh' => 'Dhaka',
   'Japan' => 'Tokyo',
   'Thailand' => 'Bangkok',
];




// array keys 
$keys1 = array_keys($capital_cities);
$keys = array_keys($capital_cities,'Dhaka');
print_r($keys);
                                                                                                           
//array_values
print_r(array_values($capital_cities));


//array_fliped
$fliped = array_flip($capital_cities);
echo "<pre>";
print_r($fliped);
echo "</pre>";


echo "<hr/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<hr/>";




//array_pop
$capital_cities1 = [
   'Gre     enland' => 'Dhaka',
   'Bangladesh' => 'Dhaka',
   'Japan' => 'Tokyo',
   'Thailand' => 'Bangkok',
];


$array_pop = array_pop($capital_cities1);

print_r($array_pop);
echo "<br/>";
print_r($capital_cities1);



echo "<br/>";


$arr = [10,20,3];
$arrnew = array_shift($arr);
print_r($arr);

echo "<br/>";

//array reverse 
$ar1 = [10, 20, 30, 0, 1, 53];
print_r(count($ar1));
echo "<br/>";
print_r(array_sum($ar1));
echo "<br/>";
print_r(array_reverse($ar1)); 


echo "<hr/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<hr/>";

$capital_cities12 = [
   'Greenland' => 'Dhaka',
   'Bangladesh' => 'Dhaka',
   'Japan' => 'Tokyo',
   'Thailand' => 'Bangkok',
];




//serilize 

$str = serialize($capital_cities12);
$encode_str = urldecode($str);
print_r($encode_str);


echo "<hr/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

//unserilize 
$decode_set = unserialize(urldecode($encode_str));
print_r($decode_set);