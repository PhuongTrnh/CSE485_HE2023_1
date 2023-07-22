<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

if (count($arrs) != count($names)) {
    echo "Số lượng màu và số lượng tên phải bằng nhau.";
} else {
    $colorsString = implode(', ', $arrs);
    $namesString = implode(', ', $names);

    $result = "Màu " . $colorsString . " là màu yêu thích của " . $namesString . ", còn màu yêu thích của tôi là màu " . end($arrs) . ".";

    echo $result;
}
?>