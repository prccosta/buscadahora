<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$user_id = $_SESSION['user_id'];
$sql=mysql_query("select * from `produtos` where id_vendedor = '$user_id' order by modelo");
$sql2=mysql_query("SELECT * FROM users where id = '$user_id'");
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
	margin-top:5pt;
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
                    	<p>Relatório de Todos os Produtos</p>
                    </div><br>
                    
					<br />
					
					<p>&nbsp;</p>

<?php
$dia_da_semana = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado");
$num_dia = date("w");
$dia_extenso = $dia_da_semana[$num_dia];

// Criar a tabela para receber os dados
echo "<table align='center' border='1' width='920'>
<tr align='center' class='barra'>
    <td width='4%'><label>ID</label></td>
	<td width='8%'><label>CATEGORIA</label></td>
	<td width='8%'><label>SUB-CATEGORIA</label></td>
	<td width='7%'><label>FABRICANTE</label></td>
	<td width='10%'><label>MODELO</label></td>
	<td width='5%'><label>PREÇO</label></td>
	<td width='13%'><label>EMPRESA</label></td>
</tr>
</table>";
while($res=mysql_fetch_array($sql)){
echo "<table align='center' border='0' width='920'>
<tr align='center'>
  <td><label>
    <input name='id' type='text' id='id' readonly value='".$res['id']."' size='2' class='azul'>
    </label></td>
	  <td><label>
    <input name='categoria' type='text' id='categoria' readonly value='".$res['categoria']."' size='15' class='azul'>
    </label></td>
	<td><label>
    <input name='subcategoria' type='text' id='subcategoria' readonly value='".$res['subcategoria']."' size='15' class='azul'>
    </label></td>
	<td><label>
    <input name='fabricante' type='text' id='fabricante' readonly value='".$res['fabricante']."' size='10' class='azul'>
    </label></td>
	<td><label>
    <input name='modelo' type='text' id='modelo' readonly value='".$res['modelo']."' size='15' class='azul'>
    </label></td>
	<td><label>
    <input name='preco' type='text' id='preco' readonly value='".$res['preco']."' size='9' class='azul'>
    </label></td>
	<td><label>
    <input name='empresa' type='text' id='empresa' readonly value='".$res['empresa']."' size='24' class='azul'>
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