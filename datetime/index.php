<?php

// $date = new DateTime('05-03-2023 10:18pm', new DateTimeZone('Asia/Dhaka'));
// // $timezone = new DateTimeZone('Asia/Dhaka');

// echo $date->format('m/d/y g:i:A').PHP_EOL;
// echo $date->format('M/D/Y g:i:A') .PHP_EOL;
// echo $date->format('M/d/y g:i:A') .PHP_EOL;
// echo $date->format('M/d/y g:i:A') .PHP_EOL;
// echo $date->getTimezone()->getName() .PHP_EOL;
//var_dump($date);


// project  3 months holiday 
date_default_timezone_set('Aisa/Dhaka');
$now = strtotime('now');
$end = strtotime('+3 months');
$weklydays = [];

while(date('Y-m-d',$now) != date('Y-m-d',$end))
{
     // get the day index 
     $day_index = date('w', $now);
     if($day_index == 5 || $day_index == 6)
     {
        $weklydays[] = date('D d m y', $now);

     }

     // shift by one day 
    $now = strtotime(date('Y-m-d', $now) . " +1 day");
}

// print_r($weklydays);

foreach($weklydays as $weeked)
{
    echo $weeked.PHP_EOL;
}
date_default_timezone_set('Asia/Dhaka');

// echo date('r', strtotime('1/1/75 6:95Pm'));




echo "=====================" . PHP_EOL;

$year = 2018;



$pay_days = pay_day_schedule($year);
print_r($pay_days);


function pay_day_schedule($year)
{
    $pay_days = [];
    $pay_day = 5;

    foreach(range(1,12) as $month)
    {

        $pay_days[] = pay_day_of_month($year, $month, $pay_day);
    }

    return $pay_days;

}

function pay_day_of_month($year,$month,$pay_day)
{
    $day = 0;

    $last_day = mktime(0, 0, 0, $month + 1, $day, $year);

    if(date('w',$last_day) == $pay_day)
    {

        return date('Y-m-d', $last_day);
    }
    $day -= 1;

}

//echo pay_day_of_month('2022', 5, 30);

// echo pay_day_schedule();