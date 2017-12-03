<?php
session_start();
$ADMIN_PWD_FILENAME = "admin_pwd";
$ADMIN_ID = "admin";

$username = $_POST['username'];
$password = $_POST['password'];

// get saved admin pwd
$adminPwd = fetchAdminPwd($ADMIN_PWD_FILENAME);
if(password_verify($password, $adminPwd) && ($username === $ADMIN_ID))
{
  $_SESSION['valid'] = true;
  $home_location = "home.php";
  header("Location: " . $home_location);
  exit();
}
else
{
  $login_location = "login.php";
  header("Location: " . $login_location);
  exit();
}

/*
* Fetch hashed password of admin from a file
* @return {String} pwd
*/
function fetchAdminPwd($fileName)
{
  $file = fopen($fileName, "r") or die("Unable to open file");
  $pwd = fgets($file);
  fclose($file);
  return $pwd;
};

?>
