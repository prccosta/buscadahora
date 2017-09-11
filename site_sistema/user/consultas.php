<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$user_id = $_SESSION['user_id'];
$sql=mysql_query("SELECT * FROM produtos WHERE id_vendedor = '$user_id'");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>	
		<link href="../controle/css/geral.css" rel="stylesheet" type="text/css" />
	<!--[if IE 7]>
	<link href="css/geral_ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->


		<link type="text/css" href="../controle/css/main.css" rel="stylesheet" />

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
                    	<p>Consulta, Alteração e Exclusão de Produtos</p>
                    </div>
					
				  <br />

<?php
echo "<table align='center' border='1' width='920'><tr align='center'><td colspan='3' class='tittabela2'>LISTAGEM DOS PRODUTOS</td></tr></table>";

while($res=mysql_fetch_array($sql)){
echo "<form name='form1' method='post' action='conproduto2.php'><table align='center' border='1' width='920'>
<tr align='center'>
  <td>PRODUTO:</td>
  <td>
    <label>
    <input name='modelo' type='text' id='modelo' size='120' maxlength='120' readonly value='".$res['modelo']."' class='azul'>
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