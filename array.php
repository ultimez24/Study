<?php
$arr1 = [225 , 'Dreams', 'Glass' , 30 , 25, 1, 'Globe'];
echo "Indexed array:".'<pre>';
print_r($arr1);

$arr2 =array('0' => 'Couch', 'Ice' => 'India', '6' => 'Box', 'Trip' => 'Range');
echo "Associative array:". '<pre>';
print_r($arr2);

$arr3= array_merge($arr1 , $arr2);
echo "Combine both the arrays:".'<pre>';
print_r($arr3);

echo "3rd value from the indexed array:".'<pre>';
echo $arr1[2] ."<br>";

echo "the value for the key Ice from the indexed array:".'<pre>';
echo $arr2["Ice"];
?>

