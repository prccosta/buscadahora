<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$palavra = $_POST['empresa'];

$sql=mysql_query("SELECT * FROM vendedor WHERE empresa = '$palavra'");

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

                    	<p>Consulta de Vendedor</p>

                    </div><br>
					<br />

					<p>&nbsp;</p>

<?php

while($res=mysql_fetch_array($sql)){

echo "<div id='tabs'>

<ul>

<li><a href='#tabs-1'>Dados do Vendedor</a></li>

<li><a href='#tabs-2'>Observações</a></li>

</ul>

<div id='tabs-1'><br><form name='editar' method='get' action='sql_convendedor1.php'><table align='center' border='1' width='800'>

<tr align='center'><td colspan='4' class='tittabela'><b> ".$res['empresa']." </b></td>

</tr>

<tr></tr>

<tr><th align='left'>Endereço:</th><td align='left'><input type='text' name='endereco' id='endereco' size='70' value='".$res['endereco']."' class='textfield'></td></tr>

<tr><th align='left'>Bairro:</th><td align='left'><input type='text' name='bairro' id='bairro' size='50' value='".$res['bairro']."' class='textfield'></td></tr>

<tr><th align='left'>Cidade:</th><td align='left' colspan='3'><input type='text' name='cidade' id='cidade' size='50' value='".$res['cidade']."' class='textfield'></td></tr>

<tr><th align='left'>Estado:</th><td align='left' colspan='3'><input type='text' name='estado' id='estado' size='18' value='".$res['estado']."' class='textfield'></td></tr>

<tr><th align='left'>CEP:</th><td align='left' colspan='3'><input type='text' name='cep' id='cep' size='14' value='".$res['cep']."' class='textfield'></td></tr>

<tr><th align='left'>Telefone:</th><td align='left' colspan='3'><input type='text' name='telefone' id='telefone' size='14' value='".$res['telefone']."' class='textfield'></td></tr>

<tr><th align='left'>E-mail:</th><td align='left'><input type='text' name='email' id='email' size='70' value='".$res['email']."' class='textfield'></td></tr>

<tr><th align='left'>Site:</th><td align='left'><input type='text' name='site' id='site' size='50' value='".$res['site']."' class='textfield'></td></tr>

<tr><th align='left'>Dt.Cadastro:</th><td align='left' colspan='3' class='textfield2'> ".$res['DataCadastro']." </td></tr>

<tr align='center'><td colspan='4' class='tittabela3'><input type='submit' name='alterar' id='alterar' value='Alterar'>

<input type='hidden' value='".$res['empresa']."' name='empresa'></td></tr></form>

<tr><td align='center' colspan='4' class='tittabela3'><form name='excluir' method='get' action='sql_excluir_vend.php'><input type='submit' name='excluir' id='excluir' value='Excluir'><input type='hidden' value='".$res['empresa']."' name='empresa'></form></td></tr>

</table></div>



<div id='tabs-2'><form name='editar' method='get' action='sql_convendedor2.php'><table align='center' border='1' width='800'>

<tr align='center'><td colspan='4' class='tittabela'> Observações </td></tr>

<tr><td align='left' colspan='3'><textarea cols='130' rows='30' name='obs'>".$res['obs']."</textarea></td></tr>

<tr align='center'><td colspan='4' class='tittabela3'><input type='submit' name='alterar' id='alterar' value='Alterar'>

<input type='hidden' value='".$res['empresa']."' name='empresa'></td></tr>

</table></form></div></div>";
}
?>

</div></div>

<div id="rodape"></div>



	</body>

</html>