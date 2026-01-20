<?php
include_once "name_details.php";
require_once "my_name.php";

echo "<h3>User Details</h3>";

foreach ($details as $person) {
    echo "Name: " . $person['name'] . "<br>";
    echo "Age: " . $person['age'] . "<br>";
    echo "DOB: " . $person['DOB'] . "<br><br>";
}
?>
