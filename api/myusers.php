<?php
require dirname(__FILE__).'/' . '../includes/functions.php';
$userForm = new UserForm;
$users = $userForm->fetchAllUser();

// TODO: format the data in JSON
foreach ($users as $row) {
	echo  
	 " First Name: " . $row["firstname"] .
	 " Last Name: " . $row["lastname"].
	 " Email: " . $row["email"].
	 " Address : " . $row["homeaddr"].
	 " Home Phone: " . $row["homephone"].
	 " Cell Phone: " . $row["cellphone"].
	 "<br>";
}

?>