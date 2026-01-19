<?php
echo "<h3>PART 1: Multidimensional Indexed Array</h3>";

// Create multidimensional indexed array
$details = array(
    array("john", "newyork", 25, "male"),
    array("emma", "london", 28, "female")
);

// Add one more array
$details[] = array("ash", "tokyo", 20, "male");

// Delete first array item from 0th index
unset($details[0]);

echo "<b>Only Cities:</b><br>";
foreach ($details as $person) {
    echo $person[1] . "<br>";
}

echo "<br><b>Last Index Array:</b><br>";
print_r(end($details));

echo "<hr>";

echo "<h3>PART 2: Multidimensional Associative Array</h3>";

// Create multidimensional associative array
$product_details = array(
    array(
        "product_name" => "mobile",
        "price" => 15000,
        "date" => "05-01-2024",
        "address" => "bangalore"
    )
);

// Add one more array
$product_details[] = array(
    "product_name" => "tv",
    "price" => 2000,
    "date" => "06-01-2024",
    "address" => "hubli"
);

// Delete first array item
unset($product_details[0]);

echo "<b>Product name for date 06-01-2024:</b><br>";
foreach ($product_details as $product) {
    if ($product["date"] == "06-01-2024") {
        echo $product["product_name"];
    }
}

echo "<br><br><b>Last Array List:</b><br>";
print_r(end($product_details));

?>




<!-- Create a multidimensional indexed array with name $details with these fields:

name, address, age and gender

Add one more array with below field
['ash', 'tokyo', '20', 'male']

Delete first array item from 0th index array

Display only cities

Display entire array from the last index in the multidimensional array

Create a multidimensional associative array with name $product_details with below keys:

product_name, price, date, address

Add one more array with below values
['tv', '2000', '06-01-2024', 'hubli']

Delete first array item

Display product_name of date = 06-01-2024

Display last array list -->
