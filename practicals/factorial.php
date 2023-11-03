<?php

function calculateFactorial($n) {
    if ($n < 0) {
        return "Factorial is undefined for negative numbers.";
    }

    if ($n == 0 || $n == 1) {
        return 1;
    }

    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

// Input
$number = 5; // Replace with the number for which you want to calculate the factorial

// Calculate factorial
$factorial = calculateFactorial($number);

if (is_numeric($factorial)) {
    echo "Factorial of $number is: $factorial";
} else {
    echo $factorial;
}
echo "\n";
?>
