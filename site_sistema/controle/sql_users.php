<?php
require("validate.php");
require("../class.upload.php");
require("../conexao.php");
require("../connbasic.php");


if(isset($_POST['novouser']))
{
		
		$id = $_POST['id'];
		$nome = $_POST['nome'];	
		$login = $_POST['login'];	
		$senha = $_POST['senha'];
		
		
		
		$sql = "INSERT INTO `users` ( `id`  , `nome` , `login` , `senha` ) VALUES ('$id'    ,  '$nome', '$login' , '$senha')";

		if(mysql_query($sql))
		{
			header("Location: users.php?e=1");
		}else
		{
			header("Location: users.php?e=2");
		}
}else
if(isset($_POST['editaruser']))
{
		$id = $_POST['editaruser'];
		$nome = $_POST['nome'];	
		$login = $_POST['login'];	
		$senha = $_POST['senha'];
		
		
		
		
		$sql = "UPDATE `users` SET `nome` = '$nome', `login` = '$login', `senha` = '$senha' WHERE id = '$id' LIMIT 1 ";
		
		if(mysql_query($sql))
		{
			header("Location: users.php?e=1");
		}else
		{
			header("Location: users.php?e=2");
		}
}else
if(isset($_POST['apagaruser']))
{
		
		$id = $_POST['apagaruser'];	
		
		
		
		$sql = "DELETE FROM users WHERE id='$id' LIMIT 1 ";
		
		if(mysql_query($sql))
		{
			header("Location: users.php?e=1");
		}else
		{
			header("Location: users.php?e=2");
		}
}
		
		


?>