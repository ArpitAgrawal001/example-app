<?php

function generateFibonacci($n) {
    $fibonacciSequence = array();
    
    if ($n <= 0) {
        return $fibonacciSequence;
    }

    $fibonacciSequence[] = 0;

    if ($n == 1) {
        return $fibonacciSequence;
    }

    $fibonacciSequence[] = 1;

    for ($i = 2; $i < $n; $i++) {
        $nextValue = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        $fibonacciSequence[] = $nextValue;
    }

    return $fibonacciSequence;
}

// Define the number of Fibonacci numbers you want to generate
$numOfFibonacciNumbers = 10;

$fibonacciSequence = generateFibonacci($numOfFibonacciNumbers);

echo "Fibonacci Sequence (first $numOfFibonacciNumbers numbers): ";
echo implode(", ", $fibonacciSequence);
echo "\n"
?>
