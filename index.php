<?php
$test = 'Hello';
$test = 'hello' . 'world';
$test .= '!!!!!';
$test = $test . '!!!!!';
$name = 'John';
$age = 30;
$test = $name . ' is ' . $age . ' years old.';
$test = "$name is $age years old.";
$test = "hello\n\nworld";
$test = <<<END
lol
cool
END;
var_dump($test);
