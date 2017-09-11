<?php

require("validate.php");

require("../class.upload.php");

require_once("../conexao.php");

require_once("../connbasic.php");


		$fabricante=mysql_escape_string($_GET["fabricante"]);

		$modelo=mysql_escape_string($_GET["modelo"]); 

		$especificacao=mysql_escape_string($_GET["especificacao"]);

		$preco=mysql_escape_string($_GET["preco"]);

		$sql=mysql_query("UPDATE produtos SET fabricante = '$fabricante', modelo = '$modelo', especificacao = '$especificacao', preco = '$preco' WHERE modelo = '$modelo'");

		if(mysql_query($sql))
		{
			header("Location: consultas.php?e=1");
			echo "<p>Operação feita com sucesso.</p><br />";
		}else
		{
			header("Location: consultas.php?e=2");
			echo "<p>Houve um erro na consulta ao banco de dados.</p><br />";
		}
?>