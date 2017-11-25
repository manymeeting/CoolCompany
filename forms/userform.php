<?php
class UserForm extends DbConn
{
    public function createUser($usr, $email, $pw, $firstname, $lastname, $homephone, $homeaddr, $cellphone)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $dbstr = "INSERT INTO " . $tbl_members . " (username, password, email, firstname, lastname, homephone, homeaddr, cellphone) VALUES (:username, :password, :email, :firstname, :lastname, :homephone, :homeaddr, :cellphone)";
            
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':username', $usr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':homephone', $homephone);
            $stmt->bindParam(':homeaddr', $homeaddr);
            $stmt->bindParam(':cellphone', $cellphone);

            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}
