<style type="text/css">
<!--
body {
	background-color: #3b4f68;
}
-->
</style>
<?php
require("validate.php");
require("../class.upload.php");
require("../conexao.php");
require("../connbasic.php");

if(isset($_GET["modelo"]))
{
		
		$modelo = $_GET["modelo"];	
		
		
		
		$sql = "DELETE FROM produtos WHERE modelo='$modelo'";
		
		if(mysql_query($sql))
		{
			
			echo "<br><br><font color='#ffffff' face='Verdana'><center>A exclusão foi efetuada com sucesso!<br>Clique <a href='consultas.php'>Aqui</a> para voltar para página inicial!</font>";
		}else
		{
			
			echo "Ocorreu um erro durante a exclusão!<br>Clique <strong><a href='consultas.php'>Aqui</a></strong> para voltar para página inicial!";
		}
}
?>