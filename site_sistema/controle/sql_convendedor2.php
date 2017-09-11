<?php

require("validate.php");

require("../class.upload.php");

require_once("../conexao.php");

require_once("../connbasic.php");



		$empresa=mysql_escape_string($_GET["empresa"]); 

		$obs=mysql_escape_string($_GET["obs"]);

				

		$sql=mysql_query("UPDATE vendedor SET obs = '$obs' WHERE empresa = '$empresa'");



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