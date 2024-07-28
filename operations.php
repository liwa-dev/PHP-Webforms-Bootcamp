<?php

//Arithmetic Operators
// + - * / % **

$a = 10;
$b = 20;
$c = $a + $b;
echo $c;
echo '<br>';
echo $a - $b;
echo '<br>';
echo $a * $b;
echo '<br>';
echo $a / $b;
echo '<br>';
echo $a % $b;
echo '<br>';
echo $a ** $b;
echo '<br>';
//Concatenation Operators
$a = 5;
$b = "5";
echo 'Check if a=5 is equal to b="5": ';
var_dump($a == $b);
echo 'Check if a=5 is identical to b="5": ';
var_dump($a === $b);
echo 'Check if a=5 is not equal to b="5": ';
var_dump($a != $b);
echo 'Check if a=5 is not identical to b="5": ';
var_dump($a !== $b);
$a = 10;
$b = 20;
echo 'Check if a=10 is greater than b=20: ';
var_dump($a > $b);
echo 'Check if a=10 is less than b=20: ';
var_dump($a < $b);

//increment and decrement operators
echo '<br>Increment and decrement operators';
$a = 10;
$a++;
echo $a;
echo '<br>AND , OR , NOT Logicial Operators';
$a = 10;
$b = 20;
if ($a == 10 && $b == 20) {
    echo 'a is 10 and b is 20';
} else {
    echo 'a is not 10 and b is not 20';
}
echo '<br>';
if ($a == 10 || $b == 20) {
    echo 'a is 10 or b is 20';
} else {
    echo 'a is not 10 or b is not 20';
}

//Ternary Operators
echo '<br>Ternary Operators';
$result = 32;
echo 'Check if 32 is even or odd: ';
$result = $result % 2 == 0 ? 'Passed' : 'Failed';
echo $result;
echo '<br>';
$result = 33;
echo 'Check if 33 > 30: ';
$result = $result > 30 ? 'greater than 30' : 'less than 30';
echo $result;

?>