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
            $queryCheck = "SELECT * FROM users WHERE Email='$email' ";
            mysqli_query($mysqlConnection,$query);
            $res = mysqli_query($mysqlConnection,$queryCheck);
            if($res){
                if(mysqli_num_rows($res) > 0){
                    while($row = mysqli_fetch_array($re)){
                        if($row['Email']){
                            echo "email available";
                        }
                        else{
                            echo "not available";
                        }
                    }
                }
                
            }
            
        }
?>



