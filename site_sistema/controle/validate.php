<?php
session_start();

	if( !isset($_SESSION['user_id']) )
	{
		$_SESSION['erro'] = "Por favor fa�a Login!";
		header ("Location: index.php");
	}
			
?>