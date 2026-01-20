<?php
$marks = [28, 67, 95];

foreach ($marks as $mark) {
    if ($mark > 90) {
        echo "Marks: $mark → Good\n";
    } elseif ($mark > 35 && $mark < 70) {
        echo "Marks: $mark → Average\n";
    } elseif ($mark < 35) {
        echo "Marks: $mark → Fail\n";
    }
}
?>
