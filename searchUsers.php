<?php
require 'includes/functions.php';
//Pull username, generate new ID and hash password
$userSearchVal = $_POST['userSearchVal'];
$userSearchBy = $_POST['userSearchBy'];
if(!isset($userSearchVal) || !isset($userSearchBy))
{
    // invalid search handle errors in the future
    echo "Invalid search, please check the input.";
    exit();
}

$userForm = new UserForm;

$response = $userForm->searchUser($userSearchBy, $userSearchVal);

if (!is_string($response) || substr($response, 0, 5 ) != 'Error') {
    // success
    $_SESSION['userSearchResult'] = $response;
    header("Location: users.php");
    exit();
} else {
    // failure, handle errors in the future
    echo "Failed to search user, please check the input.";
    exit();

}
?>