<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>	
	<link href="css/geral.css" rel="stylesheet" type="text/css" />
	<!--[if IE 7]>
<link href="css/geral_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

	<style type="text/css">
<!--
body {
	background-color: #3b4f68;
}

-->
    </style>
	
    </head>
	<body>
			
		<div id="centrar"> 
			 <?php include_once('inc_topmenu.php');?>
			  <div id="edicoes">
					<div id="tit">
                    	<p>Relat&oacute;rios</p>
                    </div>
					<?php
								if(isset($_POST['e']))
								{
									if($_POST['e']==1)
									{
										echo '<p>Operação feita com sucesso.</p><br />';
									}else
									if($_POST['e']==2)
									{
										echo '<p>Houve um erro na consulta ao banco de dados.</p><br />';
									}
								}
					?>
				  <br />
					
			    <p>&nbsp;</p>
                    
<table align="center" border="0" width="920">
<tr>
  <td width="906" align="center"><a href="rel_prod30.php">Últimos 30 dias</a> | <a href="rel_prodtodos.php">Todos os produtos</a></td>
</tr>
</table>
		  </div>
			</div>
    <div id="rodape"></div>

	            </body>
</html>