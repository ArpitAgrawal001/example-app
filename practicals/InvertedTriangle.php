<?php

function printInvertedTriangle($height) {
    if ($height <= 0) {
        echo "Height must be a positive integer.";
        return;
    }

    for ($i = $height; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo PHP_EOL;
    }
}

// Define the height of the inverted triangle
$triangleHeight = 5; // Change this value to adjust the size of the inverted triangle

// Print the inverted triangle
printInvertedTriangle($triangleHeight);
echo "\n";
?>
