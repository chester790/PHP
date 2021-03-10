<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        PHP opdracht 6
    </title>
    <style>
    </style>
</head>
<body>
<?php

$zwemclubs["De spartelkuikens"] = 25;
$zwemclubs["De waterbuffels"] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

echo "<table border='1'>";
foreach ($zwemclubs as $label => $waarde) {
    echo "<tr><td>" . $label . "</td><td>" . $waarde . "</td><td>";
    for ($i = 0; $i < (floor($waarde / 5)); $i++) {
        echo "<img src='img/zwemmer.png'>";
    }
    echo "</td></tr>";
}
echo "</table>";
?>
</body>
</html>