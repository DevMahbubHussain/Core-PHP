<?php


// $md_array = [
  
//       [10,20,30],
//      [100,200,300],
//      [1000,2000,3000],

// ];

// echo ($md_array[0][0]);
//  echo "</br>";
//  echo($md_array[0][1]);
// echo "</br>";
// echo($md_array[0][2]);





// echo "<pre>";
// print_r($md_array);
// echo "</pre>";


//associtive multidimensional array

// $md_array = [
  
//     'C1'=>[1,2,3,4,5],
//     'C2'=>[10,20,30,40,50],
//     'C3'=>[100,200,300,400,500],

// ];


// echo $md_array['C3'][4];


// echo "</br>";

// echo $md_array['C1'][1];
// echo "</br>";
// echo "</br>";
// echo "</br>";




// echo "<pre>";
// print_r($md_array);
// echo "</pre>";




// $courses = [
  
//     [
//         'course_name'=>'CSE101',
//         'professior'=>'DR X',
//         'semester' =>"101",
//         "grade"=>"A+",
//         "gpa"=>"4.0"
//     ],
    
//     [
//         'course_name'=>'CSE102',
//         'professior'=>'DR X',
//         'semester' =>"101",
//         "grade"=>"A+",
//         "gpa"=>"3.75"
//     ],

//     [
//         'course_name'=>'CSE103',
//         'professior'=>'DR X',
//         'semester' =>"101",
//         "grade"=>"A+",
//         "gpa"=>"4"
//     ]



// ];

// $gpasum = 0;
// $count = count($courses);

// foreach($courses as $course){
//   $gpasum += $course['gpa'];
// }

// $cgpa = $gpasum / $count;

// echo $cgpa;
//echo $gpasum;
// print_r($courses);

$set1 = ['a', 'b', 'c'];
$set2 = ['d', 'e', 'f'];

print_r($set1);
echo "</br>";
print_r($set2);
$result = $set1 + $set2;

echo "<pre>";
print_r($result);
echo "</pre>";


$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);

