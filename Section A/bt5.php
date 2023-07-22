<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// key là b
$value1 = $a['b']['o']['b'];
echo "Giá trị = 3 mà có key là 'b': " . $value1 . "<br>";

// key là c
$value2 = $a['a']['c'];
echo "Giá trị = 1 mà có key là 'c': " . $value2 . "<br>";

// Lấy thông tin của phần tử có key là a
$info = $a['a'];
echo "Thông tin của phần tử có key là 'a': ";
print_r($info);
?>