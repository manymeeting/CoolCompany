<?php
// Check if session is valid
session_start();
if(!isset($_SESSION["valid"]))
{
  header("Location: login.php");
  exit();
}

//Class Autoloader
spl_autoload_register(function ($className) {

    $className = strtolower($className);
    $includes = "includes/{$className}.php";
    $forms = "forms/{$className}.php";
    $dbconn = "dbconn/{$className}.php";

    if (file_exists($includes)) {

        require_once($includes);
    } 
    else if (file_exists($forms))
    {
    	require_once($forms);
    }
    else if (file_exists($dbconn))
    {
    	require_once($dbconn);
    }
    else {

        die("The file {$className}.php could not be found.");

    }
});
?>