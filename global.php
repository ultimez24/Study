<?php
// Global variable
$value = 90;

// Function to add 10
function add() {
    global $value;
    $value = $value + 10;
    echo "Value after add(): " . $value . "<br>";
}

// Function to subtract 50
function sub() {
    global $value;
    $value = $value - 50;
    echo "Value after sub(): " . $value . "<br>";
}

// Function calls
add();
sub();
?>
