<?php 
	session_start();
	if($_SESSION['secure'] == $_POST['user_input'])
	{
	  header("location: ./login.php");
	 
	} 
	else{
		
		
	  header("location: ./reload.php");
	}
	
?>