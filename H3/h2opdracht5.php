<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        PHP opdracht 5
    </title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = [10,2,65,12];
$betalen = 0;
$mensen = 0;
for ($i = 0; $i <= count($leeftijd) - 1; $i++) {
    if ($leeftijd[$i] > 65 || $leeftijd[$i] < 3) {
        $mensen++;
    } elseif ($leeftijd[$i] <= 12) {
        $betalen += 5;
        $mensen++;
    } else {
        $betalen += 10;
        $mensen++;
    }
}
echo "<p> betalen: " . $betalen . "</p><p> mensen: " . $mensen . "</p>";
?>
</body>
</html>