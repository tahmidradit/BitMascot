<?php
  session_start();
  require_once('../Models/dbConnection.php');
  
  if(isset($_POST['submit']))
	{

		  $_email = $_SESSION['email'];
      $pass = $_POST['pass'];

		if(empty($pass))
		{
			echo "You can not leave password empty !";
		}
		else
		{
			
      $mysqlConnection = mySqlConnection();
      $query = "Update users set Password = '$pass' where Email='$_email' ";
      mysqli_query($mysqlConnection, $query);
	    unset($_SESSION['email']);
	    session_destroy();
	    header('location: /BitMascot/Views/login.php');
		}
	}
	else
	{
		echo "ERROR";
		header('location: /BitMascot/Views/login.php');
	}


?>