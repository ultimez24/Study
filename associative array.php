<?php
// Step 1: Create a multidimensional associative array
$students = [
    ["name" => "Amit", "marks" => 85],
    ["name" => "Riya", "marks" => 72],
    ["name" => "Kiran", "marks" => 90]
];

// Step 2: Display array elements using loops
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>";
    }
    echo "<hr>";
}
?>
