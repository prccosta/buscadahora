<?php
session_start();

	if( !isset($_SESSION['user_id']) )
	{
		$_SESSION['erro'] = "Por favor faça Login!";
		header ("Location: index.php");
	}
			
?>