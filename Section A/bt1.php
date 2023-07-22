<?php
function calculateOperations($arr) {
    $sum = array_sum($arr);
    $product = array_product($arr);
    $difference = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $difference -= $arr[$i];
    }
    $quotient = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $quotient /= $arr[$i];
        } else {
            echo "Không thể chia cho 0.";
            return;
        }
    }

    echo "Tổng các phần tử = " . implode(" + ", $arr) . " = " . $sum . "<br>";
    echo "Tích các phần tử = " . implode(" * ", $arr) . " = " . $product . "<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arr) . " = " . $difference . "<br>";
    echo "Thương các phần tử = " . implode(" / ", $arr) . " = " . $quotient . "<br>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
calculateOperations($arrs);
?>
