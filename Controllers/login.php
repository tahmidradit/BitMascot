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
			$currentUser = $_SESSION['Email'];
			$mysqlConnection = mySqlConnection();
			$query = "select * from users where Email='$currentUser'";
			$sqlExecution = mysqli_query($mysqlConnection, $query);
			$rowsCount = mysqli_num_rows($sqlExecution);
			if($sqlExecution){
				if($rowsCount($sqlExecution) > 0){
					while($row = mysqli_fetch_array($sqlExecution)){
						
							$_SESSION['email'] = $email;
							$_SESSION['age'] = $age;
							include('BitMascot/Views/login.php');
							header('location: /BitMascot/Views/userProfile.php');	
					}
				}
			}
			
			// if($row == 1 )
			// {
			// 	$_SESSION['loggedIn']='1';
			// 	$_SESSION['email'] = $email;
			// 	$_SESSION['age'] = $age;
			// 	include('BitMascot/Views/login.php');
			// 	header('location: /BitMascot/Views/userProfile.php');	
			// }
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