<?php
session_start();
if(!isset($_SESSION["valid"]))
{
    $login_location = "login.php";
    header("Location: " . $login_location);
    exit();
}
?>