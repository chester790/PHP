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
$kappersagenda["9:15"] = "";
$kappersagenda["9:30"] = "";
$kappersagenda["9:45"] = "Hans";
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
print("</ul>");
?>
</body>
</html>