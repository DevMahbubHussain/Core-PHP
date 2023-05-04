<?php

// int data type 
echo "======== Int data Type==========";
$a = 100; // decimal base 10 0 to 9
$b = 0b1010; // binary base 2 0 and 1
$c = 0o101;  // octal base 8  0 to 
$d = 0x101;  // Hexadecimal base 16  0 to 16


echo "</br>";
echo gettype($a);
echo PHP_EOL;

echo "</br>";

echo gettype($b);
echo "</br>";
echo gettype($c);
echo "</br>";

echo gettype($d);
echo "</br>";
echo "======== Float or double  data Type==========";
echo "</br>";
$aa = 10.2e2;
echo gettype($aa);
echo "</br>";

$fl = 10.25;
$u = (int) $fl;
echo $u;
