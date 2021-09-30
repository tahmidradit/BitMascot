<?php

	session_start();
	require_once('../Models/userProperties.php');
	require_once('../Models/dbConnection.php');
	
	
	if(isset($_POST['submit']))
	{

		userProperties();

		if(empty($email) || empty($password))
		{
			echo "You can not leave any fields empty !";
		}
		else
		{
			$mysqlConnection = mySqlConnection();
			$query = "select * from users where Email='$email' and Password='$password'  ";
			$sqlExecution = mysqli_query($mysqlConnection, $query);
			$rowsCount = mysqli_num_rows($sqlExecution);
			if($rowsCount == 1 )
			{
				$_SESSION['email'] = $email;
				include('BitMascot/Views/login.php');
				header('location: /BitMascot/Views/userProfile.php');	
			}
			else
			{
				echo "Incorrect email and password combination ! Please re-enter correct credentials.";
			}
		}
	}
	else
	{
		echo "ERROR";
		header('location: /BitMascot/Views/login.php');
	}
?>