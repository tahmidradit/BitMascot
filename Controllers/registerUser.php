<?php
    require_once('../Models/dbConnection.php');
    require_once('../Models/userProperties.php'); 

    userProperties();

    if(empty($id) || empty($userName) || empty($firstName) || empty($lastName) || empty($address) || empty($phone) || empty($email) || empty($dob) || empty($age) || empty($password)){
            echo "You can not leave any fields empty !";
        }
         else{
            $mysqlConnection = mySqlConnection();
            $query = "Insert into users Values ('$id','$userName','$firstName','$lastName','$address','$phone','$email','$dob','$age','$password') ";
            mysqli_query($mysqlConnection, $query);
        }
?>

