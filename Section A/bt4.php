<?php
$arrs = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London",
    "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta",
    "Austria" => "Vienna", "Poland" => "Warsaw"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thông tin thủ đô các quốc gia</title>
</head>
<body>
    <h1>Thông tin thủ đô các quốc gia</h1>
    <?php foreach ($arrs as $country => $capital) { ?>
        <p>Thủ đô của <?php echo $country; ?> là <?php echo $capital; ?></p>
    <?php } ?>
</body>
</html>
