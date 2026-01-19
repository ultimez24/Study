<?php
echo "=== Comparison Operators ===\n\n";

// Case 1
$a = "raj";
$b = "raj";

echo "Case 1: a = 'raj', b = 'raj'\n";
var_dump($a == $b);  echo "<br>";  // Equal
var_dump($a === $b);  echo "<br>"; // Identical (value + type)
var_dump($a != $b);   echo "<br>"; // Not equal
var_dump($a !== $b);  echo "<br>"; // Not identical
var_dump($a < $b);   echo "<br>";  
var_dump($a > $b); echo "<br>";
var_dump($a <= $b); echo "<br>";
var_dump($a >= $b); echo "<br>";

// Data type check
echo "Datatype of a: " . gettype($a) . "\n"; echo "<br>";
echo "Datatype of b: " . gettype($b) . "\n\n"; echo "<br>";

// Case 2
$a = 90;
$b = 34;

echo "Case 2: a = 90, b = 34\n"; echo "<br>";
var_dump($a == $b); echo "<br>";
var_dump($a === $b); echo "<br>";
var_dump($a != $b); echo "<br>";
var_dump($a !== $b); echo "<br>";
var_dump($a < $b); echo "<br>";
var_dump($a > $b); echo "<br>";
var_dump($a <= $b); echo "<br>";
var_dump($a >= $b); echo "<br>";

// Data type check
echo "Datatype of a: " . gettype($a) . "\n"; echo "<br>";
echo "Datatype of b: " . gettype($b) . "\n";echo "<br>";

echo "\n=== Logical Operators ===\n\n";echo "<br>";

// Case 1
$a = 14;
$b = 40;

echo "Case 1: a = 14, b = 40\n";
var_dump($a > 10 && $b > 30); echo "<br>"; // AND
var_dump($a > 20 || $b > 30); echo "<br>"; // OR
var_dump(!($a > 10));    echo "<br>";      // NOT

// Case 2
$a = -2;
$b = 70;

echo "\nCase 2: a = -2, b = 70\n";echo "<br>";
var_dump($a > 0 && $b > 50);echo "<br>";
var_dump($a > 0 || $b > 50);echo "<br>";
var_dump(!($a > 0));


?>

