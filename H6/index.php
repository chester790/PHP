
<?php
$db = new mysqli("localhost","root","","school","3306");
$query = "SELECT naam FROM cursist";
$output = mysqli_query($db, $query);
echo "<table border='1'><tr>";
$data = mysqli_fetch_array($output);
    echo "<td>" . $data['naam'] . "</td>";
echo "</tr></table>";

include("login.php");