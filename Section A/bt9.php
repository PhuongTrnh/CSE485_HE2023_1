<?php
// Áp dụng với các mảng đã cho
$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

// Chuyển đổi các ký tự thành chữ thường bằng hàm array_map() và strtolower()
$result1 = array_map('strtolower', $arr1);
$result2 = array_map('strtolower', $arr2);
$result3 = array_map('strtolower', $arr3);

// Hiển thị kết quả sử dụng print_r hoặc var_dump
echo "<pre>";
print_r($result1);
print_r($result2);
print_r($result3);
echo "</pre>";
?>