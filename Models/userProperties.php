<?php

    function userProperties() {
        global $id, $userName, $firstName, $lastName, $address, $phone, $email, $dob, $age, $password;

        $id = $_POST['id'];
        $userName = $_POST['userName'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $password = $_POST['password'];
    }
    
?>