<?php

require("validate.php");
require_once("../conexao.php");
require_once("../connbasic.php");

$palavra = $_POST['modelo'];
$sql=mysql_query("SELECT * FROM produtos WHERE modelo = '$palavra'");
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

    <link type="text/css" href="css/smoothness/jquery-ui-1.8.2.custom.css" rel="stylesheet" />

    <link type="text/css" href="css/main.css" rel="stylesheet" />

    <script type="text/javascript" src="js/lib/jquery-1.4.2.min.js"></script>

    <script type="text/javascript" src="js/lib/jquery-ui-1.8.2.custom.min.js"></script>

    <script type="text/javascript" src="js/tabs.js"></script>

	<!--[if IE 7]>

<link href="css/geral_ie.css" rel="stylesheet" type="text/css" />

<![endif]-->

	<style type="text/css">

<!--

body {

	background-color: #e3a4b6;
	margin-top: 10px;

}

-->

    </style></head>

	<body>

		<div id="centrar"> 

			 <?php include_once('inc_topmenu.php');?>

				<div id="edicoes">

					<div id="tit">

                    	<p>Consulta de Produtos</p>

                    </div><br>
					<br />

					<p>&nbsp;</p>

<?php

while($res=mysql_fetch_array($sql)){

echo "<div id='tabs'>

<ul>

<li><a href='#tabs-1'>Dados do Produto</a></li>

</ul>

<div id='tabs-1'><br><form name='editar' method='get' action='sql_conproduto2.php'><table align='center' border='1' width='800'>

<tr align='center'><td colspan='4' class='tittabela'><b> ".$res['modelo']." </b></td></tr>

<tr></tr>

<tr><th align='left'>Fabricante:</th><td align='left'><input type='text' name='fabricante' id='fabricante' size='70' value='".$res['fabricante']."' class='textfield'></td></tr>

<tr><th align='left'>Especificação:</th><td align='left' colspan='3'><textarea name='especificacao' cols='40' rows='5' id='especificacao' size='50' class='textfield'>".$res['especificacao']."</textarea></td></tr>

<tr><th align='left'>Preço:</th><td align='left' colspan='3'><input type='text' name='preco' id='preco' size='18' value='".$res['preco']."' class='textfield'></td></tr>

<tr><th align='left'>Dt.Cadastro:</th><td align='left' colspan='3' class='textfield2'> ".$res['DataCadastro']." </td></tr>

<tr align='center'><td colspan='4' class='tittabela3'><input type='submit' name='alterar' id='alterar' value='Alterar'>

<input type='hidden' value='".$res['modelo']."' name='modelo'></form></td></tr>

<tr><td align='center' colspan='4' class='tittabela3'><form name='excluir' method='get' action='sql_excluir_prod.php'><input type='submit' name='excluir' id='excluir' value='Excluir'><input type='hidden' value='".$res['modelo']."' name='modelo'></form></td></tr>

</table></div></div>";
}
?>

</div></div>

<div id="rodape"></div>
</body>

</html>