<?php
require("validate.php");
require("../class.upload.php");
require("../conexao.php");
require("../connbasic.php");


if(isset($_POST['novouser']))
{
		
		$nome = $_POST['nome'];	
		$login = $_POST['login'];	
		$senha = $_POST['senha'];
		
		
		
		$sql = "INSERT INTO `usuarios` ( `id`  , `nome` , `login` , `senha` ) VALUES (NULL    ,  '$nome', '$login' , '$senha')";

		if(mysql_query($sql))
		{
			header("Location: usuarios.php?e=1");
		}else
		{
			header("Location: usuarios.php?e=2");
		}
}else
if(isset($_POST['editaruser']))
{
		$id = $_POST['editaruser'];
		$nome = $_POST['nome'];	
		$login = $_POST['login'];	
		$senha = $_POST['senha'];
		
		
		
		
		$sql = "UPDATE `usuarios` SET `nome` = '$nome', `login` = '$login', `senha` = '$senha' WHERE id = '$id' LIMIT 1 ";
		
		if(mysql_query($sql))
		{
			header("Location: usuarios.php?e=1");
		}else
		{
			header("Location: usuarios.php?e=2");
		}
}else
if(isset($_POST['apagaruser']))
{
		
		$id = $_POST['apagaruser'];	
		
		
		
		$sql = "DELETE FROM usuarios WHERE id='$id' LIMIT 1 ";
		
		if(mysql_query($sql))
		{
			header("Location: usuarios.php?e=1");
		}else
		{
			header("Location: usuarios.php?e=2");
		}
}
		
		


?>