<?php
$number1 = 5;
$number2 = 10;

echo "Before swapping: Number 1 = $number1, Number 2 = $number2\n";

// Swap the numbers without using a temporary variable
$number1 = $number1 + $number2;
$number2 = $number1 - $number2;
$number1 = $number1 - $number2;

echo "After swapping: Number 1 = $number1, Number 2 = $number2\n";
?>
