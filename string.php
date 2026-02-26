<?php
echo "<h2>PHP String Functions Demo</h2>";
$str = "  Welcome to PHP Programming  ";
echo "<b>Original String:</b> '$str'<br><br>";
echo "<h3>Basic String Functions</h3>";

echo "strlen(): " . strlen($str) . "<br>";
echo "str_word_count(): " . str_word_count($str) . "<br>";
echo "strrev(): " . strrev($str) . "<br>";

echo "<h3>Case Conversion</h3>";
echo "strtoupper(): " . strtoupper($str) . "<br>";
echo "strtolower(): " . strtolower($str) . "<br>";
echo "ucfirst(): " . ucfirst(trim($str)) . "<br>";
echo "ucwords(): " . ucwords(trim($str)) . "<br>";
echo "<h3>Search & Replace</h3>";

echo "strpos('PHP'): " . strpos($str, "PHP") . "<br>";
echo "str_replace(): " . str_replace("PHP", "Web", $str) . "<br>";

echo "<h3>Substring & Trimming</h3>";

echo "substr(0,7): " . substr($str, 0, 7) . "<br>";
echo "trim(): '" . trim($str) . "'<br>";
echo "ltrim(): '" . ltrim($str) . "'<br>";
echo "rtrim(): '" . rtrim($str) . "'<br>";


echo "<h3>String Comparison</h3>";

$str1 = "PHP";
$str2 = "php";

echo "strcmp(): " . strcmp($str1, $str2) . "<br>";
echo "strcasecmp(): " . strcasecmp($str1, $str2) . "<br>";

echo "<h3>Special Characters & Security</h3>";

$input = "<script>alert('Hi')</script>";

echo "htmlspecialchars(): " . htmlspecialchars($input) . "<br>";
echo "addslashes(): " . addslashes("O'Reilly") . "<br>";

echo "<h2>Part C: Registration Input Validation</h2>";

$username = "  student123  ";
$password = "  pass@123  ";

$username = trim($username);
$password = trim($password);

if (strlen($username) < 5) {
    echo "Username too short<br>";
} else {
    echo "Valid Username: $username<br>";
}

if (strlen($password) < 6) {
    echo "Password too short<br>";
} else {
    echo "Valid Password Length<br>";
}
?>
