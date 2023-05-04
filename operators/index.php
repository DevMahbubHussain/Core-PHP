<?php

$a = 10;
$b = 5;
$c = 0;




echo "ternar operator";
echo "</br>";


// $min = ($a < $b) ? $a : $b;

$min = ($a < $b && $a < $c) ? $a : ($b < $c ? $b : $c);

echo $min;




echo "</br>";
$aa =  $a > $b;

echo $aa;


// logical operator and &&


echo true and true;
echo "</br>";
echo true and false;
echo "</br>";
echo false and false;

echo "</br>";

// logical operator or || for boolean

echo true or false;
echo "</br>";
echo true or true;
echo "</br>";
echo false or false;

echo "</br>";

// logical operator for non boolean && and 

echo $a and $b; // 1
