<?php

    function userProperties() {
        global $firstName, $lastName, $address, $phone, $email, $dob, $age, $password;

        $firstName             = $_POST['firstName'];
        $lastName       = $_POST['lastName'];
        $address           = $_POST['address'];
        $phone       = $_POST['phone'];
        $email     = $_POST['email'];
        $dob    = $_POST['dob'];
        $age    = $_POST['age'];
        $password    = $_POST['password'];
    }
    
?>