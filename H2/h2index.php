<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        PHP opdrachten
    </title>
</head>
<body>

<a href="h2opdracht2.php"> Klik hier voor opdracht 2</a>
<br>
<?php
//    for($i = 1; $i <= 9; $i ++) {
//        echo "<img src='img/aap". $i .".jpg'>";
//    }

$bomen = array("boom1", "boom2", "boom3", "boom4", "boom5");

foreach($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}
?>
</body>
</html>
