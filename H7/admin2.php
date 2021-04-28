<?php
session_start();

if(isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "administrator") {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op het admingedeelte van de website";
    echo "<p><a href='index.php'></a>Login</p>";
} else {
    header('location: index.php');
}