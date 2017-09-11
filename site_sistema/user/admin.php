<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$user_id = $_SESSION['user_id'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script language="javascript">
			function Con()
			{
				return confirm('Deseja realmente deletar esta notícia ?');
			} 
		</script>
	<link href="css/geral.css" rel="stylesheet" type="text/css" />
	<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>
	<style type="text/css">
<!--
.style8 {color: #FFFFFF}
body {
	background-color: #C0C0C0;
}
-->
    </style>
</head>
	<body>
			
		<div id="centrar">
       		<?php include_once('inc_topmenu.php'); ?>
		<div class="style8" id="edicoes">T</div>
    </div>
		<div id="rodape"></div>
		
</body>
</html>