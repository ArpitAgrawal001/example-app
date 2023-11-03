<?php
$height = 5; // Change the height of the inverted triangle as needed

for ($i = $height; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>
