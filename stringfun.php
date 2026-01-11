<!DOCTYPE HTML>
<html>
    <body>
        <?php
$str ="Hello World! Welcome to PHP string functions.";
echo "Length: " . strlen($str) . "<br>";
echo "Position :". strpos($str, "Hello") . "<br>";
echo "Replace :". str_replace("World" , "Universe" ,$str )."<br>";
echo "lowercase:". strtolower($str) ."<br>";
echo "uppercase:". strtoupper($str)."<br>";
echo "Capitalize First Letter of Word:". ucwords($str)."<br>";
echo "Capitalize First Letter of String :". ucfirst($str)."<br>";

$Task ="Hello Im        Student";
echo "Remove whitespace:".trim($Task);

?>
</body>
    </html>




   
