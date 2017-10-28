<?php
$ADMIN_PWD_FILENAME = "admin_pwd";
// define $myusername and $mypassword
$username = $_POST['username'];
$password = $_POST['password'];


// get saved admin pwd
$adminPwd = fetchAdminPwd($ADMIN_PWD_FILENAME);
if(password_verify($password, $adminPwd))
{
  $_SESSION['valid'] = true;
  header("Location: home.php");
  exit();
}
else
{
  header("Location: login.php");
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
