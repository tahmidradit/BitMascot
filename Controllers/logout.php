<?php
	session_start();
	session_destroy();
	header('location: /BitMascot/Views/homepage.html');
?>