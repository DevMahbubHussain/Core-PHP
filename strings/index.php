<?php

$company_info = [
    "name"=>'ABC',
    "email"=>'abc@gmail.com',
    "Phone"=>'123456789'
];


$str = implode(' | ', $company_info);
$arr = explode(" , ", $str);

print_r($str);
echo PHP_EOL;
print_r($arr);
