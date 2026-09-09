<?php

$numbers = array(1, 2, 3, 4, 5);
$numbers = [1, 2, 3, 4, 5];
var_dump($numbers[1]);
$numbers[2] = 5;
var_dump($numbers);
#array = massiiv
$test = [1, 'lol' , true , [1, 2, 3]];
var_dump($test);
var_dump($test[3][1]);
$test = [
    'name' => 'Ricardo',
    'age' => 22,
    1,
    2,
    3,
    'color' => 'yellow',
    100 => 6,
    7, 

];
var_dump($test);
var_dump($test['name']);

$combined = [1, 2, 3] + [4, 5, 6, 7];
var_dump($combined);

$text = implode('-' , $test);
var_dump($text);

array_push($test, 67, 'what?', 420);
var_dump($test);
$test[] = 'value';
unset($test[100]);
var_dump($test);

