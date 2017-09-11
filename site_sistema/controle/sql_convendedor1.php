<?php

require("validate.php");

require("../class.upload.php");

require_once("../conexao.php");

require_once("../connbasic.php");



		$empresa=mysql_escape_string($_GET["empresa"]); 

		$endereco=mysql_escape_string($_GET["endereco"]);

		$bairro=mysql_escape_string($_GET["bairro"]);

		$cidade=mysql_escape_string($_GET["cidade"]);

		$estado=mysql_escape_string($_GET["estado"]);

		$cep=mysql_escape_string($_GET["cep"]);

		$telefone=mysql_escape_string($_GET["telefone"]);

		$email=mysql_escape_string($_GET["email"]);

		$site=mysql_escape_string($_GET["site"]);

		$sql=mysql_query("UPDATE vendedor SET empresa = '$empresa', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$cep', telefone = '$telefone', email = '$email', site = '$site' WHERE empresa = '$empresa'");



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