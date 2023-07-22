<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Tìm chuỗi có độ dài lớn nhất và nhỏ nhất
$maxLength = 0;
$minLength = PHP_INT_MAX;

foreach ($array as $str) {
    $length = strlen($str);
    
    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $str;
    }
    
    if ($length < $minLength) {
        $minLength = $length;
        $minString = $str;
    }
}

// Hiển thị kết quả
echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength <br>";
echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength";
?>