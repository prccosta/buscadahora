<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$user_id = $_SESSION['user_id'];
$sql=mysql_query("SELECT * FROM vendedor order by empresa");
$sql2=mysql_query("SELECT * FROM usuarios where id = '$user_id'");
$resposta=mysql_fetch_array($sql2)

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
	background-image:url(images/tela_rel.jpg);
	background-repeat:no-repeat;
	margin-top:10pt;
}
.nome_card
{
	font-weight:bold;
	font-size:13px;
}
-->
    </style>
	
    </head>
	<body>
			
		<div id="centrar"> 
			 
		  <div id="card1">
					<img src="images/logo.png" width="211" height="118">
                    <div id="tit">
                    	<p>Relatório de Vendedores</p>
                    </div><br>
                    
					<br />
					
					<p>&nbsp;</p>

<?php
$dia_da_semana = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado");
$num_dia = date("w");
$dia_extenso = $dia_da_semana[$num_dia];

// Criar a tabela para receber os dados
echo "<table align='center' border='1' width='936'>
<tr align='center'>
    <td align='center' width='49'><strong>ID</strong></td>
	<td align='center' width='163'><strong>EMPRESA</strong></td>
	<td align='center' width='192'><strong>ENDEREÇO</strong></td>
	<td align='center' width='65'><strong>BAIRRO</strong></td>
	<td align='center' width='160'><strong>CIDADE</strong></td>
	<td align='center' width='90'><strong>TELEFONE</strong></td>
	<td align='center' width='171'><strong>E-MAIL</strong></td>
</tr>
</table>";
while($res=mysql_fetch_array($sql)){
echo "<table align='center' border='1' width='920'>
<tr align='center'>
  <td><label>
    <input name='id' style='text-align: center;' type='text' id='id' readonly value='".$res['id']."' class='azul' size='2'>
    </label></td>
	  <td><label>
    <input name='empresa' type='text' id='empresa' readonly value='".$res['empresa']."' class='azul'>
    </label></td>
	<td><label>
    <input name='endereco' type='text' id='endereco' readonly value='".$res['endereco']."' class='azul' size='25'>
    </label></td>
	<td><label>
    <input name='bairro' type='text' id='bairro' readonly value='".$res['bairro']."' class='azul' size='5'>
    </label></td>
	<td><label>
    <input name='cidade' type='text' id='cidade' readonly value='".$res['cidade']."' class='azul'>
    </label></td>
	<td><label>
    <input name='telefone' type='text' id='telefone' readonly value='".$res['telefone']."' class='azul' size='9'>
    </label></td>
	<td><label>
    <input name='email' type='text' id='email' readonly value='".$res['email']."' class='azul' size='22'>
    </label></td>
	
</tr>
</table>";
}
echo "<br><br><table align='center' border='0' width='920'>
	<tr><td align='right' colspan='4' class='nome_card'><b>".$dia_extenso.", ".date("d/m/Y")."</b></td></tr>
	<tr><td align='right' colspan='4' class='nome_card'><b>IP utilizado: ".getenv("REMOTE_ADDR")." </b></td></tr>
	<tr><td align='right' colspan='4' class='nome_card'><b>Usuário: ".$resposta['login']." </b></td></tr>
	<tr><td align='center' colspan='4'><input type='button' value='Imprimir' onclick=javascript:window.print()></td></tr>
	<tr><td align='center' colspan='4' class='tittabela3'><a href='relatorios.php'>RETORNAR</a></td></tr>
</table><br><br>";

?>
		  </div>
			</div>
	</body>
</html>