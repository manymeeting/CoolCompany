<?php
require 'includes/functions.php';
//Pull username, generate new ID and hash password
$pw = $_POST['password'];
$hashedPW = "";
if(isset($pw))
{
    $hashedPW = password_hash($_POST['password'], PASSWORD_DEFAULT);
}
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = isset($_POST['username']) ? $_POST['username'] : ($firstname.$lastname);
$homephone = $_POST['homephone'];
$homeaddr = $_POST['homeaddr'];
$cellphone = $_POST['cellphone'];


$userForm = new UserForm;

$response = $userForm->createUser($username, $email, $hashedPW, $firstname, $lastname, $homephone, $homeaddr, $cellphone);

if ($response == 'true') {
    // success
    header("Location: users.php");
    exit();
} else {
    // failure, handle errors in the future
    echo "Failed to add user, please check the input.";
    exit();

}