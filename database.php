<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'task';

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn) {
    echo 'Your database connection is successful<br>';
} else {
    die('Database connection error: ' . mysqli_connect_error());
}

// Insert multiple records
$insert = "
INSERT INTO `country` (`country_name`, `country_capital`, `famous_place`) VALUES
('India', 'New Delhi', 'Taj Mahal'),
('France', 'Paris', 'Eiffel Tower'),
('Japan', 'Tokyo', 'Mount Fuji'),
('Italy', 'Rome', 'Colosseum'),
('USA', 'Washington D.C', 'Statue of Liberty')
";

$result = mysqli_query($conn, $insert);

if ($result) {
    echo 'Data inserted successfully';
} else {
    echo 'Insertion failed: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>



