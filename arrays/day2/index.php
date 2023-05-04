<?php

$student = [
  "fname"=>'Mahbub',
  "lname"=>'Hussain',
];




print_r(json_encode($student,true));

$json = json_encode($student);

echo "<br/>";

print_r(json_decode($json,true));

echo "<br/>";
echo "<hr/>";
echo "<br/>";
echo "<br/>";



$number = [10, 20, 30, 40, 50, 60, 70, 80, 90];


echo end($number);
echo "<br/>";

$fruits = array('apple', 'banana', 'cranberry');
echo end($fruits); // cranberry


echo "<br/>";

$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = next($transport);    // $mode = 'car';
$mode = prev($transport);    // $mode = 'bike';
$mode = end($transport);     // $mode = 'plane';



echo "<br/>";

$array = array('step one', 'step two', 'step three', 'step four');

// by default, the pointer is on the first element
echo current($array) . "<br />\n"; // "step one"

// skip two steps
next($array);
next($array);
echo current($array) . "<br />\n"; // "step three"

// reset pointer, start again on step one
reset($array);
echo current($array) . "<br />\n"; // "step one"


echo "<br/>";
echo "<hr/>";
echo "<br/>";
echo "<br/>";

echo "<br/>";
echo "<hr/>";
echo "<br/>";
echo "<br/>";




// array reduce 
$sum = [10, 20, 50, 89, 20, 520];

function summation($old_value=1,$new_value){
    if($old_value%2==1)
      return $old_value + $new_value;
    else
        return $old_value;
}


echo array_reduce($sum, 'summation');



echo "<br/>";
echo "<hr/>";
echo "<br/>";
echo "<br/>";

/// array_slice 


$aslice = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$data =  array_slice($aslice, 1,5,-1);

print_r($data);

$ar = array('a'=>'apple', 'b'=>'banana', '42'=>'pear', 'd'=>'orange');

print_r(array_slice($ar, 0, 3));
echo "<br/>";
print_r(array_slice($ar, 0, 3, true));


$input = array("a", "b", "c", "d", "e");

echo "<br/>";
echo "<br/>";
print_r(array_slice($input, 2, -1));

echo "<br/>";

//list 

$details = [10, 20, 30, 40];
list($a, $b, $c, $d) = $details;
echo $a;
print_r(list($a, $b, $c, $d) = $details);


//range 
echo "<br/>";
echo "<br/>";
$num = range(1,100);

foreach(range(1,50,2) as $number){
    echo $number."<br/>";
}

 print_r($num);

