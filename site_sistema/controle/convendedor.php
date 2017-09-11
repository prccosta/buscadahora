<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$palavra = $_POST['empresa'];
$sql=mysql_query("SELECT * FROM vendedor WHERE empresa like '%$palavra%'");
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


		<link type="text/css" href="css/main.css" rel="stylesheet" />

<style type="text/css">
<!--
body {
	background-color: #e3a4b6;
	margin-top:10pt;
}

-->
    </style>
	
    </head>
	<body>
			
		<div id="centrar"> 
			 <?php include_once('inc_topmenu.php');?>
			  <div id="edicoes">
					<div id="tit">
                    	<p>Consulta de Vendedores</p>
                    </div>
					
				  <br />

<?php
echo "<table align='center' border='1' width='920'><tr align='center'><td colspan='3' class='tittabela2'>LISTAGEM DOS VENDEDORES</td></tr></table>";

while($res=mysql_fetch_array($sql)){
echo "<form name='form1' method='post' action='convendedor2.php'><table align='center' border='1' width='920'>
<tr align='center'>
  <td>VENDEDOR:</td>
  <td>
    <label>
    <input name='empresa' type='text' id='empresa' size='110' maxlength='110' readonly value='".$res['empresa']."'>
    </label></td>
  <td><input type='submit' name='atualizar' id='atualizar' value='Atualizar'></td></tr>
</table></form>";
}
?>

		  </div>
			</div>
    <div id="rodape"></div>

	            </body>
</html>