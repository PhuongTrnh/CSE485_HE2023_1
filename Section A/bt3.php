<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo "Tên khoá học<br>";
echo "<table border='1'>";
foreach ($arrs as $language) {
    echo "<tr><td>{$language}</td></tr>";
}

echo "</table>";
?>
