<?php
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

$n = 10; // Change this value to generate a different number of Fibonacci 

echo "Fibonacci Sequence for the first $n numbers: ";
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i) . ", ";
}
echo "\n";
?>
