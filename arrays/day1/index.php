<?php

$arr = [

    'Banglades',
    'KSD',
    'London'
];


$n = count($arr);

for($i = 0; $i <$n; $i++){

    echo $arr[$i]."</br>";

}




// foreach($arr as $ar){
//     echo $ar."<br/>";
// }




// $course = ['CSE01', 'EEE02', 'BBA03'];
// $grade = ['A', 'B', 'C'];

// $count = count($course);

// for( $i = 0; $i < $count; $i++ ){

//     echo "$course[$i] : $grade[$i]  \n";
// }


$grades =
    [
        'CSE' => 'A',
        'EEE' => 'B',
        'ECE' => 'C',

    ];

    foreach($grades as $key =>$value){

       echo "$key : $value  </br>";

    }