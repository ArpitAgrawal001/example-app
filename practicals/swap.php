<?php
// A program to swap two numbers in PHP

function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$number1 = 5;
$number2 = 10;

echo "Before swapping: Number 1 = $number1, Number 2 = $number2\n";

swapNumbers($number1, $number2);

echo "After swapping: Number 1 = $number1, Number 2 = $number2\n";
?>
