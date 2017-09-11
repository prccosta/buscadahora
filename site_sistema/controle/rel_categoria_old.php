<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$sql=mysql_query("SELECT * FROM categorias order by nome'");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>	
	<link href="css/geral.css" rel="stylesheet" type="text/css" />
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
body 
{
	background-image:url(images/tela_rel.png);
	background-repeat:no-repeat;
	
	width:1002px;
	height:1050px;
	
	color:#ffffff;
	
	font-family:Verdana;
}

.nome_card
{
	font-weight:bold;
	font-size:13px;
}

#card1
{
	position:absolute;
	top:180px;
	left:110px;
}

-->
</style></head>
	<body>
			
		<div id="centrar"> 
			 
				<div id="card1">
					<div id="tit">
                    	<p>Relatório por Categoria</p>
                    </div><br>
                    
					<br />
					
					<p>&nbsp;</p>

<?php
$dia_da_semana = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado");
$num_dia = date("w");
$dia_extenso = $dia_da_semana[$num_dia];

while($res=mysql_fetch_array($sql)){
echo "<div id='tabs'>

<div id='tabs-1'><table align='center' border='0' width='870'>

<tr><td colspan='4'>__________________________________________________________________________________________________________________________</td></tr>
<tr><td> </td></tr>
<tr><th align='left' width='200'>&nbsp;&nbsp;ID:</th><td align='left' colspan='3'> ".$res['id']." </td></tr>
<tr><th align='left'>&nbsp;&nbsp;Categoria:</th><td align='left' colspan='3'> ".$res['nome']." </td></tr>
<tr><td colspan='4'>__________________________________________________________________________________________________________________________</td></tr>
<tr><td> </td></tr>
<tr><td align='center' colspan='4'><input type='button' value='Imprimir' onclick=javascript:window.print()></td></tr>
<tr><td align='center' colspan='4' class='tittabela'><a href='conrel.php'>Retornar</a></td></tr>
<tr><td align='right' colspan='4' class='nome_card'><b>".$dia_extenso.", ".date("d/m/Y")."</b></td></tr>
<tr><td align='right' colspan='4' class='nome_card'><b>IP utilizado: ".getenv("REMOTE_ADDR")." </b></td></tr>
</table></form></div></div>";
}
?>
</div></div>

</body>
</html>