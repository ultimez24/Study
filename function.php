<?php
// Function definition
function mul($a, $b) {
    $result = $a * $b;
    echo "Multiplication of $a and $b = $result <br>";
}

// Call function inside for loop (5 times)
for ($i = 1; $i <= 5; $i++) {
    mul($i, $i + 1);
}
?>
