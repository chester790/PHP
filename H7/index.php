<?php
session_start();

$users = array(
    "chester" => array("password" => "1234", "rol" => "administrator"),
    "bert" => array("password" => "1235", "rol" => "gebruiker"),
    "joep" => array("password" => "1236", "rol" => "administrator"),
);
if(isset($_GET["logout"])){
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['submit'])
    && isset($users [$_POST["login"]])
    && $users[$_POST["login"]]["password"] == $_POST['password']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
                              "password" => $users[$_POST["login"]] ['password'],
                              "rol" => $users[$_POST["login"]] ['rol']);
    echo  "Welkom " .$_SESSION["user"]['naam']." met de rol "
                    .$_SESSION["user"]['rol'];
} else {
    echo  "Inloggen";
}

echo "<form method='POST'>
    <input type='text' name='login' placeholder='email'>
    <input type='password' name='password' placeholder='password'>
    <input type='submit' name='submit' value='login'>
</form>";

echo "<a href='admin.php'>Website</a>";
echo "<a href='admin2.php'>Admingedeelte</a>";
echo "<br><a href='index.php'>loguit</a>";